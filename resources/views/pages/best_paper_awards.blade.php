<title>{{ $journal->title ?? 'Default Title' }}</title>
@include('layout.header')
<style>
.nav-item-bottom.dropdown:hover .dropdown-menu {
    display: block;
    opacity: 1;
    visibility: visible;
}

/* Adjust dropdown menu background */
.dropdown-menu {
    background-color: #fff; /* Change this for a different background color */
    transition: all 0.3s ease;
}

/* Add hover effect to items */
.dropdown-item:hover {
    background-color: rgba(255, 255, 255, 0.2); /* Light overlay on hover */
    color: #023569;
}
form {
  max-width: 100%;
}
input.form-control {
  border-radius: 0.25rem;
}
button {
  border-radius: 0.25rem;
}
</style>
<body>
@include('pages.page_header_nav')

<div class="container my-5">
    <div class="editorial-section">  
    <h2 class="text-center">Best Paper Awards</h2><hr>
    <!-- <h3> {{ $journal->title }}</h3><hr> -->
            @foreach($bestpapers as $edit)
                <p>{!! $edit->bestpaper !!}</p>
            @endforeach
    </div>
</div>

@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>