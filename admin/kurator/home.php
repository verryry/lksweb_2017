<?php
include '../../koneksi.php';

$query = $db->prepare("SELECT*FROM user_kurator");
$query->execute();
$data = $query->fetchAll();
?>

<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
<h1>Daftar Kurator</h1>
<a href="TambahKurator.php">
    <button type="button">Daftar Kurator</button>
</a>
<div>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>No telp</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($data as $key):?>
            <tr>
                <td><?php echo $key['nama']?></td>
                <td><?php echo $key['email']?></td>
                <td><?php echo $key['no_telp']?></td>
                <td><?php echo $key['alamat']?></td>
                <td><a href="EditKurator.php?id=<?php echo $key['id']?>">Edit</a></td>
                <td><a href="DeleteKurator.php?id=<?php echo $key['id']?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>