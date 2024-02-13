<?php
include 'inc/connection.php';
$id = $_GET['id'];
$delete = mysqli_query($connection, "DELETE FROM murid WHERE id='$id'");
header("Location: update.php");

echo "<script>alert('Record telah dipadam');
       window.location = 'senarai_murid.php'</script>";
exit;
?>