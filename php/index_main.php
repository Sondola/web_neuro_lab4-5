<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/styles.css">
        <title>lab45</title>
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <section class = "container-1">
            <div class="container-1-left">
                <img src="image/pexels-cottonbro-4503751 1.png">
            </div>

            <div class="container-1-right"> 
                <nav class="menu">
                    <a class="search"><img src="image/search.svg" alt="" ></a>
                    <a href="#" class="basket"><img src="image/basket.svg" alt="" ></a>
                    <a href="./admin/register.php" class="button up">Sign Up</a>
                    <a href= "./php/login_user.php"class="button in" name="sign in">Sign in</a>
                </nav>

                <div class="tittle">
                    <h1 class="kembang">
                        Kembang <br> Flower Mantap
                    </h1>

                    <p class="kembang-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        Lorem Ipsum is simply dummy text of the printing and typesetting,
                    
                    </p>        
                </div>
            </div>
        </section>

        <div class="services">
            <div class ='services-box'>
                <div class='img-services-box'>
                        <img src="image/fast 1.png">
                        <div class='img-text'>
                            Fast <br>Delivery
                        </div>
                </div>
                <div class='content-services-box'>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                </div>
            </div>
            
            <div class ='services-box'>
                <div class='img-services-box'>
                        <img src="image/headphones.png">
                        <div class='img-text'>
                            Great Customer <br>Service
                        </div>
                </div>
                <div class='content-services-box'>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                </div>
            </div>

            <div class ='services-box'>
                <div class='img-services-box'>
                        <img src="image/plant 1.png">
                        <div class='img-text'>
                            Original <br>Plants
                        </div>
                </div>
                <div class='content-services-box'>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                </div>
            </div>

            <div class ='services-box'>
                <div class='img-services-box'>
                        <img src="image/dollar-symbol 1.png">
                        <div class='img-text'>
                            Affordable <br>Price
                        </div>
                </div>
                <div class='content-services-box'>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                </div>
            </div>

        </div>

        <div class='featured-plants'>
            <div class="heading-featured-plants">
                Featured Plants
            </div>
        </div>

        <?php require_once("admin/includes/connection.php"); ?>

        <div class='all-featured-plants' style='overflow-y: hidden'>
        <?php
                $query = 'SELECT img_products.id_product, img_products.path, products.name_product, products.price FROM img_products, products WHERE img_products.id_product=products.id_product';
                $products = mysqli_query($mysqli, $query);
                $products = mysqli_fetch_all($products);

            foreach($products as $product) {
        ?>
                    <div class='box-plant'>
                    
                        <img src='./img_products/<?= $product[1] ?>'>
                        <div class="name-plant"><?= $product[2] ?></div>
                        <div class="price">IDR <?= $product[3] ?></div>
                    </div>
        <?php
                }
        ?>

        </div>

        <div class='container-4'>
            <div class='left-container-4'>
                <h3>
                    Buy more plants, it helps you to be relaxed
                </h3>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                    gravida gravida aliquam. Pellentesque et lobortis nisl. Sed et
                    mauris justo. Nulla eu enim non mauris maximus dignissim.
                    Maecenas vitae eros sapien. Quisque pellentesque tempus
                    dignissim.
                </p>

                <img src="image/container4-left.jpg">
            </div>

            <div class="right-container-4">
                <img src="image/container4-right.jpg">
            </div>
        </div>

        <div class='container-5'>
            <div class="content-5-left">

                <div class='head-content-5'>
                    Get your favourites plant on our shop now</h3>
                </div>

                <button class="button-content-5">
                    Visit shop
                </button>

            </div>

            <div class='content-5-right'>
                <img src='image/photo5.png'>    
            </div>
        </div>

        <div class="footer">
            <div class="first-column">
                <div class="plantku">PLANTKU</div>

                <div class="plantku-house">Plantku House</div>

                <div class="plantku-adress">Jl. Laksda Adisucipto No.51, Demangan, Kec.<br>
                                            Depok, Kota Yogyakarta, Daerah Istimewa<br>Yogyakarta 55282</div>
            </div>

            <div class="second-column">
                <div class="head-footer">Perusahaan</div>
                
                <div class="content-footer">Tentang Kami</div>

                <div class="content-footer">Hubungi Kami</div>

            </div>

            <div class="third-column">
                <div class="head-footer">Produk</div>
                
                <div class="content-footer">Tanaman</div>
                
                <div class="content-footer">Tanaman Lain</div>

            </div>

            <div class="fourth-column">
                <div class="fourth-heading-footer">Berlangganan Email Kami</div>

                <div class="for-email">
                    <input maxlength="70" value="Masukan Alamat Email" >
                </div>

                <button class="submit-button">Submit</button>
                <form action="admin/login.php">
                    <button type="submit" class="submit-button">Sign in for admin</button>
                </form>

            </div>
        </div>
    </body>
</html> 