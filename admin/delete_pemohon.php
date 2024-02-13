<?php
include 'inc/connection.php';
$id = $_GET['id'];
$delete = mysqli_query($connection, "DELETE FROM pemohon WHERE id='$id'");
header("Location: mohon.php");

echo "<script>alert('Record telah dipadam');
       window.location = 'mohon.php'</script>";
exit;
?>