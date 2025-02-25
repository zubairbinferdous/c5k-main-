<title>C5k | Details </title>
@include('layout.header')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
<style>
.editor h1, h2, h3 {
    font-family: "Georgia", serif;
    font-size: 24px;
    color: black !important;
    font-weight: 600;

   
}
.editor p{
    font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;
    text-align: justify;
    color:black !important;
    font-size: 19px;
}
.editor ul li{
  color:black;
  font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;
  margin-left: 40px;

}
</style>
<body>

@include('pages.page_header_nav')

<div class="container my-5 editor">
  <div style="margin:-14px">
    <h1 style="font-size: 24px" >EDITORIAL BOARD</h1>
    <div class="mt-4">  
      
  <h1 style="font-size: 28px" > {{ $journal->title }}</h1><hr>
            @foreach($editorials as $edit)
                <p >{!! $edit->editorial_member !!}</p>
            @endforeach
    </div>
  </div>
</div>

@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>