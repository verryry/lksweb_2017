<?php
include 'koneksi.php';
// $stmt = $db->prepare("SELECT img.id, login.nama, img.img, img.description FROM img INNER JOIN login ON img.id_fotografer = login.id");

$stmt = $db->prepare("SELECT * FROM img INNER JOIN login ON img.id_fotografer = login.id");
$stmt->execute();
// $data = $stmt->fetch(PDO::FETCH_ASSOC);
// print_r($data);
// return;

if ($stmt->rowCount(0)) {
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row);
		?>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<div class="col-3">
			<h1>&#128247; : <?php echo $row['nama'];?></h1><br>
			<img src="images/<?php echo $row['img'];?>" alt="1"/ style="width: 250px;height: 250px;">
		</div>
		<div class="col-3">
			<h1>Description</h1>
			<hr><br>
			<p><?php echo $row['description'];?></p>
		</div>
		<?php

	}
}
?>