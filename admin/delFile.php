<?php
require_once("includes/connection.php");

$path = $_GET['path'];

$del_path= "DELETE FROM `lab45`.`img_products` WHERE (`path`='$path')";
mysqli_query($mysqli, $del_path);

$path_full = "../img_products/".$_GET['path'];

unlink($path_full);

header("Location: intropage_del.php");

?>