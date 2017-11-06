<?php
include '../../koneksi.php';

if(isset($_GET["id"])){
    $query = $db->prepare("DELETE FROM `user_fotografer` WHERE id=:id");
    $query->bindParam(":id", $_GET["id"]);
    $query->execute();
    header("location: home.php");
}
?>