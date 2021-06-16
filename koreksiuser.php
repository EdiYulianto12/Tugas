<!DOCTYPE html>
<html lang="en">
<head>
  <title>Koreksi Rekord User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    </ul>
  </div>  
</nav>

<div class="container">
  <br>  <br>
  <h2><center>Cari Nama Pendaftar</h2></center>
  <form method="post">
    <div class="form-group">
      <label for="namadikoreksi">Ketik nama pendaftar yang dikoreksi</label>
      <input type="text" class="form-control" id="namadikoreksi" placeholder="Ketik nama pendaftar" name="namadikoreksi">
    </div>
      <button type="submit" class="btn btn-primary" name="bkoreksi" onclick="return confirm('Apakah rekord dengan kata kunci yang terpilih dikoreksi ?')">Koreksi</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bkoreksi'])) {
  $namadikoreksi=$_POST['namadikoreksi'];
  $koneksi=new mysqli("localhost","root","","turnamen");
  $sql="SELECT * FROM user WHERE namauser = '".$namadikoreksi."'";
  $q=$koneksi->query($sql);
  $rekord=$q->fetch_array();
  if (empty($rekord)) {
    echo "Rekord tidak ditemukan !";
    exit();
  } else {
    ?>
<div class="container">
  <h2>Pendaftar Turnamen</h2><br>
  <form method="post">
    <div class="form-group">
      <label for="namauser">User Name</label>
      <input type="text" class="form-control" id="namauser"  name="namauser" value="<?php echo $rekord['namauser'];?>" readonly>
    </div>
  <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email"  name="email" value="<?php echo $rekord['email'];?>">
    </div>
    <div class="form-group">
      <label for="jenisgame">Jenis Game Yang Di Ikuti</label>
      <input type="text" class="form-control" id="jenisgame" name="jenisgame"
    value="<?php echo $rekord['jenisgame'];?>">
    
    </div>
    <div class="form-group">
     <label for="idgame">ID Game</label>
     <input type="text" class="form-control" id="idgame" name="idgame"value="<?php echo $rekord['idgame'];?>">
   </div>
   <div class="form-group">
      <label for="nohp">No HandPhone</label>
      <input type="text" class="form-control" id="nohp" name="nohp"
    value="<?php echo $rekord['nohp'];?>">
    </div>
  <br><br> 
   
    <?php
  } //end if empty
}
if (isset($_POST['bSimpan'])) {
  $namauser=$_POST['namauser'];
  $email=$_POST['email'];
  $jenisgame=$_POST['jenisgame'];
  $idgame=$_POST['idgame'];
  $tanggaldaftar=$_POST['tanggaldaftar'];
  $nohp=$_POST['nohp'];
  $koneksi=new mysqli("localhost","root","","showroom");
  $sql="UPDATE `user` SET `namauser` = '$namauser', `email` = '$email', `jenisgame` = '$jenisgame', `idgame` = '$idgame', `tanggaldaftar` = '$tanggaldaftar', `nohp` = '$nohp' WHERE `user`.`namauser` = '$namauser';";
  $q=$koneksi->query($sql);
  if ($q) {
    echo "Rekord user sudah tersimpan !";
  } else {
    echo "Rekord user gagal tersimpan !";
  } 
}
?>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<footer>
   <h2><center><font color="white">@2021 | Kelompok ?</h2></center>

</footer>