<?php
include_once("config.php");

if (isset($_POST['submit'])) {
    $kode = $_POST['kode'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $kelas = $_POST['kelas'];
    $sks = $_POST['sks'];
    $waktu = $_POST['waktu'];

    // Enclose string values in single quotes
    $query = "INSERT INTO krs (kode, mata_kuliah, kelas, sks, waktu) 
              VALUES ('$kode', '$mata_kuliah', '$kelas', '$sks', '$waktu')";

    $result = mysqli_query($konek, $query);

    if ($result) {
        echo "Tambah sukses. <a href='index2.php'>Lihat Matakuliah</a>";
    } else {
        echo "Error: " . mysqli_error($konek);
    }
}
?>
