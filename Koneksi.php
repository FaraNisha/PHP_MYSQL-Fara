<?php
$host = "localhost"; // host database
$username = "root"; // username Database
$password = ""; // password database
$db = "profile";
$koneksi = new mysqli($host, $username, $password, $db); // maembuat koneksi ke server mysql

if ($koneksi->connect_error) {
  die("koneksi ke database gagal");
}
 ?>
