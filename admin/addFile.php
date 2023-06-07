<?php

// директория для сохранения файла
define("UPLOAD_DIR", "../img_products/");
 
if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
 
    // проверяем на наличие ошибок при загрузке
    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error has occurred</p>";
        exit;
    }
 
    // обеспечиваем безопасное наименование файла
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
 
    // при совпадении имен файлов добавляем номер
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }
 
    // перемещаем файл в постоянное место хранения
    $success = move_uploaded_file($myFile["tmp_name"],
        UPLOAD_DIR . $name);
    if (!$success) {
        echo "<p>The file cannot be saved.</p>";
        exit;
    }
 
    // задаем права на новый файл
    chmod(UPLOAD_DIR . $name, 0644);

    // echo "<p>The file " . $name . " has been uploaded successfully!</p>";
    header("Location: intropage_add.php");
    
}


require_once("includes/connection.php");

$product_id = $_GET['id'];

   
$insert_path="INSERT INTO `img_products`(`path`, `id_product`) VALUES('$name', '$product_id')";
mysqli_query($mysqli, $insert_path);




?>