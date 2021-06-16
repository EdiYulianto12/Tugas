<!DOCTYPE html>
<html>
<head>
	<title>input jadwal turnamen</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <style type="text/css"><link rel="stylesheet" type="text/css" href="style.css"></style>
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
<div class="container">
	<h2><center>Jadwal Turnamen Yang Akan Di Selenggarakan</h2></center><br><br>
	<form method="post">
	 <div class="form-group">
      <label for="tanggaltur">Tanggal Turnamen</label>
      <input type="date" class="form-control" id="tanggaltur"  name="tanggaltur">
    </div>
		<label for="jenisgame">Jenis Game</label>
			<input type="text" name="jenisgame" id="jenisgame" placeholder="Masukan Jenis Game" class="form-control"><br>
		<label for="hadiah">Pol Prize</label>
			<input type="text" name="hadiah"  class="form-control" id="hadiah"><br>
		<label for ="kontak">Kontak Panitia Turnamen</label>
		<input type="text" name="kontak"  class="form-control" id="kontak"><br>
		 <button type="submit" class="btn btn-primary" name="bSimpan">Simpan </button>

	</div>
</form>
</div>
<br>
<br><br>

<?php 
if (isset($_POST['bSimpan'])) {
	$tanggaltur=$_POST['tanggaltur'];
	$jenisgame=$_POST['jenisgame'];
	$hadiah=$_POST['hadiah'];
	$kontak=$_POST['kontak'];
	
	$koneksi=new mysqli("localhost","root","","turnamen");

	$sql="INSERT INTO `jadwal`(`tanggaltur`, `jenisgame`, `hadiah`, `kontak`) VALUES ('".$tanggaltur."','".$jenisgame."', '".$hadiah."','".$kontak."');";
	
		$q=$koneksi->query($sql);
		if ($q) {
			echo "<center><h2>Rekord jadwal turnamen sudah tersimpan !</center></h2>";
		} else {
			echo "<center><h2>Rekord jadwal turnamen gagal tersimpan !</center></h2>";
		}	
	}
?>
<br>
<br>
<br> 
<br>
<br>
<br>    
<footer >
	<h2><center><font color="white">@2021 | Kelompok ?</h2></center>

  
  	</body>
</html>