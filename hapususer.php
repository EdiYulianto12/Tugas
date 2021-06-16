<!DOCTYPE html>
<html>
<head>
	<title>Hapus Rekord Pendaftar</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="style.css">
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
        <li class="nav-item">
        <a class="nav-link" href="hapususer.php">Hapus</a>
      </li> 
    </ul>
  </div>  
</nav>
<br>
<div class="container">
    <p><a href="hapusjadwal.php"><font color="black" size="1">Hapus Jadwal</p></a></font>
	<h1><center>Hapus Nama Pendaftar</center></h1><br><br>
	<form method="post">
		<div class="form-grup">
			<label for ="hapus">Ketik Nama Pendaftar Yang Akan Di Hapus:</label>
			<input type="text" class="form-control" name="hapus" id="hapus" placeholder="Ketik Nama Pendaftar">
		</div><br>
		<button type="submit" class="btn btn-primary" name="bhapus"onclick="return confirm('Apakah user pendaftar yang dipilih akan di hapus?')">Hapus</button>
		
	</form>
</div>

<?php if (isset($_POST['bhapus'])) {
	$userhapus=$_POST['hapus'];
	$koneksi=new mysqli("localhost","root","","turnamen");
	$sql="DELETE FROM `user` WHERE `user`.`namauser` = '".$userhapus."'";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "<center><h2>Pendaftar sudah dihapus !</center></h2>";
	} else {
		echo "<center><h2>Pendaftar gagal dihapus !</center></h2>";
	}
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>  <br>
<br>
<br>
<br>
<br>    
<footer >
    <h2><center><font color="white">@2021 | Kelompok ?</h2></center>

  	</body>
</html>
