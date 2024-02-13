<?php
    include 'inc/connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama = $_POST['nama'];
        $nokp = $_POST['nokp'];
        $pswd = $_POST['pswd'];
        $notel = $_POST['notel'];
        $bilAdikB = $_POST['bilAdikB'];
        $alamat = $_POST['alamat'];
        $alahan = $_POST['alahan'];
        $status = $_POST['status'];
        $namaibu = $_POST['namaibu'];
        $jobibu = $_POST['jobibu'];
        $namabapa = $_POST['namabapa'];
        $jobbapa = $_POST['jobbapa'];
        $namapenjaga = $_POST['namapenjaga'];
        $jobpenjaga = $_POST['jobpenjaga'];
        $tahun = $_POST['tahun'];

        $query = mysqli_query($connection, "INSERT INTO pemohon(nama, nokp, pswd, notel, bilAdikB, alamat, alahan, status,
        namaibu,jobibu,namabapa,jobbapa,namapenjaga,jobpenjaga,tahun) 
        VALUES ('$nama','$nokp','$pswd','$notel','$bilAdikB','$alamat','$alahan','$status',
        '$namaibu','$jobibu','$namabapa','$jobbapa','$namapenjaga','$jobpenjaga','$tahun')") or die(mysqli_error());
    
         echo "<script>alert('Record telah dimasukkan');
         window.location = 'wait.php'</script>";

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
        <td colspan="3" scope="col" style="background-color: white;"><h5 style="text-align: center;">DAFTAR PELAJAR</h3></td>
      </thead>
      
        <td>
          NAMA PELAJAR  : <input type="text" name="nama" placeholder="Masukkan Nama Penuh Pelajar" required="" class="form-control">

          NO. KAD PENGENALAN  : <input type="text" name="nokp" placeholder="Masukkan No.KP Tanpa (-)" required="" class="form-control">
        
          KATA LALUAN PELAJAR : <input type="text" name="pswd" placeholder="4 Angka Akhir No KP" required="" class="form-control">
        
          NO. TELEFON : <input type="text" name="notel" placeholder="Masukkan No. Telefon" required="" class="form-control">
        
          ALAMAT  : <input type="text" name="alamat" placeholder="Masukkan alamat" required="" class="form-control">
        
          ADIK BERADIK : 
            <select class="select" id="inputGroupSelect01" name="bilAdikB">
                <option placeholder>Masukkan Bil Adik Beradik</option>
                <option value="1">1</option>       
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>

          ALAHAN  :
            <select class="select" id="inputGroupSelect01" name="alahan">
                <option placeholder>Masukkan alahan</option>
                <option value="SEAFOOD">SEAFOOD</option>          
                <option value="KACANG">KACANG</option>
                <option value="TIADA">TIADA</option>
                <option value="LAIN-LAIN">LAIN-LAIN</option>
            </select>

            STATUS  :
            <select class="select" id="inputGroupSelect01" name="status">
                <option placeholder>Masukkan status</option>
                <option value="ANAK PENEROKA">ANAK PENEROKA</option>
                <option value="CUCU PENEROKA">CUCU PENEROKA</option>
                <option value="LAIN-LAIN">LAIN-LAIN</option>
            </select>

            NAMA IBU  : <input type="text" name="namaibu"  placeholder="Sila Masukkan Nama Ibu Murid"  required="" class="form-control">

            PEKERJAAN IBU  : <input type="text" name="jobibu" placeholder="Masukkan Pekerjaan Ibu Murid" required="" class="form-control">
      
            NAMA BAPA  : <input type="text" name="namabapa" placeholder="Sila Masukkan Nama Bapa Murid" required="" class="form-control">
      
            PEKERJAAN BAPA  : <input type="text" name="jobbapa" placeholder="Masukkan Pekerjaan Bapa Murid" required="" class="form-control">

            NAMA PENJAGA  : <input type="text" name="namapenjaga" placeholder="Sila Masukkan Nama Penjaga" required="" class="form-control">

            PEKERJAAN PENJAGA  : <input type="text" name="jobpenjaga" placeholder="Masukkan Pekerjaan Penjaga Murid" required="" class="form-control">
    
            TAHUN KEMASUKKAN  : <input type="text" name="tahun" placeholder="Masukkan Tahun Kemasukkan Murid" required="" class="form-control">
      
            <button type="submit" name="submit" class="submit">DAFTAR</button>
          </td>
  </table>
  </div>
  </form>
</body>
</html>