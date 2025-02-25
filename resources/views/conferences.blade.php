<title>C5k | Conference</title>
@include('layout.header')
<style>
.conference-first-heading {
  background-image: url('{{ asset("public/front/images/conference.png") }}');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding: 80px 20px;
  text-align: center;
  position: relative;
  border-radius: 10px;
  color: #ffffff;
}

.conference-first-heading::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6); /* Dark overlay for text readability */
  border-radius: 10px;
}

.conference-first-heading h1 {
  font-size: 3em;
  font-weight: 700;
  margin-bottom: 20px;
  color: #fff;
  position: relative;
  z-index: 1;
  background: rgba(255, 255, 255, 0.3); /* White transparent background */
  display: inline-block; /* Allows the background to wrap only around the text */
  padding: 10px 20px;
  border-radius: 5px;
}

.conference-first-heading p {
  font-size: 1.2em;
  line-height: 1.8;
  margin: 0 auto;
  max-width: 800px;
  color: #e0e0e0;
  position: relative;
  z-index: 1;
  background: rgba(255, 255, 255, 0.3); /* White transparent background */
  display: inline-block; /* Allows the background to wrap only around the text */
  padding: 10px 20px;
  border-radius: 5px;
}
.why-attend {
  padding: 60px 20px;
  background: #f9f9f9;
  text-align: center;
}

.why-attend h1 {
  font-size: 2.5em;
  font-weight: bold;
  margin-bottom: 30px;
  color: #333;
}

.why-attend-content {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  margin-top: 20px;
}

.attend-item.card {
  background: #ffffff;
  border: 1px solid #e0e0e0;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.card-body {
  padding: 20px;
}

.card-title {
  font-size: 1.5em;
  font-weight: bold;
  color: #007bff;
  margin-bottom: 10px;
}

.card-title i {
  margin-right: 10px;
  color: #007bff;
}

.card-text {
  font-size: 1em;
  color: #555;
  line-height: 1.6;
}
.call-for-papers {
  background-color: #fafafa;
  padding: 50px 20px;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}

.call-for-papers-header {
  text-align: center;
  margin-bottom: 40px;
}

.call-for-papers-header h2 {
  font-size: 2.5em;
  font-weight: 700;
  color: #333;
  margin-bottom: 20px;
}

.call-for-papers-header p {
  font-size: 1.1em;
  line-height: 1.8;
  color: #555;
}

.call-for-papers-content {
  display: grid;
  grid-template-columns: 1fr;
  gap: 20px;
}

