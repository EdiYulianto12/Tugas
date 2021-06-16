<?php 
$koneksi=new mysqli("localhost", "root", "");
$sql="create database turnamen";
$q=$koneksi-> query($sql);
if($q){
	echo"Database Sudah Dibuat";
}
else{ echo "Database Gagal Dibuat";
}
$sql2="CREATE TABLE turnamen.`user`(
	`namauser`varchar(30) NOT NULL,
	`email` varchar(30) NOT NULL,
	`jenisgame`text NOT NULL,
	`idgame` text NOT NULL,
	`tanggaldaftar` date NOT NULL,
	`nohp` varchar(30)  NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
$q2=$koneksi->query($sql2);
 if ($q2) {
	 echo "Tabel user sudah dibuat !";
 } else {
	 echo "Tabel user  gagal dibuat !";
 }

 ?>