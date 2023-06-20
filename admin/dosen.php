<?php
$dosen = [
  ["nama" => "Masy Ari Ulinuha",
  "nidn" =>"101111",
  "jurusan" => "Teknologi Informasi",
  "fakultas" => "Saintek",
  "asal" =>"Semarang"
 ],
 ["nama" => "Hery Mustofa",
 "nidn" =>"101112",
 "jurusan" => "Teknologi Informasi",
 "fakultas" => "Saintek",
 "asal" =>"Semarang"
],
["nama" => "Nanang Qosim",
"nidn" =>"121118",
"jurusan" => "Teknologi Informasi",
"fakultas" => "Saintek",
"asal" =>"Semarang"
],
["nama" => "Moh Hadi Subowo",
"nidn" =>"101113",
"jurusan" => "Teknologi Informasi",
"fakultas" => "Saintek",
"asal" =>"Semarang"
],
["nama" => "Siti Nur'aini",
"nidn" =>"101114",
"jurusan" => "Teknologi Informasi",
"fakultas" => "Saintek",
"asal" =>"Semarang"
],
["nama" => "Mokhammad Iklil Mustofa",
"nidn" =>"101115",
"jurusan" => "Teknologi Informasi",
"fakultas" => "Saintek",
"asal" =>"Semarang"
],
["nama" => "Achmad Hasymi Hasona",
"nidn" =>"121119",
"jurusan" => "Teknologi Informasi",
"fakultas" => "Saintek",
"asal" =>"Semarang"
],
["nama" => "Rita Aryana Nur Khasanah",
"nidn" =>"1211110",
"jurusan" => "Teknologi Informasi",
"fakultas" => "Saintek",
"asal" =>"Semarang"
],
["nama" => "Adzhal Arwani Mahfudh",
"nidn" =>"101116",
"jurusan" => "Teknologi Informasi",
"fakultas" => "Saintek",
"asal" =>"Semarang"
],
  ["nama" => "Agus Widodo",
   "nidn" =>"41111",
   "jurusan" => "Matematika",
   "fakultas" => "Saintek",
   "asal" =>"Semarang"
  ],
  ["nama" => "Sigit Rendang",
   "nidn" => "41112",
   "jurusan" => "Pendidikan Biologi",
   "fakultas" => "Saintek",
   "asal" => "Salatiga"
  ],
  ["nama" => "Bambang Pacul",
   "nidn" => "41113",
   "jurusan" => "Hukum Islam",
   "fakultas" => "Syariah dan Hukum",
   "asal" => "Boyolali"
  ],
  ["nama" => "Roger Sumatra",
   "nidn" => "41114",
   "jurusan" => "Psikologi",
   "fakultas" => "Psikologi dan Kesehatan",
   "asal" => "Palembang"
  ],
  ["nama" => "Budi Sumitro",
   "nidn" => "41115",
   "jurusan" => "Pendidikan Agama Islam",
   "fakultas" => "Tarbiyah dan Keguruan",
   "asal" => "Solo"
  ],
  ["nama" => "Tri Sutrisno",
   "nidn" => "41116",
   "jurusan" => "Ekonomi Islam",
   "fakultas" => "Ekonomi dan Bisnis Islam",
   "asal" => "Jogja"
   ]
];
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
      <h3><i class="fa-solid fa-chalkboard-user"></i>&nbsp;&nbsp;DAFTAR DOSEN</h3><hr>
      <table class="table table-striped table-hover">
      <p class="text-right"><a href="#" class="btn btn-info">Add Dosen</a></p>
   <tr>
        <th>#</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Fakultas</th>
        <th>Jurusan</th>
        <th>Asal</th>
        <th>Aksi</th>
   </tr>
   <?php $i=1 ?>
   <?php foreach ($dosen as $dsn):?>
    <tr>
      <td><?=$i?></td>
      <td><?= $dsn["nidn"];?></td>
      <td><?= $dsn["nama"];?></td>
      <td><?= $dsn["fakultas"];?></td>
      <td><?= $dsn["jurusan"];?></td>
      <td><?= $dsn["asal"];?></td>
      <td><button type="button" class="btn btn-secondary">Edit</button> | <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    <?php $i++?>
    <?php endforeach ;?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="admin.js"></script>
</body>
</html>