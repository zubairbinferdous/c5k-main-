<title>C5K </title>
@include('layout.header')
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    .img-container {
        overflow: hidden;
        /* Ensure the zoom stays within the container */
        position: relative;
        /* For absolute positioning */
    }

    .img-container img {
        transition: transform 0.4s ease;
        /* Smooth transition effect */
        width: 100%;
        /* Ensures images fill the container */
        height: auto;
        /* Maintain aspect ratio */
    }

    .img-container:hover img {
        transform: scale(1.3);
        /* Zoom in effect */
    }

    .carousel-control-prev,
    .carousel-control-next {
        top: 110%;
        /* Adjust to position vertically */
        bottom: auto;
        /* Remove default bottom alignment */
        transform: translateY(-50%);
        /* Center icon vertically */
        width: 5%;
        /* Optional: Adjust width of clickable area */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #04509E;
        /* Optional: Add background for visibility */
        border-radius: 50%;
        /* Make icons circular */
    }

    .carousel-control-prev-icon:hover,
    .carousel-control-next-icon:hover {
        background-color: rgba(0, 0, 0, 0.8);
        /* Darker on hover for better visibility */
    }

    .carousel-indicators li {
        background-color: blue;
        /* Set the default indicator color */
    }

    .carousel-indicators .active {
        background-color: darkblue;
        /* Different color for the active indicator */
    }

    .carousel-indicators li:hover {
        background-color: lightblue;
        /* Lighter shade on hover */
    }

    /* slider section  */

    .banner-card {
        background: linear-gradient(135deg, #05509F, #3B82F6);
        color: #fff;
        border: none;
        border-right: 5px solid #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .banner-card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .banner-divider {
        border-width: 3px;
        width: 60%;
        margin: 0 auto;
    }

    .banner-divider-green {
        border-color: rgb(37, 151, 37);
    }

    .banner-divider-light-green {
        border-color: rgb(147, 221, 147);
    }

    .banner-divider-yellow {
        border-color: rgb(163, 187, 77);
    }

    .nav-link:hover {
        text-decoration: none;
        color: #e2e2e2;
    }

    /* Latest News Section */
    .latest-news-section .latest-news-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
        background-color: #ffffff;
        display: flex;
        flex-direction: column;
        /* Ensure vertical stacking */
    }

    .latest-news-section .latest-news-card:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    /* Image Section */
    .latest-news-section .latest-news-image img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-bottom: 1px solid #ddd;
    }

    /* Title Below the Image */
    .latest-news-section .latest-news-title {
        color: black;
        font-size: 1rem;
        text-align: start;
        margin: 0;
        padding: 15px;
        font-family: "Georgia", serif;


    }

    /* Text Section */
    .latest-news-section .latest-news-text {
        padding: 15px;
        flex: 1;
        /* Push content to fill available space */
        color: #666;
    }

    .slider img {
        height: 600px;
        width: 100%
    }

    /* Layout for Larger Screens */
    @media (min-width: 768px) {
        .latest-news-section .row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .latest-news-section .col-12 {
            flex: 1 1 calc(33.333% - 15px);
            /* 3 cards in a row */
        }
    }

    .latest-news-section .btn-success {
        font-size: 1rem;
        padding: 10px 16px;
        border-radius: 5px;
    }


    .social-card {
        background-color: #04509E;
        border-radius: 8px;
        padding: px;
        margin: px 0;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        color: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .social-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .icon-wrapper {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .icon-wrapper img {
        width: 90%;
        height: auto;
    }

    p {
        font-size: 12px;
        font-weight: 400;
        margin: 0;
        color: #fff;
    }

    /* Section Styling */
    .subscribe-section {
        background: linear-gradient(135deg, #04509E, #80C2F4);
        padding: 50px 0;
        border-radius: 10px;
        color: white;
        box-shadow: 0px 10px 16px rgba(0, 0, 0, 0.1);
    }

    /* Form Container */
    .subscribe-form {
        width: 100%;
        max-width: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
    }

    /* Input Field Styling */
    .subscribe-form .form-control {
        height: 50px;
        font-size: 16px;
        border: none;
        box-shadow: none;
        padding: 10px 15px;
    }

    /* Button Styling */
    .subscribe-form .btn-primary {
        height: 50px;
        font-size: 16px;
        background-color: #FF6B35;
        border: none;
        padding: 0 16px;
        transition: background-color 0.3s ease;
    }

    .subscribe-form .btn-primary:hover {
        background-color: #E85921;
    }

    /* Input Group Styling */
    .input-group {
        display: flex;
        width: 100%;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    .input-group .form-control:focus {
        outline: none;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    }
</style>

<body>
    <section class="py-3 slider">
        <div class="container" style="padding-right: 0px; padding-left: 0px;">
            <div id="bannerCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                <!-- Carousel Items -->
                <div class="carousel-inner">
                    @foreach ($banners as $key => $banner)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ asset('/public/backend/banner/' . $banner->banner) }}"
                                alt="{{ $banner->first_heading }}" class="d-block w-100 img-fluid"
                                style="object-fit: cover; margin: 0; padding: 0;">
                        </div>
                    @endforeach
                </div>

    
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach ($banners as $key => $banner)
                        <li data-target="#bannerCarousel" data-slide-to="{{ $key }}"
                            class="{{ $key == 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    <section class="container mt-4">
        <div class="row">

            <div class="col-md-4 col-lg-4 col-sm-6 mb-lg-0 mb-4">
                <div class="card banner-card">
                    <div class="card-body text-center">
                        <a href="/home/article" class="nav-link text-white">
                            <h4 class="mt-3 mb-3" style='font-family: "Georgia", serif;'>Welcome! Member</h4>

                            </h4>
                        </a>
                        <hr class="banner-divider banner-divider-light-green">
                        <p class="mt-3" style='font-family: "Georgia", serif; '>Enrich your experience with C5K</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 mb-lg-0 mb-4">
                <div class="card banner-card">
                    <div class="card-body text-center">
                        <a href="/home/article" class="nav-link text-white">
                            <h4 class="mt-3 mb-3"style='font-family: "Georgia", serif;'>Get Connected

                            </h4>
                        </a>
                        <hr class="banner-divider banner-divider-light-green">
                        <p class="mt-3" style='font-family: "Georgia", serif;'>Explore what C5K can offer you</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">
                <div class="card banner-card">
                    <div class="card-body text-center">
                        <a href="/dissertation/thesis" class="nav-link text-white">
                            <h4 class="mt-3 mb-3" style='font-family: "Georgia", serif;'>Get Involved</h4>
                        </a>
                        <hr class="banner-divider banner-divider-yellow">
                        <p class="mt-3" style='font-family: "Georgia", serif;'>Enrich your experience with C5K</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-news-section py-5">
        <div class="container">
            <h1 class="text-center mb-5" style='font-family: "Georgia", serif; color:black'>The Latest Announcement from
                C5K</h1>
            <div class="row">
                @foreach ($news as $article)
                    <div class="col-12 mb-4">
                        <a href="{{ url('newss/' . $article->id) }}" class="text-decoration-none">
                            <div class="latest-news-card shadow-sm">
                                <!-- Image Section -->
                                <div class="latest-news-image">
                                    <img src="{{ asset('public/backend/news/' . $article->image) }}"
                                        alt="{{ $article->title }}" class="img-fluid">
                                </div>
                                <!-- Title Section -->
                                <div class="latest-news-title"
                                    style='font-family: "Georgia", serif; color:black;font-size:18px'>
                                    {{ \Illuminate\Support\Str::limit($article->title, 30, '...') }}
                                </div>
                                <!-- Text Section -->
                                <div class="latest-news-text">
                                    <p class=""
                                        style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; font-size:16px;color:black">

                                        {!! \Illuminate\Support\Str::limit(strip_tags($article->details), 80, '...') !!}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Read More</span>
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('home.news') }}" class="btn btn-success">
                    See More <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <!-- Latest Articles Section -->
            <h1 class="pt-4 text-center" style='font-family: "Georgia", serif;'><b>Latest Articles </b></h1>
            <div class="row mt-4">
                @foreach ($articles as $article)
                    <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                        <a href="{{ route('single.issue', ['id' => $article->journal_id, 'volumeId' => $article->volume_id, 'issueId' => $article->id]) }}"
                            class="text-decoration-none">
                            <div class="card shadow-sm" style="border-radius: 10px; overflow: hidden; height: 350px;">
                                <div class="card-body d-flex flex-column" style="background: #f9f9f9;">
                                    <p style="color: #20be42; font-size: 14px; font-weight: bold;">
                                        C5K <span class="badge badge-success ml-2">Article</span>
                                    </p>
                                    <h6 class="card-title"
                                        style='font-family: "Georgia", serif; font-size:21px; color:blue;font-size:17px; font-weight: 900;'>
                                        {{ $article->article_title ?? '' }}</h6>
                                    <p class="card-text  flex-grow-1"
                                        style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; font-size:12px; color:black; text-align:justify; ">
                                        {{ Str::limit(strip_tags($article->description ?? ''), 340, '...') }}
                                    </p>
                                    <p class="text-primary my-2 mb-0 mt-auto"
                                        style='font-family: "Georgia", serif;color:black'>Read more <i
                                            class="fa fa-long-arrow-right"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('home.article') }}">
                    <button class="btn btn-outline-success px-4 py-2" style='font-family: "Georgia", serif;'>See All
                        Articles</button>
                </a>
            </div>

            <!-- Latest Blogs Section -->
            <h1 class="pt-5 text-center" style='font-family: "Georgia", serif;'><b>Latest Blogs</b></h1>
            <div class="row mt-4">
                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-lg-4 col-xl-4 mb-4">
                        <a href="{{ route('blog.details', ['id' => $blog->id]) }}" class="text-decoration-none">
                            <div class="card shadow-sm" style="border-radius: 10px; overflow: hidden; height: 350px;">
                                <img src="{{ asset('public/public/backend/blog/' . $blog->image) }}"
                                    alt="{{ $blog->title }}" class="card-img-top img-fluid"
                                    style="height: 180px; object-fit: cover;">
                                <div class="card-body d-flex flex-column" style="background: #f4f8fb;">
                                    <h6 class="card-title text-dark font-weight-bold"
                                        style='font-family: "Georgia", serif; font-size:18px;color:black'>
                                        {{ \Illuminate\Support\Str::limit($blog->title, 60, '...') }}</h6>
                                    <p class="card-text  flex-grow-1"
                                        style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;font-size:16px;color:black">

                                        {{ \Illuminate\Support\Str::limit(strip_tags($blog->details), 60, '...') }}
                                    </p>
                                    <p class="text-primary mb-0 mt-auto" style='font-family: "Georgia", serif;'>Read
                                        more <i class="fa fa-long-arrow-right"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('home.blogs') }}">
                    <button class="btn btn-outline-success px-4 py-2" style='font-family: "Georgia", serif;'>See All
                        Blogs</button>
                </a>
            </div>
        </div>
    </section>

    <section class="py-3">
        <div class="container" style="padding: 0;">
            <div class="row align-items-center mb-4">
                <!-- Logo on the left -->
                <div class="col-md-2 d-flex justify-content-center">
                    @php
                        $row = \App\Setting::first();
                    @endphp
                    @if ($row && $row->logo_path)
                        <img src="{{ asset('public/backend/logo/' . $row->logo_path) }}" alt="Logo"
                            class="img-fluid" style="max-height: 180px;">
                    @endif
                </div>

                <!-- Title in the center -->
                <div class="col-md-8 text-center">
                    @php
                        $totalJournals = \App\Journal::count();
                    @endphp
                    <h1 style='font-family: "Georgia", serif;'><b>Discover the insights of our {{ $totalJournals }}
                            diverse journals</b></h1>
                </div>

                <!-- Empty space on the right for alignment -->
                <div class="col-md-2"></div>
            </div>

            <!-- Second row: 6 images in a row -->
            <div class="row">
                @foreach ($journals as $journal)
                    <div class="col-6 col-md-4 col-lg-2 mb-3 d-flex justify-content-center" style="">
                        <a href="{{ route('journal.show', ['slug' => $journal->slug, 'id' => $journal->id]) }}">
                            <img src="{{ asset('public/backend/journal/' . $journal->journal_image) }}"
                                class="img-fluid rounded" alt="Journal Image"
                                style="transition: transform 0.3s ease; display: block; margin: 0 auto;"
                                onmouseover="this.style.transform='scale(1.05)'"
                                onmouseout="this.style.transform='scale(1)'">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="Journal-about py-5"
        style="background-image: url('public/backend/footer.jpg'); background-size: cover; background-position: center;">
        <div class="container text-center text-white">

            <h1 class="my-4" style='font-family: "Georgia", serif;color:black'>Journals</h1>


        </div>

        <div class="py-3 slider">
            <div class="container px-0">
                <div id="thesispaper" class="carousel slide" data-ride="carousel" data-interval="2000">
                    <!-- Carousel Items -->
                    <div class="carousel-inner">
                        @foreach ($journalsSLider->chunk(3) as $index => $chunk)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <div class="row">
                                    @foreach ($chunk as $journal)
                                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                            <div class="card">
                                                <img src="{{ asset('public/backend/journal/' . $journal->journal_image) }}"
                                                    class="card-img-top img-fluid rounded"
                                                    alt="Dissertation {{ $loop->parent->iteration }}">

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Indicators -->
                    <ol class="carousel-indicators mt-4">
                        @foreach ($journalsSLider->chunk(3) as $index => $chunk)
                            <li data-target="#thesispaper" data-slide-to="{{ $index }}"
                                class="{{ $index === 0 ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>

                    <!-- Controls -->

                </div>
            </div>
        </div>



    </section>



    <section>
        <div class="container social-section">
            <h2 class="text-black text-center pt-5" style='font-family: "Georgia", serif;'>Follow Us</h2>
            <div class="d-flex flex-wrap align-items-center justify-content-center pt-4 pb-4">
                @if (isset($socials))
                    @foreach ($socials as $social)
                        <!-- Facebook -->
                        <div class="social-card text-center mx-2">
                            <a href="{{ isset($social->facebook) ? $social->facebook : '#' }}" target="_blank">
                                <div class="icon-wrapper">
                                    <img src="{{ asset('/') }}public/front/images/social/facebook.png"
                                        alt="Facebook" class="img-fluid">
                                </div>
                            </a>
                        </div>
                        <!-- Pinterest -->
                        <div class="social-card text-center mx-2">
                            <a href="{{ isset($social->pinterest) ? $social->pinterest : '#' }}" target="_blank">
                                <div class="icon-wrapper">
                                    <img src="{{ asset('/') }}public/front/images/social/whatsapp.png"
                                        alt="WhatsApp" class="img-fluid">
                                </div>
                            </a>
                        </div>
                        <!-- LinkedIn -->
                        <div class="social-card text-center mx-2">
                            <a href="{{ isset($social->linkedin) ? $social->linkedin : '#' }}" target="_blank">
                                <div class="icon-wrapper">
                                    <img src="{{ asset('/') }}public/front/images/social/in.png" alt="LinkedIn"
                                        class="img-fluid">
                                </div>
                            </a>
                        </div>
                        <!-- Twitter -->
                        <div class="social-card text-center mx-2">
                            <a href="{{ isset($social->twitter) ? $social->twitter : '#' }}" target="_blank">
                                <div class="icon-wrapper">
                                    <img src="{{ asset('/') }}public/front/images/social/x.png" alt="Twitter"
                                        class="img-fluid">
                                </div>
                            </a>
                        </div>
                        <!-- Instagram -->
                        <div class="social-card text-center mx-2">
                            <a href="{{ isset($social->instagram) ? $social->instagram : '#' }}" target="_blank">
                                <div class="icon-wrapper">
                                    <img src="{{ asset('/') }}public/front/images/social/instagram.png"
                                        alt="Instagram" class="img-fluid">
                                </div>
                            </a>
                        </div>
                        <!-- YouTube -->
                        <div class="social-card text-center mx-2">
                            <a href="{{ isset($social->youtube) ? $social->youtube : '#' }}" target="_blank">
                                <div class="icon-wrapper">
                                    <img src="{{ asset('/') }}public/front/images/social/youtube.png"
                                        alt="YouTube" class="img-fluid">
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <section class=" my-5 ">
        <div class="container mb-5">
            <h3 class="pt-5 pb-3 text-center text-black" style='font-family: "Georgia", serif;'>Subscribe to C5K for
                Updates</h3>
            <div class="d-flex justify-content-center align-items-center">
                <form action="{{ route('email.post') }}" method="post" class="subscribe-form">
                    @csrf
                    <div class="input-group ">
                        <!-- Email Input -->
                        <input type="email" class="form-control rounded-start" name="email"
                            placeholder="Enter your email" required>

                        <!-- Subscribe Button -->
                        <button class="btn btn-primary text-white rounded-end" type="submit">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>












    @include('layout.footer_nav')
    <!-- end info_section -->


    <!-- footer section -->
    @include('layout.footer')
    <!-- footer section -->

    <!-- jQery -->
    @include('layout.js')

    <!-- End Google Map -->

</body>

</html>
