<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "ekanakkanak";

    $connection = mysqli_connect($host,$user,$pass) 
    or die("database are not connected");

    mysqli_select_db($connection,$dbname) 
    or die("database does not exists");

?>