<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('location:../login.php');	
}

?>

<tr>
    <td><a href="fotografer/home.php">
        <button type="button">Data Fotografer</button>
        </a></td>
</tr>
<tr>
    <td>
        <a href="kurator/home.php">
            <button type="button">Data Kurator</button>
        </a>
    </td>
</tr>
<a href="../logout.php">Logout</a><br><br><br><br><br><br>
<?= "Anda adalah ".$_SESSION['user']['username'];?>
