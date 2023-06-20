<?php
session_start();

$email = $_SESSION['email'];
$conn = mysqli_connect("localhost","root","","test");
$query = "SELECT * FROM webti WHERE email= '$email' ";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $nim = $row['nim'];
    $nama = $row['nama'];
    $email = $row['email'];
    $jurusan = $row['jurusan'];
    $asal = $row['asal'];
    $ipk = $row['ipk'];
    $gender = $row['gender'];
    $password = $row['password'];
} else {
    // Pengguna tidak ditemukan, lakukan penanganan sesuai kebutuhan
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="css" href="admin.css">
  <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
  <style>
    .nav-link:hover{
    background-color: grey;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-light bg-primary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white">Selamat datang di<strong> Walisiadik V..BETA</strong></a>
      <form class="d-flex" style="margin-left: 50px; margin-right: 0px;">
        <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
      <div class="icon">
        <h5>
          <i class="fa-solid fa-envelope" style="margin-right: 30px;" data-toggle="tooltip" title="surat masuk"></i> 
          <i class="fa-solid fa-bell" style="margin-right: 30px;"data-toggle="tooltip" title="notif"></i>
          <i class="fa-solid fa-right-from-bracket" style="margin-right: 30px"data-toggle="tooltip" title="sign out"></i>
        </h5>
    </div>
    </div>
  </nav>

  <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
    <ul class="nav flex-column ml-3 mb-5">
    <li class="nav-item">
    <a class="nav-link active text-white" href="index.php"><i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;Dashboard</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="jadwal.php"><i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;Jadwal Kuliah</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="mahasiswa.php"><i class="fa-sharp fa-solid fa-graduation-cap"></i>&nbsp;&nbsp;Indeks Prestasi</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="#"><i class="fa-solid fa-feather"></i>&nbsp;&nbsp;Jurnal Kuliah</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="#"><i class="fa-solid fa-layer-group"></i>&nbsp;&nbsp;KRS</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="nilai.php"><i class="fa-solid fa-briefcase"></i>&nbsp;&nbsp;Perwalian</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="profile.php"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;My Profile</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;&nbsp;Logout</a><hr class="bg-secondary">
    </li>
    </ul>
    </div>
    <div class="col-md-10 p-5 pt-4">
    <h3><i class="fa-solid fa-user"></i>&nbsp;&nbsp;MY PROFILE</h3><hr>
      <div class="container">
        <div class="card mt-4" style="width: 50rem;">
        <div class="card-header">
            My Profile
        </div>
        <ul class="list-group-flush">
            <li class="list-group-item">NIM : <?= $nim ?></li>
            <li class="list-group-item">Nama : <?= $nama ?></li>
            <li class="list-group-item">Email : <?= $email ?></li>
            <li class="list-group-item">Password : <?= $password ?></li>  
            <li class="list-group-item">Jurusan : <?= $jurusan ?></li>
            <li class="list-group-item">Jenis Kelamin : <?= $gender ?></li>
            <li class="list-group-item">Asal : <?= $asal ?></li>
            <li class="list-group-item">IPK : <?= $ipk ?></li>
            
        </ul>
        <div class="card-footer text-right">
            <a href="edit.php" class="btn btn-warning">Edit Profil</a>
        </div>
        </div>
    </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="admin.js"></script>
</body>
</html>