<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "siakad";

$konek = mysqli_connect($server,$user,$password,$nama_database);

if (!$konek) {
  die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>