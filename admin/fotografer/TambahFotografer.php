<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/09/17
 * Time: 15:42
 */
include '../../koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $query = $db->prepare("INSERT INTO `user_fotografer`(`nama`,`email`,`no_telp`,`alamat`) VALUES ('$nama', '$email', '$no_telp', '$alamat')");
    $query->execute();
    if ($query){
        header('location:home.php');

    }else{
        echo "error";
    }
}

?>

<html>
<head>
    <title>Tambah Fotografer</title>
</head>
<body>
<h1>Tambah Data</h1>
<form method="post">
    Nama : <input type="text" name="nama" placeholder="Nama Fotografer" /><br>
    Email : <input type="text" name="email" placeholder="Email Fotografer" /><br>
    No telp : <input type="text" name="no_telp" placeholder="No telp Fotografer" /><br>
    Alamat : <textarea name="alamat"></textarea><br>
    <input type="submit" name="submit">
</form>
</body>
</html>
