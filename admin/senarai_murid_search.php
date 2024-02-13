<?php
    include 'inc/connection.php';

    $carian = $_POST ['search'];
    
    $query = mysqli_query ($connection, "SELECT * from murid where tahun  LIKE '%$carian%' ");



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

    .container {
  padding: 5px;
  width: 100%;
}

table{ 
  border-spacing: 1; 
  border-collapse: collapse; 
  background:white;
  border-radius:6px;
  overflow:hidden;
  max-width:500px; 
  width:100%;
  margin:0 auto;
  position:relative;
}

th, td {
  color: black;
  border: 1px solid black;
  border-collapse: collapse;
}


th, td {
  padding: 10px;
}
    
    
  </style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="css/daftar.css">
<link rel="stylesheet" href="css/table.js">



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
<br></br>
    <center>
    <section class="container">
    <body>
    <head>
 <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
<button type="submit" name="submit" class="back"><a href="senarai_murid.php">KEMBALI</button>
    </body>
    <table style="width:100%">
  <tr>
    <th>ID</th>
    <th style="width:50%">NAMA</th>
    <th>NO KP</th>
    <th>PASSWORD</th>
    <th>NO TELEFON</th>
    <th>ALAMAT</th>
    <th>BIL ADIK BERADIK</th>
    <th>ALAHAN</th>
    <th>STATUS</th>
    <th>TAHUN</th>

    <tbody>
    <?php
    $number=1;
    while($data = mysqli_fetch_array($query)){
    ?>
        <tr>

        <td>
        <?php
         echo $number;
        ?>
        </td>

        <td>
        <?php
        echo $data["nama"]; 
        ?>
        </td>

        <td>
        <?php
        echo $data["nokp"]; 
        ?>
        </td>    

        <td>
        <?php
        echo $data["pswd"]; 
        ?>
        </td> 

        <td>
        <?php
        echo $data["notel"]; 
        ?>
        </td>

        <td>
        <?php
        echo $data["alamat"]; 
        ?>
        </td>    

        <td>
        <?php
        echo $data["bilAdikB"]; 
        ?>
        </td> 

        <td>
        <?php
        echo $data["alahan"]; 
        ?>
        </td>

        <td>
        <?php
        echo $data["status"]; 
        ?>
        </td>
        <td>
        <?php
        echo $data["tahun"]; 
        ?>

  
        <?php $number++; } ?>
        
        </tr>
        </tbody>
</table>

</body>
</section>
<center>
</body>
</html>