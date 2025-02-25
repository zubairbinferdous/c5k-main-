<title>C5k | dissertation/thesis</title>
@include('layout.header')

<style>
.promote-text {
    font-size: 5rem; /* Adjust font size as needed */
    font-weight: bold;
    font-family: "Arial Black", Arial, sans-serif;
    background: linear-gradient(90deg, #0073e6, #00bfff); /* Adjust colors as needed */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}


.services-section {
  text-align: center;
  padding: 2rem 1rem;
}

.services-header h2 {
  font-size: 2rem;
  margin-bottom: 1.5rem;
  color:#0b50a1;
}

.service-card {
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background: linear-gradient(135deg, #f9f9f9, #eaeaea);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      margin:5px;
      height:350px;
    }

    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    .icon svg {
      margin-bottom: 10px;
    }
.service-card .icon svg {
  margin-bottom: 1rem;
  transition: transform 0.3s;
}

.service-card:hover .icon svg {
  transform: scale(1.1);
}

.service-card h3 {
  font-size: 1.25rem;
  margin-bottom: 0.75rem;
  color:#0b50a1;
}

.service-card p {
  font-size: 0.9rem;
  color: #666;
}
.step-cards {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
  justify-content: center;
}

.step-card {
  position: relative;
  background: linear-gradient(135deg, #007bff, #0056b3);
  border-radius: 12px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
  width: 250px;
  padding: 1.5rem;
  text-align: center;
  color: #fff;
  transition: transform 0.3s, box-shadow 0.3s;
}

.step-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}
.step-section h2{
    color:#0b50a1;
}

.step-section h4{
    color:green;
}

.step-card span {
  position: absolute;
  top: -10px;
  left: -10px;
  background-color: #ff4d4d;
  color: #fff;
  font-weight: bold;
  font-size: 1.5rem;
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50%;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.step-card h3 {
  font-size: 1.5rem;
  margin-bottom: 1rem;
  color:white;
}

.step-card p {
  font-size: 1rem;
  color: #e0e0e0;
}

.section-title {
  text-align: center;
  margin-bottom: 2rem;
}

.section-title h2 {
  font-size: 2rem;
  color:#0b50a1;
}

.section-title p {
  font-size: 1rem;
  color: #666;
}
.button-container {
  text-align: center;
  margin-top: 2rem;
}
.button-container {
  text-align: center; /* Centers the button in the container */
}

.button-container button {
  position: relative; /* Needed for pseudo-element positioning */
  background: red;
  color: #fff;
  border: none;
  padding: 0.75rem 2rem;
  font-size: 1.9rem;
  font-weight: bold;
  border-radius: 20px;
  cursor: pointer;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s, box-shadow 0.3s;
  height:150px;
  width:250px;
}

.button-container button::after {
  content: "";
  position: absolute;
  bottom: -30px; /* Position below the button */
  left: 30%;
  transform: translateX(-50%);
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 50px 20px 0 40px; /* Triangle dimensions */
  border-color: red transparent transparent transparent; /* Triangle color matching the button */
}

.button-container button:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
}

.button-container button:active {
  transform: translateY(2px);
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}

.statistics-section {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  justify-content: center;
  margin-top: 2rem;
  text-align: center;
}


.stat-card {
  background: linear-gradient(135deg, #f9f9f9, #eaeaea);
  color: red;
  border-radius: 20px;
  width: 300px;
  padding: 2rem;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s, box-shadow 0.3s;
}

.stat-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

.stat-number {
  font-size: 2.5rem;
  font-weight: bold;
  margin-bottom: 1rem;
  color: #0b50a1; /* Light green for emphasis */
}

.stat-title {
  font-size: 1.2rem;
  font-weight: 500;
}

.statistics-container h3 {
  font-size: 2rem;
  color:#0b50a1;
  margin-bottom: 2rem;
  text-align: center;
}

.publication-section {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 2rem;
  padding: 3rem 1rem;
}

.publication-content {
    flex: 0 0 100%; /* Full width for text on large screens */
  }

@media (min-width: 992px) { /* Large screens */
  
  .publication-content {
  flex: 1;
  text-align: left;
}
}

.publication-content h2 {
  font-size: 2rem;
  color: #333;
  margin-bottom: 1rem;
    color:#0b50a1;

}

.publication-content p {
  font-size: 1rem;
  color: #555;
  line-height: 1.6;
  margin-bottom: 1.5rem;
}

.publication-content ul {
  margin-top: 1rem;
  padding-left: 1rem;
  list-style-type: disc;
  color: #555;
}

.publication-content ul li {
  margin-bottom: 0.5rem;
  font-size: 1rem;
}

.publication-image {
  flex: 1;
  display: flex;
  justify-content: center;
}

.publication-image img {
  width: 100%;
  height: 500px; /* Maintain aspect ratio */
  border-radius: 12px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}

.filter-section-thesis {
  gap: 20px;
  display: flex;
  flex-direction: row; /* Default: side-by-side layout */
}

.sidebar-section {
  background-color: #74992e;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  flex: 1;
}

.sidebar-section h5 {
  color: #0d6efd;
  font-weight: bold;
  margin-bottom: 15px;
  text-align: center;
}

.sidebar-section ul {
  padding: 0;
}

.sidebar-section ul li {
  list-style: none;
}

.sidebar-section ul li a {
  display: block;
  padding: 10px 0;
  color: white;
  text-decoration: none;
  font-size: 1rem;
  font-weight: 500;
  position: relative;
  transition: all 0.3s;
}

.sidebar-section ul li a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background: #0d6efd;
  transition: width 0.3s;
}

.sidebar-section ul li a:hover {
  color: black;
}

.sidebar-section ul li a:hover::after {
  width: 100%;
}

.content-section {
  background-color: rgba(255, 255, 128, 0.5);
  border-radius: 8px;
  padding: 20px;
  flex: 3;
}

.content-section h5 {s
  color: #0d6efd;
  font-weight: bold;
  margin-bottom: 20px;
}

.content-section ul li {
  list-style: none;
}

.content-section ul li a {
  display: block;
  padding: 10px 0;
  color: #212529;
  text-decoration: none;
  font-size: 1rem;
  font-weight: 500;
  position: relative;
  transition: all 0.3s;
}

.content-section ul li a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background: #0d6efd;
  transition: width 0.3s;
}

.content-section ul li a:hover {
  color: #0d6efd;
}

.content-section ul li a:hover::after {
  width: 100%;
}

/* Responsive Styles */
@media (max-width: 768px) {
  .filter-section-thesis {
    flex-direction: column; /* Stack sections vertically */
  }

  .sidebar-section,
  .content-section {
    flex: 1; /* Both take equal width when stacked */
  }

  .content-section {
    margin-top: 20px; /* Add spacing between sections */
  }
}

@media (max-width: 576px) {
  .sidebar-section ul li a,
  .content-section ul li a {
    font-size: 0.9rem; /* Reduce font size for smaller screens */
  }

  .sidebar-section,
  .content-section {
    padding: 15px; /* Adjust padding for smaller screens */
  }
}
.academic .academic-title h3 {
      color:#0b50a1;
      font-size:32px;
      font-weight:600;

}
.academic .academic-title p {
      color:#0b50a1;
      font-size:20px;
      font-weight:600;

}
.academic h4{
          color:#0b50a1;
font-size:28px;
font-weight:600;

}
.thesis-banner h1{
              color:#0b50a1;
              font-size:28px;
font-weight:600;

    
}
.thesis-banner h6{
              color:#0b50a1;
              font-size:20px;
font-weight:600;

    
}
.custom-prev, .custom-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 5%;
}

.custom-prev {
  left: -2%;
  color: #0b50a1 !important; /* This won't affect the icons directly */
}

.custom-next {
  right: -2%;
  color: #0b50a1 !important; /* This won't affect the icons directly */
}

/* Change the color of the prev and next icons */
.carousel-control-prev-icon, .carousel-control-next-icon {
  background-color: #0b50a1 !important; /* Change the icon color */
}

/* Optional: Change the color when hovering */
.custom-prev:hover .carousel-control-prev-icon,
.custom-next:hover .carousel-control-next-icon {
  background-color: #004080 !important; /* Darker shade when hovered */
}



</style>
<body>
     @include('dissertation_nab')

<section class="mt-2 thesis-banner" style="background-color:#EFFAFB;">
  <div class="container mt-5" style="height:350px;">
    <div id="promoCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <!-- First Slide -->
        <div class="carousel-item active">
          <div class="row ml-3">
            <div class="col-md-6 col-lg-6 col-sm-12">
              <h1>Publish Dissertation/Thesis on Your Way.</h1>
              <h6 class="publish-description">It’s fast and easy with C5K Academic Publishing.</h6>
              <div class="d-flex mt-5">
                <a href="#"><button type="button" class="btn btn-lg mr-4 btn-warning">Sign in</button></a>
                <a href="#"><button type="button" class="btn btn-lg btn-success">Join C5K</button></a>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 d-lg-block d-none">
              <img src="public/front/images/confirence/slide4.svg" class="img-fluid" alt="Slide Image">
            </div>
          </div>
        </div>
        <!-- Second Slide -->
        <div class="carousel-item">
          <div class="row align-items-center ml-5">
            <div class="col-md-6 col-lg-6 col-sm-12 text-md-left text-center">
              <h1 class="publish-description mb-4">Expand your reach and build your brand.</h1>
              <ul class="list-unstyled">
                <li class="mb-2 d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="gold" class="mr-2" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 8 8A8 8 0 0 0 8 0zM5.5 4.5a.5.5 0 0 1 .5.5v1h4V5a.5.5 0 0 1 1 0v1a2 2 0 0 1-2 2h-2v2h3a.5.5 0 0 1 0 1h-3v1a.5.5 0 0 1-1 0v-1H5.5a.5.5 0 0 1 0-1H7v-2H5a2 2 0 0 1-2-2V5a.5.5 0 0 1 1 0v1a1 1 0 0 0 1 1h2V5a.5.5 0 0 1 .5-.5z"/>
                  </svg>
                  Affordable fees for authors
                </li>
                <li class="mb-2 d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blue" class="mr-2" viewBox="0 0 16 16">
                    <path d="M8 0C3.589 0 0 3.589 0 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zM6.27 10.219L2.5 6.719V10h-1V5.719l3.77 3.5L10.5 5.27V10h1V4.5H9.5l-3.23 3.219z"/>
                  </svg>
                  Quality scientific publishing
                </li>
                <li class="mb-2 d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="mr-2" viewBox="0 0 16 16">
                    <path d="M5 10.732A2 2 0 1 0 6 12V4H4v8c-.29.417-.598.776-1 .732a2 2 0 1 0 2 2V2h2v12a2 2 0 1 0 2-2V8H6v2.732z"/>
                  </svg>
                  15% overall royalty payments
                </li>
                <li class="mb-2 d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="skyblue" class="mr-2" viewBox="0 0 16 16">
                    <path d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H7.707l.647.646a.5.5 0 0 1 0 .708L7 9.207l-.646-.647a.5.5 0 0 1 0-.708L7.707 7H2.5a.5.5 0 0 1-.5-.5v-3z"/>
                    <path d="M8.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM10.5 15a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM2.5 15a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                  </svg>
                  Distribution over 40 countries
                </li>
                <li class="d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="mr-2" viewBox="0 0 16 16">
                    <path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zm1 10H7V9h2v2zm-2-4V4h2v3H7z"/>
                  </svg>
                  Discount for early career researchers
                </li>
              </ul>
              <div class="d-flex justify-content-center justify-content-md-start mt-4">
                <a href="#"><button type="button" class="btn btn-lg btn-warning mr-3">Sign in</button></a>
                <a href="#"><button type="button" class="btn btn-lg btn-success">Join C5K</button></a>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 text-center d-none d-lg-block">
              <img src="public/front/images/confirence/slide5.svg" class="img-fluid" alt="Slide Image">
            </div>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="carousel-control-prev custom-prev" href="#promoCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next custom-next" href="#promoCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>




  
  
  

<section class="container py-4">
  <h3 class="text-center">Find Thesis by Category</h3>
  <p class="text-center">Explore books categorized for your interests.</p>

  <!-- Categories Section -->
  <div class="row my-2">
 
    @foreach ($categories as $category)
      @php
          // Assign colors dynamically
          $colors = ['bg-primary', 'bg-success', 'bg-warning', 'bg-danger', 'bg-info'];
          $color = $colors[$loop->index % count($colors)];
      @endphp
      <div class="col-lg-4 col-md-4 col-sm-6 my-2">
        <a href="{{ route('thesis.category', $category->id) }}" class="text-decoration-none">
          <div class="card h-100 {{ $color }} text-white">
            <div class="card-body d-flex align-items-center justify-content-center">
              <h5 class="card-title text-center fs-5 mb-0">{{ $category->name }}</h5>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</section>



<section class="desirtation-about py-5" style="background-image: url('public/backend/footer.jpg'); background-size: cover; background-position: center;">
    <div class="container text-center text-white">
      
        <h4 class="my-4">Discover Our World-wide Academic Collection</h4>
        <p class="mb-5">
            We take pride in presenting a wide range of academic works spanning numerous disciplines. 
            From business to information technology, sociology to economics, science to engineering, 
            our catalog reflects the richness and diversity of contemporary university/institute research.
                  Whether you’re a student, academic researcher, scientific community member, or knowledge enthusiast, 
            you’ll certainly find titles that pique your curiosity and deepen your understanding.
        </p>
       
    </div>

  <div class="py-3 slider">
    <div class="container" style="padding-right: 0px; padding-left: 0px;">
        <div id="bookpaper" class="carousel slide" data-ride="carousel" data-interval="2000">
            <!-- Carousel Items -->
            <div class="carousel-inner">
                @foreach ($books->chunk(3) as $chunk)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="row">
                            @foreach ($chunk as $book)
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                    <div class="card">
                                        <img src="{{ asset('public/backend/thesis/' . $book->book_img) }}" class="card-img-top" alt="Book Image">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators mt-4">
                @foreach ($books->chunk(3) as $index => $chunk)
                    <li data-target="#bookpaper" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
        </div>
    </div>
</div>

</section>

<div class="d-flex justify-content-center align-items-center py-4 ">
<a href="{{route('thesis.index')}}" class="bg-primary text-white py-2 px-4 shadow"  style="text-decoration:none">
    All Thesis
    
</a>       

</div>


 <section class="services-section container py-5">
    <div class="services-header text-center mb-4">
      <h2 class="fw-bold">Our Services</h2>
    </div>
    <div class="row gap-4 d-flex justify-content-center">
      <!-- Service Card 1 -->
      <div class="col-lg-3 col-md-6">
        <div class="service-card">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007bff" width="48" height="48">
              <path d="M3 4v17a2 2 0 002 2h14a2 2 0 002-2V4H3zm2 2h12v15H5V6zm14 0v15h2V6h-2zm-6 1H7v2h6V7zm0 3H7v2h6v-2zm0 3H7v2h6v-2z"></path>
            </svg>
          </div>
          <h3>Over the World Thesis Publishing Service</h3>
          <p>With easy steps and expert advice, publish your work online. Benefit from high-quality editing and personalized assistance tailored to your specific needs and requirements. Achieve your creative goals with confidence.</p>
        </div>
      </div>

      <!-- Service Card 2 -->
      <div class="col-lg-3 col-md-6">
        <div class="service-card">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007bff" width="48" height="48">
              <path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm0 18a8 8 0 118-8 8 8 0 01-8 8zm-.5-14h1v7l5.3 3.2-.5.9L11.5 14z"></path>
            </svg>
          </div>
          <h3>Worldwide Marketing Policy</h3>
          <p>Our publishing service ensures your thesis gets international recognition. Reach a wider audience and maximize its impact with our comprehensive worldwide marketing strategy.</p>
        </div>
      </div>

      <!-- Service Card 3 -->
      <div class="col-lg-3 col-md-6">
        <div class="service-card">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007bff" width="48" height="48">
              <path d="M4 3h16a2 2 0 012 2v14a2 2 0 01-2 2H4a2 2 0 01-2-2V5a2 2 0 012-2zm10 2v2H6V5h8zm4 14V9H6v10h12z"></path>
            </svg>
          </div>
          <h3>Publish Your Thesis with Expert Assistance</h3>
          <p>Our committed group of experts provides comprehensive support throughout the entire thesis publishing process. Trust us to help you achieve your academic goals with confidence.</p>
        </div>
      </div>

      <!-- Service Card 4 -->
      <div class="col-lg-3 col-md-6">
        <div class="service-card">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007bff" width="48" height="48">
              <path d="M21 3H3a1 1 0 00-1 1v16a1 1 0 001 1h18a1 1 0 001-1V4a1 1 0 00-1-1zM3 5h18v2H3zm0 4h18v10H3zm9 3H5v-2h7z"></path>
            </svg>
          </div>
          <h3>Print-on-Demand Service</h3>
          <p>We publish your thesis using state-of-the-art print-on-demand technology, minimizing waste and reducing our carbon footprint. Our service is cost-effective and eco-friendly.</p>
        </div>
      </div>
    </div>
  </section>
 <section class="container step-section py-5">
    <div>
      <div class="text-center my-4 pb-4">
        <h2>Our Thesis Publishing Procedure is Easy and Quicker</h2>
        <h4>There are 4 simple steps to follow</h4>
      </div>
      <div class="step-cards row">
        <!-- Step 1 -->
        <div class="step-card col-lg-3 col-md-6 col-sm-12">
          <span>1</span>
          <h3>Submit your Thesis</h3>
          <p>Whether you have a complete manuscript or just a draft, we are eager to provide constructive feedback within a few days—no obligations, no hassle.</p>
        </div>

        <!-- Step 2 -->
        <div class="step-card col-lg-3 col-md-6 col-sm-12">
          <span>2</span>
          <h3>In Review and Revision</h3>
          <p>Every great work begins with refinement. In this phase of review and revision, we elevate your ideas, ensuring they shine with clarity and precision.</p>
        </div>

        <!-- Step 3 -->
        <div class="step-card col-lg-3 col-md-6 col-sm-12">
          <span>3</span>
          <h3>Proof of Thesis</h3>
          <p>Your thesis is evidence of your diligence and commitment. Let us help you perfect it, ensuring that every argument is compelling and every detail is polished to perfection.</p>
        </div>

        <!-- Step 4 -->
        <div class="step-card col-lg-3 col-md-6 col-sm-12">
          <span>4</span>
          <h3>Publish your Thesis</h3>
          <p>Transform your research into a published masterpiece! With us, your thesis will reach readers around the globe and have a global influence.</p>
        </div>
      </div>
    </div>
    <div class="button-container py-4">
      <button>Start Submission</button>
    </div>
  </section>
  
  
    <section class="pb-5 mt-5 academic">
    <div class="container">
        <div class="text-center py-3 academic-title">
              <h3 class="mb-3">Publish Your Dissertation/Thesis</h3>
        <p class="lead">It’s easy with C5K Academic Publishing</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="card text-center" style="border:none; background-color:#F7F8F9;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="mb-3" viewBox="0 0 16 16">
                            <path d="M4 1.5A1.5 1.5 0 0 0 2.5 3v10A1.5 1.5 0 0 0 4 14.5h9A1.5 1.5 0 0 0 14.5 13v-2h-1v2a.5.5 0 0 1-.5.5H4a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v2h1V3A1.5 1.5 0 0 0 13 1.5H4z"/>
                            <path d="M6 4.5A.5.5 0 0 1 6.5 4h4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-7z"/>
                        </svg>
                        <h4>Publish Your Thesis</h4>
                        <p class="mt-3">Congratulations! Let’s start with what it costs, what you need, and what we offer.</p>
                        <button type="button" class="btn btn-info btn-rounded">Get Started</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="card text-center" style="border:none; background-color:#F7F8F9;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="mb-3" viewBox="0 0 16 16">
                            <path d="M9 0a2 2 0 0 1 2 2v6.293l1.854-1.854a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 8.293V2a2 2 0 0 1 2-2z"/>
                            <path d="M9 15a2 2 0 0 1-2-2V6.707l-1.854 1.853a.5.5 0 1 1-.708-.707l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.707L9 6.707V13a2 2 0 0 1-2 2z"/>
                        </svg>
                        <h4>About Self-Publishing</h4>
                        <p class="mt-3">Hardcover, paperback, ebooks, and global book distribution are our specialties!</p>
                        <button type="button" class="btn btn-info btn-rounded">Get Started</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="card text-center" style="border:none; background-color:#F7F8F9;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="mb-3" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3.5l-2 2-.5-2H4a2 2 0 0 1-2-2V2z"/>
                            <path d="M5 5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5.5A.5.5 0 0 1 5 5z"/>
                        </svg>
                        <h4>Share and Sell Your Thesis</h4>
                        <p class="mt-3">Check out free resources to help you self-publish successfully.</p>
                        <button type="button" class="btn btn-info btn-rounded">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container my-5 statistics-container">
  <h3 class="text-center">Our Thesis Publishing Statistics</h3>
  <div class="statistics-section">
    <div class="stat-card">
      <div class="stat-number">1000+</div>
      <div class="stat-title">Authors</div>
    </div>
    <div class="stat-card">
      <div class="stat-number">30,000+</div>
      <div class="stat-title">Social Media Coverage</div>
    </div>
    <div class="stat-card">
      <div class="stat-number">1500+</div>
      <div class="stat-title">Titles in our Records</div>
    </div>
  </div>
</section>

<section class="container my-5 publication-section d-flex">
  <!-- Image Section -->
  <div class="publication-image" style="overflow:hidden; margin-right: 20px;margin-top:10px;">
    <img src="{{ asset('public/backend/journal/thesisImage.png') }}" alt="Dissertation 6" style="display: block; max-width: 100%; height: auto;">
  </div>
  
  <!-- Text Content Section -->
  <div class="publication-content" style="margin-top: 0; padding-top: 0;">
    <h2 style="font-weight: 600; margin-top: 0;">Showcase Your Work with C5KTP</h2>
    <p class="text-justify" style="margin-top: 0;">
      To provide authors and research scholars with a worldwide and extensive platform to showcase their unique work, C5KTP offers book or dissertation publication services. Publishing your book or dissertation as a book monograph can help you advance your understanding of the topic, influence your discipline, and start your academic career.
    </p>
    <p class="text-justify">
      Each author whose book is published will have a permanent page on our website with their name, biographical information, and the ISBN and DOI number provided. Additionally, authors can make adjustments to their webpages post-publication.
    </p>
    <ul style="margin-top: 0;">
      <li>Global distribution and exhibition</li>
      <li>Increased visibility and citability</li>
      <li>Accessible print and e-books</li>
      <li>Open access for free downloads</li>
    </ul>
  </div>
</section>

<!--<section class="container py-5">-->
<!--    <h2 class="text-center py-4">Your Dissertation/Thesis Publish on Your Way!</h2>-->
<!--    <p></p>-->
<!--</section>-->




@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>