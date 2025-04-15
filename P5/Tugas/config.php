<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db   = "dbpuskesmas";

$conn = mysqli_connect("localhost", "root", "", "dbpuskesmas");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>