<?php 
session_start();
include '../koneksi.php';
if(isset($_POST['submit']))
{
	$desc = $_POST['description'];
	$imageName = $_FILES["image"]["name"];
	$imageData = $_FILES["image"]["tmp_name"];

	$dir = "../images/";
	$dbQuery = $db->prepare("INSERT INTO img ( id_fotografer, img, description ) VALUES ('".$_SESSION['user']['id']."', '$dir$imageName','$desc')");
	$dbQuery->execute();
	$upload = move_uploaded_file($imageData,$dir.$imageName);
	if ($upload) {
		echo "sukses";
		// echo "<img src='../images/".$imageName."'>";
	}else{
		echo "gagal";
	}    
}
?>
<form action="" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Foto</td>
			<td><input type="file" name="image"></td>
		</tr>
		<tr>
			<td>Description</td>
			<td>
				<textarea name="description"></textarea>
			</td>
		</tr>
		<tr>
			<td><button  name="submit" type="submit">Upload</button></td>
		</tr>
	</table>
	<a href="logout.php">Logout</a>
</form>