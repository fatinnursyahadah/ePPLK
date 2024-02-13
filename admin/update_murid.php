<?php
    include 'inc/connection.php';

    $id = $_GET['id'];

    $papar = mysqli_query($connection, "SELECT * FROM murid WHERE id='$id'");

    if(isset($_POST['submit'])){

      $upnotel = $_POST['upnotel'];
      $upbilAdikB = $_POST['upbilAdikB'];
      $upalamat = $_POST['upalamat'];
      $upalahan = $_POST['upalahan'];
      $upstatus = $_POST['upstatus'];

      $query = mysqli_query($connection, "UPDATE murid SET notel='$upnotel', bilAdikB='$upbilAdikB', alamat='$upalamat', 
      alahan='$upalahan', status='$upstatus' WHERE id='$id' ");
      
       echo "<script>alert('Record telah dimasukkan');
       window.location = 'senarai_murid.php'</script>";

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

    .form-control{
  color: white;
  opacity: 1; /* Firefox */
    }

    ::-ms-input-placeholder { /* Edge 12 -18 */
  color: red;
    }

    option,
    input {
    display: block;
    }

    option,
    input {
        background-color:#03265C;
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
        background-color:#03265C;
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
  border: 1px solid black;
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
<link rel="stylesheet" href="css/form.css">




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

    <body>
               
    <button type="submit" name="submit" class="submit"><a href="update.php">KEMBALI</a></button>
            
    <div class="container">
    <table class="tbl" width="100%">
    <form action="" method="post">
      <thead class="thead-dark">
        <td colspan="3" scope="col" style="background-color: white;"><h5 style="text-align: center;">DAFTAR PELAJAR</h3></td>
      </thead>
      <?php 
      while($data = mysqli_fetch_array($papar)) {
      ?>
      
        <td>
          NAMA PELAJAR  : <input type="text" name="upnama" value="<?php echo $data['nama'] ?>" required="" class="form-control"></br>

          NO. KAD PENGENALAN  : <input type="text" name="upnokp" value="<?php echo $data['nokp'] ?>" required="" class="form-control"></br>
        
          KATA LALUAN PELAJAR : <input type="text" name="uppswd" value="<?php echo $data['pswd'] ?>" required="" class="form-control"></br>
        
          NO. TELEFON : <input type="text" name="upnotel" value="<?php echo $data['notel'] ?>" required="" class="form-control"></br>
        
          ALAMAT  : <input type="text" name="upalamat" value="<?php echo $data['alamat'] ?>" required="" class="form-control"></br>
        
          ADIK BERADIK : 
            <select class="select" id="inputGroupSelect01" name="upbilAdikB">
                <option value="<?php echo $data['bilAdikB'] ?>"><?php echo $data['bilAdikB'] ?></option>
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
            <br></br>

          ALAHAN  :
            <select class="select" id="inputGroupSelect01" name="upalahan">
                <option value="<?php echo $data['alahan'] ?>"><?php echo $data['alahan'] ?></option>
                <option value="SEAFOOD">SEAFOOD</option>          
                <option value="KACANG">KACANG</option>
                <option value="TIADA">TIADA</option>
                <option value="LAIN-LAIN">LAIN-LAIN</option>
            </select>
            <br></br>

            STATUS  :
            <select class="select" id="inputGroupSelect01" name="upstatus">
                <option value="<?php echo $data['status'] ?>"><?php echo $data['status'] ?></option>
                <option value="ANAK PENEROKA">ANAK PENEROKA</option>
                <option value="CUCU PENEROKA">CUCU PENEROKA</option>
                <option value="LAIN-LAIN">LAIN-LAIN</option>
            </select>
            <br></br>

            NAMA IBU  : <input type="text" name="upnamaibu" value="<?php echo $data['namaibu'] ?>" required="" class="form-control"></br>

            PEKERJAAN IBU  : <input type="text" name="upjobibu" value="<?php echo $data['jobibu'] ?>" required="" class="form-control"></br>
      
            NAMA BAPA  : <input type="text" name="upnamabapa" value="<?php echo $data['namabapa'] ?>" required="" class="form-control"></br>
      
            PEKERJAAN BAPA  : <input type="text" name="upjobbapa" value="<?php echo $data['jobbapa'] ?>" required="" class="form-control"></br>

            NAMA PENJAGA  : <input type="text" name="upnamapenjaga" value="<?php echo $data['namapenjaga'] ?>" required="" class="form-control"></br>

            PEKERJAAN PENJAGA  : <input type="text" name="upjobpenjaga" value="<?php echo $data['jobpenjaga'] ?>" required="" class="form-control"></br>
      
            TAHUN KEMASUKKAN  : <input type="text" name="uptahun" value="<?php echo $data['tahun'] ?>" required="" class="form-control"></br>
      
            <button type="submit" name="submit" class="submit">DAFTAR</button>
          </td>
      <?php } ?>
  </table>
  </div>
  </form>
</body>
</html>