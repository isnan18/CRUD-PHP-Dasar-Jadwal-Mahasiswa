<?php
$conn = mysqli_connect("localhost","root","","test");
if (isset($_POST['submit-mhs'])){
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$jurusan = $_POST['jurusan'];
$asal = $_POST['asal'];
$ipk = $_POST['ipk'];
$gender = $_POST['gender'];
$status = $_POST['status'];

$query = "INSERT INTO webti VALUES ('','$nim','$nama','$email','$jurusan','$asal','$ipk','$gender','$password','$status')";
$message = (mysqli_query($conn,$query)) ? "data berhasil ditambahkan" : "data gagal ditambahkan".mysqli_error($conn);
}else if (isset($_GET['del'])){
    $id = $_GET['id'];

    $query = "DELETE FROM webti WHERE id=$id";
    $message = (mysqli_query($conn,$query)) ? "data berhasil didelete" : "data gagal didelete".mysqli_error($conn);
}else if(isset($_POST['submit-edt'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $jurusan = $_POST['jurusan'];
    $asal = $_POST['asal'];
    $ipk = $_POST['ipk'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    
    $query = "UPDATE webti SET nim= '$nim',nama= '$nama',email= '$email',jurusan= '$jurusan',asal= '$asal',ipk= '$ipk',gender= '$gender',password= '$password',status='$status' WHERE nim='$nim'";
    $message = (mysqli_query($conn,$query)) ? "data berhasil diupdate" : "data gagal diupdate".mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
        <div class="card-header">
            Informasi
        </div>
        <div class="card-body">
            <p><?= $message ?></p>
        </div>
        <div class="card-footer">
            <a href="mahasiswa.php" class="btn btn-primary">kembali ke data mahasiswa</a>
        </div>   
        </div>
    </div>
</body>
</html>