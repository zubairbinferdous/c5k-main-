
<title>C5k | About</title>
@include('layout.header')
<style>
.about-header{
    display: flex; /* Enables Flexbox */
    flex-direction: column; /* Align items vertically */
    align-items: center; /* Center items horizontally */
    justify-content: center; /* Center items vertically */
    text-align: center; /* Center the text within the elements */
    height: 300px; /* Optional: Full viewport height for the section */
    font-family: 'Roboto', sans-serif;
}
.mission-section {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 40px;
  background-color: #f4f4f4;
}

.mission-content {
  width: 50%;
  padding-right: 20px;
}

.mission-content h2 {
  font-size: 2.5em;
  margin-bottom: 20px;
  color: #333;
}

.mission-content p {
  font-size: 1.2em;
  line-height: 1.6;
  color: #555;
}

.mission-image {
  width: 50%;
  text-align: center;
}

.mission-image img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.focus-areas {
  text-align: center;
  padding: 50px;
  background-color: #f9f9f9;
}

.focus-areas h2 {
  font-size: 2.5em;
  margin-bottom: 20px;
  color: #333;
}

.focus-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
  margin-top: 20px;
}

.focus-card {
  background-color: #ffffff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s, box-shadow 0.3s;
}

.focus-card h3 {
  font-size: 1.4em;
  color: #555;
}

.focus-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
}
.reviewer-expertise {
  text-align: center;
  padding: 40px;
  background-color: #eef2f5;
}

.reviewer-expertise h2 {
  font-size: 2.5em;
  margin-bottom: 10px;
  color: #333;
}

.reviewer-expertise p {
  font-size: 1.2em;
  margin-bottom: 30px;
  color: #666;
}

.reviewer-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

.reviewer-card {
  background-color: #ffffff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: transform 0.3s, box-shadow 0.3s;
}

.reviewer-card img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-bottom: 15px;
}

.reviewer-card h3 {
  font-size: 1.5em;
  color: #333;
}

.reviewer-card p {
  font-size: 1em;
  color: #555;
}

.reviewer-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
}
.high-impact-journals {
  text-align: center;
  padding: 40px;
  background-color: #f4f4f4;
}

.high-impact-journals h2 {
  font-size: 2.5em;
  margin-bottom: 10px;
  color: #333;
}

.high-impact-journals p {
  font-size: 1.2em;
  margin-bottom: 30px;
  color: #666;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}

.journal-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
}

.journal-card {
  background-color: #ffffff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: left;
  transition: transform 0.3s, box-shadow 0.3s;
}

.journal-card img {
  width: 100%;
  height: 150px;
  object-fit: cover;
  border-radius: 8px 8px 0 0;
}

.journal-card h3 {
  font-size: 1.5em;
  margin-top: 10px;
  color: #333;
}

.journal-card p {
  font-size: 1em;
  color: #555;
  margin-top: 5px;
}

.journal-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
}



