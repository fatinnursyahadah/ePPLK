<?php

session_start();
include 'inc/connection.php';

$username = $_SESSION['username'];

$papar = mysqli_query($connection, "SELECT * FROM admin WHERE username = '$username'");
//$display = mysqli_fetch_array($papar);

while($display = mysqli_fetch_array($papar)){

?>



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

    img {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
}

    .dashboard-river{
      background: #7E7BB9;
}
  </style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/profile.css">


</head>
<body>
<!-- partial:index.partial.html -->
<div class="dashboard-river" >

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
          <body>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
</head>

<body>

 <div class="container">

  <div class="row d-flex justify-content-center">

   <div class="col-lg-6 col-md-9">

    <div class="main my-5">

     <div class="top p-3">

      <div class="container">
       <div class="row">
        <div class="col-12 mb-3">
         <img src="img/profile.png"  align-items= "center">
        </div>

        <div class="col-12 text-center name">
         <div class="d-flex justify-content-center">
          <div>NAMA : <?php echo $display['nama'];  ?></div>
         </div>
        </div>

       </div>
      </div>

     </div>


      <div class="container">
       <div class="row">
        <div class="col-12 text-center name">
         <div class="d-flex justify-content-between">
         <div>NO KAD PENGENALAN : <?php echo $display['no_ic'];  ?></div>
         </div>
        </div>
        <div class="col-12 text-center name">
         <div class="d-flex justify-content-between">
         <div>PASSWORD : <?php echo $display['password'];  ?></div>
         </div>
        </div>
        <div class="col-12 text-center name">
         <div class="d-flex justify-content-between">
          <div>USERNAME : <?php echo $display['username'];  ?></div>
         </div>
        </div>
        <div class="col-12 text-center name">
         <div class="d-flex justify-content-between">
          <div>NO TELEFON : <?php echo $display['no_tel']; } ?></div>
         </div>
        </div>
  </div>
  </div>
  </div>
     </div>

    </div>

   </div>

  </div>

 </div>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
