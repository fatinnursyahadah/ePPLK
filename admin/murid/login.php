<?php
    include("inc/connection.php");
    if(isset($_POST['submit'])){
        $nokp = $_POST['nokp'];
        $pswd = $_POST['pswd'];


        $sql = "SELECT * FROM murid WHERE nokp ='$nokp' and pswd ='$pswd'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);
        if($count==1){
            header("Location: profile_murid.php");
        }else {
            echo '<script>
                    window.location.href = "test_login.php";
                    alert("Login failed!")
                </script>';
        }
    }
    

?>