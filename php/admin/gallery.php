<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>lab45 gallery</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../css/style_gallery.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="input__wrapper">
        <form action="addFile.php?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data">
            <input type="file" name="myFile" id="input__file" class="input input__file" multiple>
            <label for="input__file" class="input__file-button">
                <span class="input__file-icon-wrapper"><img class="input__file-icon" src="../image/upload.png" alt="Выбрать файл" width="25"></span>
                <span class="input__file-button-text">select a file</span>
            </label>            
            <input type="submit" value="UPLOAD" class="upload">
        </form>
    </div>
    <?php
    require_once("includes/connection.php");
    $product_id = $_GET['id'];
    $select_path="SELECT path, id_product FROM `img_products` WHERE `id_product`= $product_id";

    $result= mysqli_query($mysqli, $select_path);
    $result = mysqli_fetch_all($result);


    foreach($result as $img): ?>
        <img src='../img_products/<?= $img[0] ?>' width='300px'>
        <a href="delFile.php?id=<?= $img[1]?>&path=<?= $img[0] ?>"><img src="../image/trash.png" width='30px'></a>
    <?php endforeach; ?>

    <script>
        let inputs = document.querySelectorAll('.input__file');
        Array.prototype.forEach.call(inputs, function (input) {
        let label = input.nextElementSibling,
            labelVal = label.querySelector('.input__file-button-text').innerText;
    
        input.addEventListener('change', function (e) {
            let countFiles = '';
            if (this.files && this.files.length >= 1)
            countFiles = this.files.length;
    
            if (countFiles)
            label.querySelector('.input__file-button-text').innerText = 'selected files: ' + countFiles;
            else
            label.querySelector('.input__file-button-text').innerText = labelVal;
        });
        });
    </script>

</body>
</html>