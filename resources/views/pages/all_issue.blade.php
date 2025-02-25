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
<div class="container">
    
    <h2 class="mt-3">All Issues</h2>

    <!-- Volumes and Issues Section -->
    <section id="volumes-issues mt-3">

        <!-- Volume 25 for 2024 -->
        <div class="volume">
            <h3><span>Volume 25 </span><span class="float-right">(January - November 2024)</span></h3><hr style="border-bottom:1px solid #000;">
            <ul class="issues-list">
                <li><a href="#"><span style="border-bottom:1px solid #3C9CD7;">Issue 7</span></a> - November 2024</li><hr>
                <li><a href="#"><span style="border-bottom:1px solid #3C9CD7;">Issue 6</span></a> - September 2024</li><hr>
                <li><a href="#"><span style="border-bottom:1px solid #3C9CD7;">Issue 5</span></a> - July 2024</li><hr>
                <li><a href="#"><span style="border-bottom:1px solid #3C9CD7;">Issue 4</span></a> - June 2024</li><hr>
                <li><a href="#"><span style="border-bottom:1px solid #3C9CD7;">Issue 3</span></a> - April 2024</li><hr>
                <li><a href="#"><span style="border-bottom:1px solid #3C9CD7;">Issue 2</span></a> - February 2024</li><hr>
                <li><a href="#"><span style="border-bottom:1px solid #3C9CD7;">Issue 1</span></a> - January 2024</li><hr>
            </ul>
        </div>
    </section>
</div>


@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>