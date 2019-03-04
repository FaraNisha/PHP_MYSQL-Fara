<?php
include "koneksi.php";

$sql = "CREATE TABLE user(
  id int PRIMARY KEY,
  nama varchar(50),
  role varchar(50),
  avalilability varchar(50),
  age int,
  location varchar(50),
  years_experience varchar(50),
  email varchar(50)
)";

if($koneksi->query($sql) === TRUE){
  echo "Tabel Berhasil Dibuat";
} else {
  echo "Tabel gagal dibuat";
}
 ?>
