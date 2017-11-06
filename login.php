<?php
// error_reporting(0);
session_start();
include 'koneksi.php';

if (isset($_SESSION['user'])) {
	header('location:admin/index.php');
} 
else{
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		try {
			$sql = "SELECT * FROM login WHERE username='$username' AND password= '$password'";
			$stmt = $db->prepare($sql);
		// $stmt->bindParam(':username',$username);
		// $stmt->bindParam(':password',$password);
			$stmt->execute();

			$count = $stmt->rowCount();
			if ($count == 1) {
				$user = $stmt->fetchAll();
				$_SESSION['user'] = $user[0];
				
				if ($_SESSION['user']['hak_akses'] == "admin") {
					header('location:admin/index.php');
				}elseif($_SESSION['user']['hak_akses'] == "fotografer"){
					header('location:fotografer/index.php');
				}else{
					header('location:kurator/index.php');
				}
				return;
			}else{
				echo "Anda tidak dapat login";
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
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
		<h1>Sign In</h1>
		<form method="post">
			<div class="form-input">
				<input type="text" name="username" style="margin-top: 10px;margin-bottom: 10px;" placeholder="Enter Username">
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Enter Password" style="margin-bottom: 25px;">
			</div>
			<input type="submit" name="submit" value="Log in" class="btn-login">
			<p>Don't Have Account?<a href="register.php">Sign Up</a></p>
		</form>
	</div>
</body>
</html>