<?php require_once("includes/connection.php"); ?>

<?php
    $id = $_GET['id'];

    $insert_sql = "DELETE  FROM lab45.img_products  WHERE (`id_product` = '$id')";
    $insert_sql_2 ="DELETE FROM lab45.products  WHERE (`id_product` = '$id')";
 
    mysqli_query($mysqli, $insert_sql);
    mysqli_query($mysqli, $insert_sql_2);

    header('Location: ../php/catalog.php');   
?>