.call-for-papers-content .guidelines, 
.call-for-papers-content .sponsorship {
  background-color: #ffffff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

.call-for-papers-content h4 {
  font-size: 1.5em;
  color: #007bff;
  font-weight: 600;
  display: flex;
  align-items: center;
  margin-bottom: 15px;
}

.call-for-papers-content h4 i {
  margin-right: 10px;
}

.call-for-papers-content p {
  font-size: 1em;
  line-height: 1.6;
  color: #666;
}

.call-for-papers-content a {
  color: #007bff;
  text-decoration: none;
}

.call-for-papers-content a:hover {
  text-decoration: underline;
}
.sponsor-conference {
  background-color: #f8f9fa;
  padding: 50px 20px;
  border-radius: 10px;
  max-width: 1200px;
  margin: 40px auto;
}

.sponsor-conference h2 {
  font-size: 2.5em;
  font-weight: 700;
  color: #333;
  margin-bottom: 30px;
}

.sponsor-card {
  display: flex;
  gap: 20px;
  justify-content: space-between;
  align-items: stretch;
}

.sponsor-item {
  background-color: #ffffff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  flex: 1;
  text-align: center;
}

.sponsor-item h5 span {
  font-size: 1.5em;
  color: #007bff;
  font-weight: 500;
  display: block;
  align-items: center;
  justify-content: center;
  margin-bottom: 10px;
}

.sponsor-item h5 i {
  margin-right: 8px;
  color: #007bff;
}

.sponsor-item p {
  font-size: 1em;
  line-height: 1.6;
  color: #555;
}

.contact-info {
  margin-top: 20px;
  font-size: 1em;
}

.contact-info a {
  color: #007bff;
  text-decoration: none;
}

.contact-info a:hover {
  text-decoration: underline;
}
.join-community {
  background-color: #f8f9fa; /* Light background color */
  padding: 60px 20px; /* Padding for spacing */
  text-align: center;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.join-community h2 {
  font-size: 2.5em;
  color: #333;
  font-weight: 700;
  margin-bottom: 20px;
}

.join-community p {
  font-size: 1.1em;
  color: #555;
  line-height: 1.7;
  max-width: 800px;
  margin: 0 auto 30px;
}

.join-community .join-btn {
  display: inline-block;
  background-color: #007bff;
  color: white;
  font-size: 1.2em;
  padding: 15px 30px;
  border-radius: 5px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.join-community .join-btn:hover {
  background-color: #0056b3;
}
.register-community {
  background: linear-gradient(135deg, #00c6ff, #0072ff); /* Gradient background */
  color: #fff; /* White text for contrast */
  padding: 60px 30px;
  text-align: center;
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
  margin: 0 auto; /* Center the section */
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.register-community:hover {
  transform: translateY(-10px); /* Slight upward movement on hover */
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
}

.register-community h2 {
  font-size: 2.8em;
  font-weight: bold;
  margin-bottom: 20px;
  text-transform: uppercase;
}

.register-community p {
  font-size: 1.2em;
  margin-bottom: 30px;
  line-height: 1.6;
}

.register-btn {
  display: inline-block;
  background-color: #fff;
  color: #0072ff; /* Blue text for contrast */
  font-size: 1.3em;
  padding: 15px 40px;
  border-radius: 25px; /* Rounded button */
  text-decoration: none;
  transition: all 0.3s ease;
  font-weight: bold;
}

.register-btn:hover {
  background-color: #0072ff;
  color: #fff; /* Button text turns white on hover */
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Slight shadow effect */
}
.upcoming-conference {
    background: #f9f9f9; /* Light background */
    padding: 20px 20px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Soft shadow */
    margin-top:10px;
}

.upcoming-conference h3 {
    font-size: 2.5em;
    font-weight: 700;
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.conference-details p {
    font-size: 1.1em;
    line-height: 1.6;
    margin-bottom: 15px;
    color: #555;
}

.conference-tracks {
    background: #f1f1f1;
    padding: 20px;
    border-radius: 8px;
}

.conference-tracks p {
    font-size: 1.1em;
    margin-bottom: 10px;
    color: #333;
}

.conference-tracks p b {
    color: #0072ff;
}

.conference-details p b {
    color: #0072ff;
}

.upcoming-conference .conference-details {
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); /* Card-like effect */
}

.upcoming-conference .conference-details p:hover {
    background-color: #f4f4f4; /* Light grey background on hover */
    transition: 0.3s;
}


@media (max-width: 768px) {
  .conference-first-heading h1 {
    font-size: 2.5em;
  }

  .conference-first-heading p {
    font-size: 1em;
  }
  .why-attend h1 {
    font-size: 2em;
  }

  .attend-item h3 {
    font-size: 1.3em;
  }

  .attend-item p {
    font-size: 1em;
  }
  .call-for-papers-content {
    grid-template-columns: 1fr;
  }
  
  .call-for-papers-header h2 {
    font-size: 2em;
  }
  .sponsor-card {
    flex-direction: column;
  }
}

@media (max-width: 480px) {
  .conference-first-heading h1 {
    font-size: 2em;
  }

  .conference-first-heading p {
    font-size: 0.9em;
  }
}

</style>
<body>
<div class="container conference-container mt-2">
    <div class="conference-first-heading">
    <h1 class="mt-5 text-center">C5k Conferences</h1>
    <p class="text-white">Welcome to the C5k Conference Hub! Our conferences bring together thought leaders, researchers, industry experts, 
        and academics across various disciplines to foster the exchange of innovative ideas and cutting-edge research. At C5k, 
        we are dedicated to creating impactful events that help participants gain fresh insights, build professional networks, 
        and drive advancements in their fields.</p>
    </div>
    <div class="why-attend">
  <h1 class="mt-3 text-center">Why Attend a C5k Conference?</h1>
  <div class="why-attend-content">
    <div class="attend-item card">
      <div class="card-body">
        <h3 class="card-title"><i class="fa fa-2x fa-globe"></i><br> Global Networking</h3>
        <p class="card-text">
          C5k conferences attract a diverse community of professionals from around the world. 
          Attendees have the opportunity to network with experts, collaborators, and mentors, enriching their professional connections.
        </p>
      </div>
    </div>
    <div class="attend-item card">
      <div class="card-body">
        <h3 class="card-title"><i class="fa fa-2x fa-book"></i> <br>Access to Latest Research</h3>
        <p class="card-text">
          Discover pioneering research that addresses current and future challenges across fields like law, business, science, technology, and policy. 
          Our events are curated to present the most relevant and groundbreaking studies.
        </p>
      </div>
    </div>
    <div class="attend-item card">
      <div class="card-body">
        <h3 class="card-title"><i class="fa fa-2x fa-users"></i><br> Expert Panels and Hands-On Workshops</h3>
        <p class="card-text">
          Gain knowledge from expert panel discussions and practical workshops that provide actionable insights and new skills. 
          These sessions cover advanced research methods to industry-specific trends and case studies.
        </p>
      </div>
    </div>
    <div class="attend-item card">
      <div class="card-body">
        <h3 class="card-title"><i class="fa fa-2x fa-file-text"></i><br> High-Impact Publication Opportunities</h3>
        <p class="card-text">
          Selected conference papers are eligible for publication in C5k’s internationally recognized journals, 
          amplifying the reach of your research and contributing to the global academic community.
        </p>
      </div>
    </div>
  </div>
</div>


<div class="upcoming-conference">
    <h3>Upcoming Conferences</h3>
    <div class="conference-details">
    <div class="conference-info">
    <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-4"><p><b>Conference Name:</b></p></div>
        <div class="col-md-10 col-lg-10 col-sm-8"> <p>[Conference Name]</p></div> 
    </div>
    <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-4"><p><b>Date:</b></p></div>
        <div class="col-md-10 col-lg-10 col-sm-8"> <p>[Insert Date]</p></div>
    </div>
    <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-4"><p><b>Location:</b></p></div>
        <div class="col-md-10 col-lg-10 col-sm-8"> <p>[Insert Location or Virtual Link]</p></div>
    </div>
    <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-4"><p><b>Theme:</b></p></div>
        <div class="col-md-10 col-lg-10 col-sm-8">  <p>[Highlight the main theme or focus of the conference]</p></div>
    </div>
    <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-4"><p><b>Keynote Speakers:</b></p></div>
        <div class="col-md-10 col-lg-10 col-sm-8">  <p>Learn from top experts such as [list of keynote speakers]</p></div>
    </div>
    <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-4"><p><b>Sessions Include:</b></p></div>
        <div class="col-md-10 col-lg-10 col-sm-8">  <p>[Brief description of conference sessions, workshops, and panel discussions]</p></div>
    </div>
</div>


        <div class="conference-tracks mt-4">
            <p>Stay tuned for more information on our upcoming events, including dates, venues, registration details, and complete agendas.</p>
            <p><b>Conference Tracks:</b></p>
            <p><b>International Law and Policy:</b> Focusing on regulatory changes, policy development, and legal innovations.</p>
            <p><b>Organizational Management:</b> Exploring trends in business operations, leadership, and strategic management.</p>
            <p><b>Technology and Innovation:</b> Discussing advancements in digital transformation, AI, and data analytics.</p>
            <p><b>Environmental and Social Sustainability:</b> Addressing the intersection of business, sustainability, and social impact.</p>
        </div>
    </div>
</div>



<div class="call-for-papers">
  <div class="call-for-papers-header">
    <h2>Call for Papers</h2>
    <p>At C5k, we welcome researchers, practitioners, and scholars to share their findings with an international audience. Our Call for Papers invites submissions across our conference tracks. Accepted submissions will be featured in conference sessions, and selected papers may qualify for publication in our journals.</p>
  </div>

  <div class="call-for-papers-content">
    <div class="guidelines">
      <h4><i class="fa fa-file-text"></i> Submission Guidelines</h4>
      <p>To ensure a smooth review process, please refer to our Submission Guidelines for detailed instructions on abstract submissions, full papers, deadlines, and formatting. For any questions about the submission process, please reach out to us at <a href="mailto:support@c5k.com">support@c5k.com</a>.</p>
    </div>

    <div class="sponsorship">
      <h4><i class="fa fa-handshake-o"></i> Sponsorship and Partnership Opportunities</h4>
      <p>C5k Conferences offer a valuable opportunity for organizations to engage directly with top professionals and academics in their respective fields. Our sponsorship packages are designed to give partners high visibility and align their brand with thought leadership and innovation.</p>
    </div>
  </div>
</div>


<div class="sponsor-conference mt-1">
  <h2 class="text-center">Why Sponsor C5k Conferences?</h2>
  <div class="sponsor-card">
    <div class="sponsor-item">
      <h5><i class="fa fa-2x fa-bullhorn"></i> <br><span>Brand Visibility</span></h5>
      <p>Reach a global audience and showcase your brand’s commitment to industry advancements.</p>
    </div>
    <div class="sponsor-item">
      <h5><i class="fa fa-2x fa-handshake-o"></i><br> <span>Customizable Packages</span></h5>
      <p>We offer flexible sponsorship options tailored to fit your organization’s goals and budget.</p>
    </div>
    <div class="sponsor-item">
      <h5><i class="fa fa-2x fa-desktop"></i><br> <span>On-Site and Digital Engagement</span></h5>
      <p>Benefit from both on-site branding and digital exposure through our event platforms, conference materials, and post-event publications.</p>
    </div>
  </div>
  <p class="contact-info text-center">
    For sponsorship and partnership inquiries, please contact us at 
    <a href="mailto:contact@c5k.com">contact@c5k.com</a>.
  </p>
</div>


<div class="join-community">
  <h2 class="">Join the C5k Community</h2>
  <p>
    Attending or presenting at a C5k Conference is more than just an event; it's an opportunity to become part of a community dedicated to driving positive change through research and collaboration. Whether you’re an established professional, an academic, or a student, C5k Conferences provide a platform to amplify your voice, learn from peers, and take your career to the next level.
  </p>
  <a href="{{route('login')}}" class="join-btn">Join Now</a>
</div>

<div class="register-community mt-1">
  <h2 class="mt-2">Register Today</h2>
  <p>
    Visit our Registration Page to secure your spot at the next C5k Conference. We look forward to welcoming you to an inspiring event that celebrates knowledge, progress, and community.
  </p>
  <a href="{{route('register')}}" class="register-btn">Register Now</a>
</div>













</div>

@include('layout.footer_nav')
@include('layout.footer')

@include('layout.js')

</body>

</html>