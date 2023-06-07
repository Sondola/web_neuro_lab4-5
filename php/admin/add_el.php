<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8">
        <title>lab45 add</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../css/style_add.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>

<body>
    <div class="container add_new_el">
        <div id="new_form">
            <table ...>
            <h1>Form for a new product</h1> 

            <form action="add_el.php" id="new_el_form" method="post" name="new_el_form">
                <p>Name</p>
                <input type="text" name="title">

                <p>Description</p>
                <textarea name="description"></textarea>

                <p>Price</p>
                <input type="number" name="price"><br><br>

                <!-- <form method="POST" enctype="multipart/form-data">
                            <input type="file" name="myimage">
                </form> -->

                <!-- <div class="upload_img">
                                <form id="upload-container" method="POST">
                                <img id="upload-image">
                                    <div>
                                        <input id="file-input" type="file" name="file_img" multiple>
                                        <label for="file-input">Select the file</label>
                                        <span>or draf it here</span>
                                    </div> 
                                    
                </div> -->

                <input type="submit" value="Save" id="save" name="save" class="button">

            </form>

        </div>
    </div>
</body>
</html>

<?php
require_once("includes/connection.php");


if(isset($_POST["save"])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $insert_sql = "INSERT INTO products (name_product, description, price) VALUES('$title', '$description', '$price')";
    mysqli_query($mysqli, $insert_sql);

    header('Location: ../php/catalog.php');
}

?>
