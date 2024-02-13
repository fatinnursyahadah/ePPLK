<!-- <?php

include "inc/connection.php";

?> -->

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>E-PPLK</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    /* Style the link without underline */
    a {
      color: black;
      text-decoration: none;
    }
    
    a:hover {
      color: white; /* color when hovering */
    }

    .fa {
  padding: 15px;
  font-size: 50px;
  width: 50px;
  text-decoration: none;
  border-radius: 50%;
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: #3B5998;
  color: white;
  text-align: center;
}

/* Twitter */
.fa-whatsapp {
  background: green;
  color: white;
  text-align: center;
}

  </style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/about.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="dashboard-river">

  <div class="dashboard-container">

    <div class="dashboard">

      <div class="ui-row-1">

        <div class="logo-comp"><img src="img/felda.png" width="50" height="50">
          <p>E-PPLK</p>
        </div>

<center>
  <h2> SISTEM PENDAFTARAN PUSAT LITERASI KANAK KANAK FELDA JELAI</h2>
</center>
       
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
              <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
              <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z" />
            </svg>
          </div>

        </div>

        <div class="main-content">

          <div class="header">

            <div class="page-display">
              <h1>SISTEM</h1>
              <h2>E-PPLK</h2>
  </div>

  <div class="clay-category">
              <p><a href="about_admin.php">TENTANG KAMI</a></p>
            </div>

            <div class="clay-category">
              <p><a href="logout.php">LOG KELUAR</a></p>
            </div>

            <div class="clay-category">
              <p><a href="home_admin.php">HALAMAN UTAMA</a></p>
            </div>
            
            <div class="clay-category">
              <p><a href="aktiviti_admin.php">AKTIVITI HARIAN</a></p>
            </div>

          </div>

          <h2>GALLERY</h2>
          <div class="thumbs">
            
  <a href="#target1"><img src='img/aktiviti1.jpg' alt=''></a>
  <a href="#target2"><img src='img/aktiviti2.png' alt=''></a>
  <a href="#target3"><img src='img/hariraya.jpg' alt=''></a>
</div>

<div class="lightbox">
  <div class="target" id="target1">
    <span>
      <!-- spacer to keep content centered in the flex container -->
    </span>
    <div class="content">
      <img src='img/aktiviti1.jpg' alt=''>
    </div>
    <a href="#target2" class="fas fa-chevron-right nav" title="next"></a>
  </div>
  <div class="target" id="target2">
    <a href="#target1" class="fas fa-chevron-left nav" title="previous"></a>
    <div class="content"><img src='img/aktiviti2.png' alt=''></div>
    <a href="#target3" class="fas fa-chevron-right nav" title="next"></a>
  </div>
  <div class="target" id="target3">
    <a href="#target2" class="fas fa-chevron-left nav" title="previous"></a>
    <div class="content"><img src='img/hariraya.jpg' alt=''></div>
    <span>
      <!-- spacer to keep content centered in the flex container -->
    </span>
  </div>
  <a href="#!" class="fas fa-times close nav"></a>
</div>
<!-- partial -->
          <h2>LOKASI</h2>
          <h5>PEJABAT FELDA JELAI 4</h5>
          <a href ="https://maps.app.goo.gl/SJbWHk1LnNCyHULE9" target="_blank">https://maps.app.goo.gl/SJbWHk1LnNCyHULE9</a> </br></br>
          
          <h2>HUBUNGI KAMI</h2>
          <a href="https://www.facebook.com/pusatliterasi.kanakkanak" target="_blank" class="fa fa-facebook"></a></br>
          <a href="https://wa.me/60187838321?text=CIKGU%20DIANA" target="_blank" class="fa fa-whatsapp"></a>

         
  
</body>
</html>
