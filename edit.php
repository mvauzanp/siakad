<?php
include_once("config.php");

if (isset($_POST['submit'])) {
    // Retrieve form data
    $kode = $_POST['kode'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $kelas = $_POST['kelas'];
    $sks = $_POST['sks'];
    $waktu = $_POST['waktu'];

    // Prepare and execute the update query
    $query = "UPDATE krs SET mata_kuliah=$mata_kuliah, kelas=$kelas, sks=$sks, waktu=$waktu WHERE kode=$kode";
    
 
        header("Location: index2.php");
}

?>