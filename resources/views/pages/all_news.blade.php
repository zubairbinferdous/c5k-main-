<title>C5k | Announcements </title>
@include('layout.header')
@section('css')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
<style>
h1, h2, h3, p {
    font-family: 'Montserrat', sans-serif;
    font-weight: 400;
}
.card-custom {
    border: none;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card-custom:hover {
    transform: translateY(-10px);
    box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.2);
}
.card-custom img {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    object-fit: cover;
    height:200px;
    width:100%;
}
.card-custom h5 {
    font-weight: 600;
}
.card-custom p {
    font-size: 14px;
    color: #6c757d;
}
</style>
@endsection
<body>
<div class="container mt-3">
    <h1 class="text-center mb-4 py-4">All Latest News</h1>
    <div class="row">
    @foreach($newss as $news)
    <div class="col-md-4 mb-4">
        <div class="card card-custom">
            <div class="card-body">
                <a href="{{route('news.details', ['id' => $news->id])}}" style="color: #212529; text-decoration: none;">
                <img src="{{ asset('public/backend/news/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid" style="width: 100%; height: 200px;">
                <h5 class="mt-4">{!! \Illuminate\Support\Str::limit(strip_tags($news->title), 30, '...') !!}</h5>
                <p class="mt-1">{!! \Illuminate\Support\Str::limit(strip_tags($news->details), 100, '...') !!}</p>
                </a>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>



@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>