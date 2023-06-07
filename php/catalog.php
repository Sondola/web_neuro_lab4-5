<?php require_once("../admin/includes/connection.php"); ?><?php require_once("../admin/includes/connection.php"); ?>
<!DOCTYPE html>
<html>

    <head>
            <meta charset="utf-8">
            <title>lab45 catalog</title>
            <meta name="viewport" content="width=device-width">
            <link rel="stylesheet" href="../css/style_catalog.css">
            <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <form action="index.php">
                <input type="submit" value="ADMIN page" class="button_home">
        </form>

        <h1>PRODUCT CATALOG</h1>
        
        <table class="catalog_table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Price</th>
                <th>Created</th>
                <th>Last updated</th>
                <th></th>
                <th></th>

            </tr>
            
        </form>
    <?php
        $query = 'SELECT products.id_product, name_product, description, price, products.created_at, products.updated_at FROM lab45.products';
        $products = mysqli_query($mysqli, $query);
        $products = mysqli_fetch_all($products);

       foreach($products as $product) {
            ?>
                    <tr>
                        <td><?= $product[0] ?></td>
                        <td><?= $product[1] ?></td>
                        <td><?= $product[2] ?></td>
                        <td id="plus"><a href="../admin/gallery.php?id=<?= $product[0]?>">+</a></td>
                        <td>IDR <?= $product[3] ?></td>
                        <td><?= $product[4] ?></td>
                        <td><?= $product[5] ?></td>
                        <td><a href="../admin/update.php?id=<?= $product[0] ?>">Update</a></td>
                        <td><a style="color: red;" href="../admin/delete.php?id=<?= $product[0] ?>">Delete</a></td>
                    </tr>
            
                <?php
            }
        ?>
    
        </table>

        <br><form action="../admin/add_el.php">
                <input type="submit" value="ADD" class="button">
            </form>

        

    </body>

</html>