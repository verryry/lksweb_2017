<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/09/17
 * Time: 16:58
 */
include '../../koneksi.php';
$id = $_GET['id'];

if (!isset( $_GET['id'])){
    die("Error: ID tidak di temukan");
}
$query = $db->prepare("SELECT*FROM user_fotografer WHERE id = '$id'");
$query->execute();

if ($query->rowCount() == 0){
    die("Error : ID tidak Di temukan");
}else{
    $data = $query->fetchAll();
}

if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $query = $db->prepare("UPDATE user_fotografer SET `nama`=:nama,`email`=:email,`no_telp`=:no_telp,`alamat`=:alamat WHERE `id`=:id");
    $query->bindParam(":nama",$nama);
    $query->bindParam(":email",$email);
    $query->bindParam(":no_telp",$no_telp);
    $query->bindParam(":alamat",$alamat);
    $query->bindParam(":id",$_GET['id']);
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
<h1>Edit Data</h1>
<form method="post">
    <?php foreach($data as $key):?>
    Nama : <input type="text" name="nama" placeholder="Nama Fotografer" value="<?php echo $key['nama']?>" /><br>
    Email : <input type="text" name="email" placeholder="Email Fotografer" value="<?php echo $key['email']?>"/><br>
    No telp : <input type="text" name="no_telp" placeholder="No telp Fotografer" value="<?php echo $key['no_telp']?>"/><br>
    Alamat : <textarea name="alamat"><?php echo $key['alamat']?></textarea><br>
    <input type="submit" name="submit">
    <?php endforeach;?>
</form>
</body>
</html>
