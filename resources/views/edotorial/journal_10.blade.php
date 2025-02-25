<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Journal of Information Technology Management and Business Horizons </title>
@include('layout.css')
<style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        .editorial-section {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        .editor-in-chief {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .editorial-board {
            margin-top: 20px;
        }
        .editorial-list-group-item {
            margin-bottom: 10px;
        }
        .editor-section{
            text-align:center;
        }
    </style>
</head>
<body>
@include('layout.header')
@include('layout.nav')

<div class="container mt-3">
    <div class="journal-container">
        <h1 class="journal-title">Journal of Information Technology Management and Business Horizons</h1>

        <div class="editor-section">
            <h4 class="editor-in-chief">Editor-in-Chief</h4>
            <p>Dr. Md. Habibur Rahman Sobuz,<br>The University of Adelaide, Australia & Khulna University of Engineering and Technology, Bangladesh</p>
        </div>

        <h4 class="board-title">Editorial Board Members</h4>
        <div class="list-group editorial-board">
            <div class="list-group-item">Dr. Norsuzailina Mohamad Sutan, University Malaysia Sarawak, Malaysia</div>
            <div class="list-group-item">Dr. Walid Mansour, Kafrelsheikh University, Egypt</div>
            <div class="list-group-item">Dr. Md. Munir Hayet Khan, INTI International University (INTI-IU), Malaysia</div>
            <div class="list-group-item">Dr. Md. Saiful Islam, University Malaysia Sarawak, Malaysia & Bangladesh Army University of Engineering and Technology, Bangladesh</div>
            <div class="list-group-item">Dr. Md. Alhaz Uddin, Jouf University, Kingdom of Saudi Arabia</div>
            <div class="list-group-item">Dr. Noor Md. Sadiqul Hasan, International University of Business Agriculture and Technology, Bangladesh</div>
            <div class="list-group-item">Dr. Ibrahim Abba, Federal Polytechnic, Nigeria</div>
            <div class="list-group-item">Masuk Abdullah, University of Debrecen, Hungary</div>
            <div class="list-group-item">Rakibul Hasan, Westcliff University, USA</div>
            <div class="list-group-item">Abu Sayed Mohammad Akid, Arkansas State University, USA</div>
            <div class="list-group-item">Md. Jewel Rana, Washington State University, USA</div>
            <div class="list-group-item">Ahmad Akib Uz Zaman, University of Wyoming, USA</div>
            <div class="list-group-item">Md. Kawsarul Islam Kabbo, Khulna University of Engineering and Technology, Bangladesh</div>
            <div class="list-group-item">Arafat Alam, The University of Nebraska–Lincoln, USA</div>
            <div class="list-group-item">Jannat Ara Jabin, Kansas State University, USA</div>
            <div class="list-group-item">Tamim Adnan, Michigan Technological University, USA</div>
            <div class="list-group-item">Hasan Mahmud Sozib, North South University, Bangladesh</div>
        </div>
    </div>
</div>

@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>