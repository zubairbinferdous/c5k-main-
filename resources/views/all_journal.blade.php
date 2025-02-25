<title>C5k | Journals</title>
@include('layout.header')

@section('css')
<style>
  .journal-card {
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .journal-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  }

  .journal-card img {
    border-radius: 10px;
    max-width: 100%;
    object-fit: cover;
  }

  .journal-title {
    color: #343a40;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .journal-info p {
    margin: 0;
    font-size: 16px;
    color: #6c757d;
  }

  .all-journal h1 {
    font-size: 2rem;
    font-weight: bold;
    text-align: center;
    color: #0d6efd;
    margin-bottom: 20px;
  }

  .all-journal h4 {
    font-weight: bold;
    color: #0d6efd;
    margin-bottom: 10px;
  }
</style>

<body>
<section>
  <div class="container all-journal">
    <h1 class="pt-4 pb-3">Journals</h1>
    <div class="row pb-3">
      @foreach($journals as $journal)
      <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
        <a href="{{ route('journal.show', ['slug' => $journal->slug, 'id' => $journal->id]) }}" class="text-decoration-none">
          <div class="journal-card p-3 d-flex flex-wrap">
            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-2 mb-sm-0">
              <img src="{{ asset('public/backend/journal/' . $journal->journal_image) }}" class="img-fluid" alt="Journal Image">
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-12">
              <h4 class="journal-title pt-2">{{ $journal->title }}</h4>
              <div class="journal-info">
                <p>ISSN: {{ $journal->issn_print }} (print)</p>
                <p>ISSN: {{ $journal->issn_online }} (online)</p>
                <p>Publication Frequency: Monthly</p>
                <p>Citescore: {{ $journal->cite_score }}</p>
                <p>Impact Factor: {{ $journal->impact_factor }}</p>
              </div>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-center align-items-center">
      {{ $journals->links() }}
    </div>
  </div>
</section>

@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')
</body>
</html>
0000000