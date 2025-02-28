@extends('./layouts.master')
@section('userContent')
    <div class="max-w-7xl mx-auto">
        <!-- Title -->
        <br> <br>
        <h2 class="text-4xl font-bold text-center "> Journals</h2>

        <!-- Journal List -->
        @foreach ($journals as $journal)
            <div class="space-y-6 mt-4">
                <!-- Journal Item -->
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col md:flex-row items-center gap-6 border">
                    <a href="{{ route('journal.show', ['slug' => $journal->slug, 'id' => $journal->id]) }}">
                        <img src="{{ asset('public/backend/journal/' . $journal->journal_image) }}"
                            class="w-[180px] h-[230px] object-cover rounded-lg" alt="Journal Image">
                        <div>
                            <a href="{{ route('journal.show', ['slug' => $journal->slug, 'id' => $journal->id]) }}"
                                class="text-xl font-bold text-blue-600 hover:underline">{{ $journal->title }}</a>
                            <p class="text-gray-600 text-sm mt-2">ISSN: {{ $journal->issn_print }} (print)</p>
                            <p class="text-gray-600 text-sm">ISSN: {{ $journal->issn_online }} (online)</p>
                            <p class="text-gray-600 text-sm">Publication Frequency: Monthly</p>
                            <p class="text-gray-600 text-sm">Citescore:{{ $journal->cite_score }}</p>
                            <p class="text-gray-600 text-sm">Impact Factor: {{ $journal->impact_factor }}</p>
                        </div>
                    </a>
                </div>

                <!-- Journal Item -->

            </div>
        @endforeach



        <div class="flex justify-center mt-6">
            {{ $journals->links('pagination::tailwind') }}
        </div>
    </div>
@endsection
