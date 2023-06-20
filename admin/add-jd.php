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
      <a class="navbar-brand text-white">Selamat datang ADMIN |<strong> Walisiadik V..BETA</strong></a>
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
    <a class="nav-link text-white" href="mahasiswa.php"><i class="fa-sharp fa-solid fa-graduation-cap"></i>&nbsp;&nbsp;Daftar Mahasiswa</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="dosen.php"><i class="fa-solid fa-chalkboard-user"></i>&nbsp;&nbsp;Daftar Dosen</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="pegawai.php"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;Daftar Pegawai</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="jadwal.php"><i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;Jadwal Kuliah</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="nilai.php"><i class="fa-solid fa-paper-plane"></i>&nbsp;&nbsp;Nilai Mahasiswa</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;&nbsp;Logout</a><hr class="bg-secondary">
    </li>
    </ul>
    </div>
    <div class="col-md-10 p-5 pt-4">
      <h3><i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;ADD JADWAL</h3><hr>
      <div class="container">
        <div class="card mt-4" style="width: 50rem;">
            <div class="card-header">
                Tambah Jadwal
            </div>
            <div class="card-body">
                <form action="aksi-jd.php" method="post">
                    <div class="form-group row">
                        <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="sks" name="sks" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="kode" name="kode" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-sm-2 col-form-label">Mata Kuliah</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="matkul" name="matkul" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dosen" class="col-sm-2 col-form-label">Dosen</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="dosen" name="dosen" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="kelas" name="kelas" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ruang" class="col-sm-2 col-form-label">Ruang</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="ruang" name="ruang" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="waktu" name="waktu" required="required">
                        </div>
                    </div>
                    <button class="btn btn-primary" name="submit-jd">Add</button>
                </form>
            </div>
        </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="admin.js"></script>
</body>
</html>