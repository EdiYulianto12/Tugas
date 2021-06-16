<?php 
$koneksi=new mysqli("localhost","root","","turnamen");
$sql="CREATE TABLE turnamen.`jadwal`(
	`tanggaltur`date NOT NULL,
	`jenisgame` varchar(30) NOT NULL,
	`hadiah`varchar(30) NOT NULL,
	`kontak` varchar(30) NOT NULL PRIMARY KEY
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
$q=$koneksi->query($sql);
 if ($q) {
	 echo "Tabel jadwal sudah dibuat !";
 } else {
	 echo "Tabel jadwal  gagal dibuat !";
 }

 ?>