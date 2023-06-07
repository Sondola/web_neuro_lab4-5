<?php

define("UPLOAD_DIR", "../img_products/");
 
if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
 
    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error has occurred</p>";
        exit;
    }
 
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
 
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }
 
    $success = move_uploaded_file($myFile["tmp_name"],
        UPLOAD_DIR . $name);
    if (!$success) {
        echo "<p>The file cannot be saved.</p>";
        exit;
    }
 
    chmod(UPLOAD_DIR . $name, 0644);

    header("Location: intropage_add.php");
    
}


require_once("includes/connection.php");

$product_id = $_GET['id'];

   
$insert_path="INSERT INTO `img_products`(`path`, `id_product`) VALUES('$name', '$product_id')";
mysqli_query($mysqli, $insert_path);




?>