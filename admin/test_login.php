<?php
	include 'inc/connection.php';
	session_start();
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
		$result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) == 0){
            $error = "Email and Password are wrong";
        }
        else{
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];

            echo $_SESSION['username'];

            if($row['username'] == $username){
                header("Location: profile_admin.php");
            }
            else{
                $error = "Login Error";
            }
        }
	}
?>