<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Flower. ADMIN.</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../css/style_admin.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <div id = "header">
            <div class="logo"><a href="../index_main.php" class="logo" style="font-size: 300%; text-decoration:none"> Flower SHOP</a></div>		
            <div class="services">
                <ul>
                    <li ><a href="#">Statistics</a></li>
                    <li class="catalog"><a href="catalog.php" id="catalog">Catalog</a></li>
                    <li class="menu"><a href="#" id="menu">Menu</a></li>
                    <li class="settings"><a href="#" id="settings">Settings</a></li>
                    <li class="main"><a href="../index_main.php" id="main">Main menu</a></li>
                </ul>

                
        </div>

        <div class="container-1">
           
            <div class="welcome">
                <p>WELCOME to the system administration panel</p>
            </div>
        </div>      
        
        <div class="user">           
            <p class='logout'><a href="../admin/logout.php">Log out</a>  of the system</p>
        </div>

        <div id="message_box">
	        <div id="message"></div>
	    </div>
    </body>
</html>
