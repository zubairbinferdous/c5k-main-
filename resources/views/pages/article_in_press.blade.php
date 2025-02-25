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
    
    <h2 class="mt-3">Article in Press</h2>
    <p>Peer-reviewed works that are accepted for publication but have not yet been assigned to volumes or issues can be cited using Peer-reviewed works that are accepted for publication but have not yet been assigned to volumes or issues can be cited using
    </p>
</div>
<div class="container mt-2">
      <div class="row mt-5">
       <div class="col-2"></div>
       <div class="col-10">
        <p>Research article <i class="fa fa-circle text-success"></i> Open access</p>
        <h5>Playing with words: Comparing the vocabulary and lexical diversity of ChatGPT and humans</h5>
        <p class="mt-2">Pedro Reviriego, Javier Conde, Elena Merino-Gómez, Gonzalo Martínez, José Alberto Hernández
        In Press, Journal Pre-proof, Available online 12 November 2024</p>
        <i class="fa fa-file-pdf-o text-danger"> view pdf</i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-file-pdf-o text-danger"> download pdf</i>
       </div>
      </div>
      <div class="row mt-5">
       <div class="col-2"></div>
       <div class="col-10">
        <p>Research article <i class="fa fa-circle text-success"></i> Open access</p>
        <h5>Playing with words: Comparing the vocabulary and lexical diversity of ChatGPT and humans</h5>
        <p class="mt-2">Pedro Reviriego, Javier Conde, Elena Merino-Gómez, Gonzalo Martínez, José Alberto Hernández
        In Press, Journal Pre-proof, Available online 12 November 2024</p>
        <i class="fa fa-file-pdf-o text-danger"> view pdf</i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-file-pdf-o text-danger"> download pdf</i>
       </div>
      </div>
      <div class="row mt-5">
       <div class="col-2"></div>
       <div class="col-10">
        <p>Research article <i class="fa fa-circle text-success"></i> Open access</p>
        <h5>Playing with words: Comparing the vocabulary and lexical diversity of ChatGPT and humans</h5>
        <p class="mt-2">Pedro Reviriego, Javier Conde, Elena Merino-Gómez, Gonzalo Martínez, José Alberto Hernández
        In Press, Journal Pre-proof, Available online 12 November 2024</p>
        <i class="fa fa-file-pdf-o text-danger"> view pdf</i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-file-pdf-o text-danger"> download pdf</i>
       </div>
      </div>
    </div>


@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>