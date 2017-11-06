<?php
error_reporting(0);
include 'koneksi.php';

$username = $_POST['username'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$conpass = $_POST['confirmpassword'];

if (isset($username,$nama,$password,$conpass)) {
	if ($password == $conpass) {
		try {
			$sql = "SELECT*FROM login WHERE username='$username'";
			$stmt = $db->prepare($sql);
			$stmt->execute();
		} catch (Exception $e) {
			echo $e->getMessage();
		}

		$count = $stmt->rowCount();
		if ($count == 0) {
			try {
				$sql = "INSERT INTO login SET username='$username', nama='$nama',password= '$password', hak_akses= 'fotografer'";
				$stmt = $db->prepare($sql);
				$stmt->execute();
			} catch (Exception $e) {
				echo $e->getMessage();
			}
			if ($stmt) {
				echo "Berhasil Register";
				header('location:login.php');
			}
		}else{
			echo "Username sudah di gunakan";
		}
	}else{
		echo "Password tidak sama";
	}
}else{

}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="container-login">
		<h1>Sign Up</h1>
		<form method="post">
			<div class="form-input">
				<input type="text" name="username" style="margin-top: 10px;margin-bottom: 10px;" placeholder="Enter Username">
			</div>
			<div class="form-input">
				<input type="text" name="nama" style="margin-bottom: 10px;" placeholder="Enter Name">
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Enter Password" style="margin-bottom: 10px;">
			</div>
			<div class="form-input">
				<input type="password" name="confirmpassword" placeholder="Confirm Password" style="margin-bottom: 30px;">
			</div>
			<input type="submit" name="submit" value="Sign Up" class="btn-login">
			<p>Have Account?<a href="login.php">Sign In</a></p>
		</form>
	</div>
</body>
</html>