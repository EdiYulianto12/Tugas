<!DOCTYPE html>
<html>
<head>
	<title>input data turnamen</title>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="gaya.css">

	</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="landing/index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="daftarjadwal.php">Jadwal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="inputdata.php">Daftar</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="koreksiuser.php">Cari pendaftar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="daftaruser.php">Pendaftar Turnamen</a>
      </li>    
       <li class="nav-item">
        <a class="nav-link" href="inputjadwal.php">Buat Jadwal</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="koreksijadwal.php">Cari Jadwal</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="hapususer.php">Hapus</a>
      </li>   
    </ul>
  </div>  
</nav>
<br>
<br>
<br>
<div class="container">

	<h2><center>Form Pendaftaran Turnamen</h2></center>
	<form method="post">
	 <div class="form-group">
      <label for="namauser">User Name:</label>
      <input type="text" class="form-control" id="namauser" placeholder=" Ketik User Name Anda" name="namauser">
    </div>
		<label for="email">Email</label>
			<input type="text" name="email" id="email" placeholder="Ketik Email" class="form-control"><br>
		<label for="jenisgame">Jenis Game yang akan di ikuti</label>
			<input type="text" name="jenisgame" placeholder="Jenis Game Yang akan Di Ikuti" class="form-control" id="jenisgame"><br>
		<label for ="idgame">ID Game</label>
			<input type="text" name="idgame" class="form-control" placeholder="Masukan Id Game Anda" id="idgame"><br>
		<label for="tanggaldaftar">Tanggal Daftar</label>
			<input type="date" name="tanggaldaftar" placeholder="Tanggal Daftar" id="tanggaldaftar" class="form-control"><br>
		<label for="nohp"> Nomor HandPhone</label>
			<input type="text" name="nohp" placeholder="Nomor HandPhone" id="nohp" class="form-control" row="5"><br>
		 <button type="submit" class="btn btn-primary" name="bSimpan">Simpan </button>

	</div>
</form>
</div>
<br>
<br>
<br>

<?php 
if (isset($_POST['bSimpan'])) {
	$namauser=$_POST['namauser'];
	$email=$_POST['email'];
	$jenisgame=$_POST['jenisgame'];
	$idgame=$_POST['idgame'];
	$tanggaldaftar=$_POST['tanggaldaftar'];
	$nohp=$_POST['nohp'];
	
	$koneksi=new mysqli("localhost","root","","turnamen");

	$sql="INSERT INTO `user`(`namauser`, `email`, `jenisgame`, `idgame`, `tanggaldaftar`, `nohp`) VALUES ('".$namauser."','".$email."', '".$jenisgame."','".$idgame."','".$tanggaldaftar."','".$nohp."');";
	
		$q=$koneksi->query($sql);
		if ($q) {
			echo "<h2><center>Selamat Anda Telah Terdaftar !</center></h2>";
		} else {
			echo "<h2><center>Maff Anda Gagal Mendaftar !</center></h2>";
		}	
	}
	?>
	<br>
	<br>
<footer >
	<h2><center><font color="white">@2021 | Desain By Kelompok ?</font></center></h2>
	
</footer>

	</body>
</html>