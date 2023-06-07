<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

<?php
	session_start();
?>

<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>	 

<?php

	if(isset($_POST["login"])){
        if(!empty($_POST['username']) && !empty($_POST['password'])) {
            $username=$_POST['username'];
            $password=$_POST['password'];

            $query =mysqli_query($mysqli, "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' AND admin = 1 ");
            $numrows=mysqli_num_rows($query);

            if($numrows!=0){
                while($row=mysqli_fetch_assoc($query)){
                    $dbusername=$row['username'];
                    $dbpassword=$row['password'];
                }

                if($username == $dbusername && $password == $dbpassword){
                    $_SESSION['session_username']=$username;	
                    header("Location: ../php/index.php");
                }
            } else {            
                echo  "Invaild username or password!";
            }
        } else {
            $message = "All fields are required!";
        }
	}
?>

<div class="container mlogin">
<div id="login">
<h1>Log in for ADMIN</h1>
<form action="" id="loginform" method="post"name="loginform">
<p><label for="user_login">Username<br>
<input class="input" id="username" name="username"size="20"
type="text" value=""></label></p>
<p><label for="user_pass">Password<br>
 <input class="input" id="password" name="password"size="20"
  type="password" value=""></label></p> 
	<p class="submit"><input class="button" name="login" type= "submit" value="Sign In"></p>
   </form>
 </div>
  </div>
</body>
</html>

<?php include("includes/footer.php"); ?>