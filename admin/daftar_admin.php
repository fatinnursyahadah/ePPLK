<?php
    include 'inc/connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $no_ic = $_POST['no_ic'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $no_tel = $_POST['no_tel'];

        $query = mysqli_query($connection, "INSERT INTO admin(no_ic, nama, username, password, no_tel) 
        VALUES ('$no_ic','$nama','$username','$password','$no_tel')") or die(mysqli_error());
    
         echo "<script>alert('Record telah dimasukkan');
         window.location = 'index.php'</script>";

}

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

    ::placeholder {
  color: white;
  opacity: 1; /* Firefox */
    }

    ::-ms-input-placeholder { /* Edge 12 -18 */
  color: red;
    }

    option,
    input {
				background-color:#0C7078;
        color:white;
        display: block;
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
				height: 30px;
				border: 1px solid rgba(254,254,254,.3);
				border-radius: 5px;
				@extend .animate;
				
				&:hover,
				&:focus {
					border-color: #fff;
				}
			}

      .select{
        background-color:#0C7078;
        color:white;
        width: 100%;
				height: 30px;
				margin-bottom: 20px;
				padding: 0 8px;
				border: 1px solid rgba(254,254,254,.3);
				border-radius: 5px;
				@extend .animate;
}

.select:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

.tbl{
  background:white;
  border: 2px solid black;
}

th, td {
  border: 1px solid black;
  border-collapse: collapse;
}


th, td {
  padding: 5px;
}

  </style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/daftar.css">



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
              <p><a href="about.php">TENTANG KAMI</a></p>
            </div>

            <div class="clay-category">
              <p><a href="logout.php">LOG KELUAR</a></p>
            </div>
            
            <div class="clay-category">
              <p><a href="aktiviti.php">AKTIVITI HARIAN</a></p>
            </div>
          </div>
<br></br>

    <body>
    <div class="container">
    <table class="tbl" width="100%">
    <form action="" method="post">
      <thead class="thead-dark">
        <td colspan="3" scope="col" style="background-color: white;"><h5 style="text-align: center;">DAFTAR ADMIN</h3></td>
      </thead>
      
        <td>
        NO. KAD PENGENALAN ADMIN  : <input type="text" name="no_ic" placeholder="Masukkan No Ic Tanpa (-)" required="" class="form-control">

        NAMA  : <input type="text" name="nama" placeholder="Masukkan Nama Penuh Admin" required="" class="form-control">
        
        Username : <input type="text" name="username" placeholder="Masukkan No Ic Tanpa (-)" required="" class="form-control">
        
        KATA LALUAN ADMIN: <input type="text" name="password" placeholder="4 Angka Akhir No KP" required="" class="form-control">
        
        NO. TELEFON ADMIN  : <input type="text" name="no_tel" placeholder="Masukkan No. Telefon" required="" class="form-control">
    
      
            <button type="submit" name="submit" class="submit">DAFTAR</button>
          </td>
  </table>
  </div>
  </form>
</body>
</html>