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
.package-card {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 100%;
    }
    .package-card:hover {
      transform: translateY(-5px);
    }
    .package-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 15px;
    }
    .package-price {
      font-size: 28px;
      color: #007bff;
      margin-bottom: 20px;
    }
    .features {
      list-style: none;
      padding: 0;
      margin-bottom: 20px;
    }
    .features li {
      margin-bottom: 10px;
    }
    .purchase-btn {
      width: 100%;
    }
    .row > .col-4 {
      margin-bottom: 20px;
    }
</style>
<body>
@include('pages.page_header_nav')
<section class="py-2">
  <div class="container">
    <h1>Enhance Your Article's English with a 25% Discount!</h1>
    <h6>This November, take advantage of a 15% discount on our Standard Language Editing Service. 
      Articles that undergo professional language editing are more likely to be accepted by peer-reviewed journals.</h6>
      <h6>Use code <span class="text-warning">C5K25</span> to get 25% off Language Editing Standard.</h6>
  </div>
</section>
<section style="background-image: url('/public/front/images/language.jpg'); background-size: cover; background-position: center; min-height: 200px;">
</section>

<div class="container" style="margin-top:-100px;">
  <div class="card">
    <div class="card-body">
      <h2>C5K Language Services: Improve your article’s English
      to improve your chances of being published</h2>
      <h6>This month, get a 25% discount on our standard service. Use code  <span class="text-warning">C5K25</span> for 25% off.</h6>
<p>Getting your manuscript accepted in any journal is challenging. The quality of your writing is important to accurately convey your research. 
  Our Editors have extensive background and expertise in research and editing and will help you increase your chances of being published.</p>
  <div class="container mt-5">
    <div class="row">
      <div class="col-4">
        <div class="package-card">
          <div class="package-title">Basic Plan</div>
          <div class="package-price">$19.99/month</div>
          <ul class="features">
            <li>Feature 1</li>
            <li>Feature 2</li>
            <li>Feature 3</li>
          </ul>
          <button class="btn btn-primary purchase-btn">Purchase</button>
        </div>
      </div>
      
      <div class="col-4">
        <div class="package-card">
          <div class="package-title">Standard Plan</div>
          <div class="package-price">$49.99/month</div>
          <ul class="features">
            <li>Feature 1</li>
            <li>Feature 2</li>
            <li>Feature 3</li>
            <li>Feature 4</li>
          </ul>
          <button class="btn btn-primary purchase-btn">Purchase</button>
        </div>
      </div>

      <div class="col-4">
        <div class="package-card">
          <div class="package-title">Premium Plan</div>
          <div class="package-price">$99.99/month</div>
          <ul class="features">
            <li>Feature 1</li>
            <li>Feature 2</li>
            <li>Feature 3</li>
            <li>Feature 4</li>
            <li>Feature 5</li>
          </ul>
          <button class="btn btn-primary purchase-btn">Purchase</button>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>    
</div>


@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>