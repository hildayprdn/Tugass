<?php
$dbname = "contohdb";
$host = "localhost"; //127.0.0.1
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);
if ($conn->connect_errno) {
  echo "Koneksi ke server database gagal.";
  exit();
}
