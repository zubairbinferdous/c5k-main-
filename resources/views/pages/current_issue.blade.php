<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $journal->title ?? 'Default Title' }}</title>
    @include('layout.header')
    <style>
        .volume-item {
            align-items: center;
            margin-bottom: 1rem;
        }
        .volume-item img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 1rem;
        }
        .volume-item-info {
            flex-grow: 1;
        }
        .volume-item-title {
            font-size: 1rem;
            font-weight: bold;
            color: #555;
            margin: 0;
        }
        .volume-item-month {
            font-size: 0.9rem;
            color: #888;
        }
    </style>
</head>
<body>
    @include('pages.page_header_nav')
    
    <div class="container mx-auto px-4 py-5 volume-list">
        <h2 class="text-3xl font-semibold mt-3 text-center mb-5">Volumes</h2>

        <!-- Tabs Start -->
        @php
            $groupedVolumes = $volume_list->groupBy(function ($item) {
                return \Carbon\Carbon::parse($item->created_at)->year;
            });

            $years = range(2024, 2028); // Define the years for tabs
        @endphp

        <ul class="nav nav-tabs mb-4" id="yearTab" role="tablist">
            @foreach ($years as $year)
                <li class="nav-item">
                    <a 
                        class="nav-link @if ($loop->first) active @endif" 
                        id="tab-{{ $year }}" 
                        data-toggle="tab" 
                        href="#content-{{ $year }}" 
                        role="tab" 
                        aria-controls="content-{{ $year }}" 
                        aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                        {{ $year }}
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="tab-content" id="yearTabContent">
            @foreach ($years as $year)
                <div 
                    class="tab-pane fade @if ($loop->first) show active @endif" 
                    id="content-{{ $year }}" 
                    role="tabpanel" 
                    aria-labelledby="tab-{{ $year }}">
                    <div>
                        @if (isset($groupedVolumes[$year]))
                            @foreach ($groupedVolumes[$year] as $volume)
                                <a href="{{ route('current.issue.list', ['id' => $journal->id, 'volumeId' => $volume->id]) }}" class="volume-item">
                                    <img src="{{ asset('public/backend/' . $volume->image_path) }}" alt="Volume Image">
                                    <div class="volume-item-info mt-4">
                                        <p class="volume-item-title">
                                            {{ Str::limit($volume->volume_name, 30) }} Issue 1
                                        </p>
                                        <p class="volume-item-month">Issue Date: 21 August, 2024</p>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <p>No volumes available for {{ $year }}.</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Tabs End -->
        
    </div>

    @include('layout.footer_nav')
    @include('layout.footer')
    @include('layout.js')
</body>
</html>
