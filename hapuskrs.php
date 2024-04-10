<?php
include("config.php");

$kode = $_POST['kode'];
$mata_kuliah = $_POST['mata_kuliah'];
$kelas = $_POST['kelas'];
$sks = $_POST['sks'];
$waktu = $_POST['waktu'];


    $result = mysqli_query($konek, "DELETE FROM krs WHERE kode='$kode'");

   
        header("Location: index2.php"); 

?>
