<?php
	include 'inc/connection.php';
	session_start();
	if (isset($_POST['submit'])) {
		$nokp = $_POST['nokp'];
		$pswd = $_POST['pswd'];

		$query = "SELECT * FROM murid WHERE nokp = '$nokp' AND pswd = '$pswd' ";
		$result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) == 0){
            $error = "Email and Password are wrong";
        }
        else{
            $row = mysqli_fetch_assoc($result);
            $_SESSION['nokp'] = $row['nokp'];

            echo $_SESSION['nokp'];

            if($row['nokp'] == $nokp){
                header("Location: profile_murid.php");
            }
            else{
                $error = "Login Error";
            }
        }
	}
?>