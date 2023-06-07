<?php
    require_once("includes/connection.php");
    $product_id = $_GET['id'];
    $product = mysqli_query($mysqli, "SELECT products.id_product, name_product, description, price, products.created_at, products.updated_at 
                                        FROM lab45.products LEFT JOIN img_products ON img_products.id_product=products.id_product
                                            WHERE products.id_product='$product_id'");
    $product = mysqli_fetch_assoc($product);
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>lab45 upd</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../css/style_add.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="container add_new_el">
        <div id="new_form">
            <table ...>
            <h1>Update product</h1> 
            <form action="update_el.php" id="new_el_form" method="post" name="new_el_form">
                <input type="hidden" name="id" value="<?= $product['id_product']?>">
                <p>Name</p>
                <input type="text" name="title" value="<?= $product['name_product']?>">

                <p>Description</p>
                <textarea name="description"> <?= $product['description']?></textarea>

                <p>Price</p>
                <input type="number" name="price" value="<?= $product['price']?>"><br><br>

                <input type="submit" value="Change" class="button">
            </form>
        </div>
    </div>
</body>

</html>

