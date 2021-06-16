<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Pendaftar</title>
   <style type="text/css">
    .color{
      background-color: rgb(107, 229, 210);
    }
  </style>
 <link rel="stylesheet" type="text/css" href="style.css"><meta charset="utf-8">
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
	<?php 
$koneksi=new mysqli("localhost","root","","turnamen");
$sql="SELECT * FROM `user`";
$q=$koneksi->query($sql);
$rekord=$q->fetch_array();
?>
<br>
	<div class="container">
  <h2> <CENTER>Pendaftar Turnamen Online</h2></CENTER>
            <br>
            <br>  
  <table class="table table-bordered table-striped">
    <thead>
      <tr class="color">
        <th>Nama Pendaftar</th>
        <th>Email </th>
        <th>Jenis Game </th>
        <th>ID Game</th>
		    <th>Tanggal Pendaftaran</th>
		    <th>Nomor HandPhone</th>
		
      </tr>
    </thead>
    <tbody><?php do { ?>
      <tr>
        <td><?php echo $rekord['namauser'];?></td>
		    <td><?php echo $rekord['email'];?></td>
        <td><?php echo $rekord['jenisgame'];?></td>
		    <td><?php echo $rekord['idgame'];?></td>
		    <td><?php echo $rekord['tanggaldaftar'];?></td>
	     	<td><?php echo $rekord['nohp'];?></td>
      </tr><?php } while($rekord =$q->fetch_array());?>
    </tbody>
  </table>
</div>
<br>
<br>
  <br>  
  <br>  
  <br>  
  <br>
   <br>  
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