.about-content .section-title {
        font-size: 2rem;
        color: #007bff; /* Highlight section titles */
        margin-top: 30px;
        margin-bottom: 15px;
        border-bottom: 2px solid #007bff; /* Underline for emphasis */
        display: inline-block;
    }

    .about-content p {
        line-height: 1.8;
        font-size: 1.1rem;
        margin-bottom: 20px;
        text-align: justify; /* Justified text for clean alignment */
    }

    .about-content ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .about-content ul li {
        font-size: 1.1rem;
        padding: 8px 20px;
        position: relative;
    }

    .about-content ul li::before {
        content: '•'; /* Bullet point */
        color: #007bff;
        font-size: 1.5rem;
        position: absolute;
        left: -1px;
        top: 0;
    }

    section {
        margin-bottom: 30px;
    }

    /* Button styling for call-to-action (if any) */
    .btn-primary {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        text-transform: uppercase;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
    @media (max-width: 768px) {
  .mission-content, .mission-image {
    width: 100%;
    padding-right: 0;
    text-align: center;
  }

  .mission-content h2 {
    font-size: 2em;
  }

  .mission-content p {
    font-size: 1em;
  }

  .mission-image img {
    max-width: 80%;
  }
}

/* Media Query for Mobile Phones */
@media (max-width: 480px) {
  .mission-content h2 {
    font-size: 1.8em;
  }

  .mission-content p {
    font-size: 0.9em;
  }

  .mission-image img {
    max-width: 100%;
  }
}

    @media (max-width: 768px) {
        .about-header h1 {
            font-size: 2rem;
        }

        .about-content .section-title {
            font-size: 1.5rem;
        }

        .about-content p {
            font-size: 1rem;
        }
    }
</style>
<body>
<div class="container" style=" padding-right: 0px; padding-left: 5px;">
    <div class="about-header mt-3" style="background-image: url('{{ asset('public/front/images/people-discuss-research.jpg') }}'); background-size: cover; background-position: center; max-height: 300px;">
        <h1 style="background-color: #E2EBF7; padding:15px; border-radius:30px;">About C5K</h1>
        <p style="background-color: #E2EBF7; padding:15px; border-radius:30px;">Leading the Future of Scholarly Research in Information Technology and Business Management</p>
    </div>

    <div class="about-content mt-2">
    <section class="mission-section">
  <div class="mission-content">
    <h2>Our Mission</h2>
    <p>
      At C5K, we are dedicated to publishing groundbreaking research and promoting 
      innovative ideas in the fields of information technology, business management, 
      and related disciplines. Our goal is to minimize the delay in sharing new ideas 
      and discoveries with the world, making high-quality, peer-reviewed journals 
      available primarily online.
    </p>
  </div>
  <div class="mission-image">
    <img src="{{ asset('public/backend/about-banner.jpg') }}" alt="Mission Image">
  </div>
</section>

<section class="focus-areas py-5" style="background:RGB(4, 80, 158);">
  <div class="container">
    <h2 class="text-center mb-5" style="font-weight: bold; color: #fff;">Focus Areas</h2>
    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="focus-card text-center p-4 rounded shadow-lg mx-2 h-100 d-flex flex-column justify-content-center" 
             style="background: linear-gradient(to right, #ff9a9e, #fad0c4);">
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #333;">Information Technology and Management</h3>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="focus-card text-center p-4 rounded shadow-lg mx-2 h-100 d-flex flex-column justify-content-center" 
             style="background: linear-gradient(to right, #a1c4fd, #c2e9fb);">
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #333;">Computing, Machine Learning, and Artificial Intelligence</h3>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="focus-card text-center p-4 rounded shadow-lg mx-2 h-100 d-flex flex-column justify-content-center" 
             style="background: linear-gradient(to right, #fbc2eb, #a6c1ee);">
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #333;">Business Management and Social Development</h3>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="focus-card text-center p-4 rounded shadow-lg mx-2 h-100 d-flex flex-column justify-content-center" 
             style="background: linear-gradient(to right, #84fab0, #8fd3f4);">
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #333;">Entrepreneurship and Marketing</h3>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="focus-card text-center p-4 rounded shadow-lg mx-2 h-100 d-flex flex-column justify-content-center" 
             style="background: linear-gradient(to right, #fccb90, #d57eeb);">
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #333;">Internet Security and Protocols</h3>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="focus-card text-center p-4 rounded shadow-lg mx-2 h-100 d-flex flex-column justify-content-center" 
             style="background: linear-gradient(to right, #ffecd2, #fcb69f);">
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #333;">Banking, Finance, and Leadership</h3>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="focus-card text-center p-4 rounded shadow-lg mx-2 h-100 d-flex flex-column justify-content-center" 
             style="background: linear-gradient(to right, #ff9a9e, #fad0c4);">
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #333;">Health Informatics and International Law</h3>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="focus-card text-center p-4 rounded shadow-lg mx-2 h-100 d-flex flex-column justify-content-center" 
             style="background: linear-gradient(to right, #a1c4fd, #c2e9fb);">
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #333;">Organizational Management</h3>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="focus-card text-center p-4 rounded shadow-lg mx-2 h-100 d-flex flex-column justify-content-center" 
             style="background: linear-gradient(to right, #fbc2eb, #a6c1ee);">
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #333;">Food and Sustainable Agriculture</h3>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="reviewer-expertise py-5" style="background: linear-gradient(to bottom, #f8fafc, #e3e9f2);">
  <div class="container">
    <h2 class="text-center mb-4" style="font-weight: bold; color: #333;">Reviewer Expertise</h2>
    <p class="text-center mb-5" style="font-size: 1.1rem; color: #555;">
      Our journals are supported by a team of highly skilled reviewers, each an expert in their field. This ensures that every publication in our journals meets the highest standards of quality and relevance.
    </p>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="reviewer-card text-center p-4 shadow-lg rounded h-100 d-flex flex-column align-items-center" 
             style="background: #d8ecf3; border: 1px solid #b6d8e8;">
          <img src="{{ asset('public/front/images/s3.png') }}" alt="Reviewer 1" class="mb-3 rounded-circle" 
               style="width: 100px; height: 100px; object-fit: cover;">
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #003366;">Dr. John Doe</h3>
          <p style="font-size: 1rem; color: #555;">Information Technology and Management</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="reviewer-card text-center p-4 shadow-lg rounded h-100 d-flex flex-column align-items-center" 
             style="background: #d8ecf3; border: 1px solid #b6d8e8;">
          <img src="{{ asset('public/front/images/s3.png') }}" alt="Reviewer 2" class="mb-3 rounded-circle" 
               style="width: 100px; height: 100px; object-fit: cover;">
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #003366;">Dr. Jane Smith</h3>
          <p style="font-size: 1rem; color: #555;">Machine Learning and AI</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="reviewer-card text-center p-4 shadow-lg rounded h-100 d-flex flex-column align-items-center" 
             style="background: #d8ecf3; border: 1px solid #b6d8e8;">
          <img src="{{ asset('public/front/images/s3.png') }}" alt="Reviewer 3" class="mb-3 rounded-circle" 
               style="width: 100px; height: 100px; object-fit: cover;">
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #003366;">Prof. Alan Brown</h3>
          <p style="font-size: 1rem; color: #555;">Business Management</p>
        </div>
      </div>
      <!-- Add more reviewer cards as needed -->
    </div>
  </div>
</section>


<section class="high-impact-journals">
  <h2>High-Impact Journals</h2>
  <p>
    C5K’s journals make up a comprehensive archive of research and practical innovations in information technology management, engineering, business, banking, social sciences, and agricultural research. These journals bridge the gap between theoretical and real-world applications, supporting both emerging and established fields.
  </p>
  
  <div class="journal-grid">
    <div class="journal-card">
      <img src="{{ asset('public/front/images/papers/Journal-1.png') }}" alt="Journal 1">
      <h3>Journal of Information Technology</h3>
      <p>A leading journal covering IT management and systems development.</p>
    </div>
    <div class="journal-card">
      <img src="{{ asset('public/front/images/papers/Journal-2.png') }}" alt="Journal 2">
      <h3>Journal of Machine Learning & AI</h3>
      <p>Focuses on advancements in machine learning and artificial intelligence.</p>
    </div>
    <div class="journal-card">
      <img src="{{ asset('public/front/images/papers/Journal-3.png') }}" alt="Journal 3">
      <h3>Business and Social Development Journal</h3>
      <p>Explores the intersection of business management and social impact.</p>
    </div>
    <!-- Add more journal cards as needed -->
  </div>
</section>

    </div>
</div>

@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>