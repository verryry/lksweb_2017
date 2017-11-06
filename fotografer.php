<?php 
include 'koneksi.php';
$stmt = $db->prepare('SELECT img.id, login.nama, img.img, img.description FROM img INNER JOIN login ON img.id_fotografer = login.id');
$stmt->execute();

if ($stmt->rowCount(0)) {
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row);
		?>
		<!-- <div>
			<p><?php echo $row['nama'];?></p>
			<img src="images/<?php echo $row['img'];?>">
		</div> -->
		<!DOCTYPE html>
		<html>
		<head>
			<title>Gallery Nature</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/classss" href="css/gallery.css">
		</head>
		<body> 
			<div class="responsive"> 
				<div class="gallery">
					<div class="name"><p>&#128247; : <?php echo $row['nama'];?></p></div>
					<a href="images/<?php echo $row['img'];?>" target="_blank">
						<img src="images/<?php echo $row['img'];?>" alt="1" style="width: 250px;height: 250px;margin-left: 15px;"/>
					</a>
					<p><?php echo substr($row['description'],0,100);?></p>
					<p><a href="details.php?p=<?php echo $row['id'];?>">Details</a></p>
				</div>
			</div>
			<!-- <div class="col-3">
				<h1>&#128247; : <?php echo $row['nama'];?></h1><br>
				<img src="images/<?php echo $row['img'];?>" alt="1"/ style="width: 250px;height: 250px;">
			</div>
			<div class="col-3">
				<h1>Description</h1>
				<hr><br>
				<p><?php echo $row['description'];?></p>
			</div> -->
		</body>
		</html>

		<?php 
	}
}	

?>