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
        <div class="card-body">
                <form action="edit-pf.php" method="post">
                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nim" name="nim" value="<?= $nim ?>" required="required" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $email ?>" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="password" name="password" value="<?=$password?>" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?=$jurusan?>" required="required">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="L" <?php if ($gender == 'L') echo 'checked'?>>
                            <label class="form-check-label" for="gender">
                                Laki-laki
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="P" <?php if ($gender == 'P') echo 'checked'?>>
                            <label class="form-check-label" for="gender">
                                Perempuan
                            </label>
                            </div>
                        </div>   
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-2 col-form-label">Asal</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="asal" name="asal" value="<?=$asal?>" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-2 col-form-label">IPK</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="ipk" name="ipk" value="<?=$ipk?>" required="required" readonly>
                        </div>
                    </div>
                    <button class="btn btn-primary" name="submit-edt">Edit</button>
                </form>
            </div>
        </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="admin.js"></script>
</body>
</html>