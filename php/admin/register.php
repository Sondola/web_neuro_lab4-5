<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

<?php
	
	if(isset($_POST["register"])){
	
        if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
            
            $full_name= $_POST['full_name'];
            $email=$_POST['email'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $admin=0;
            $query=mysqli_query($mysqli, "SELECT * FROM users WHERE username='".$username."'");
            $numrows=mysqli_num_rows($query);
            
            if($numrows==0){
                $sql="INSERT INTO users
                                    (full_name, email, username, password, admin)
                                        VALUES('$full_name','$email', '$username', '$password', '$admin')";
                $result=mysqli_query($mysqli, $sql);
                
                if($result){
                    $message = "Account successfully created!";
                } else {
                    $message = "Data entry error!";
                }
            
            } else {
                $message = "This username already exists! Please try again!";
            }
        } else {
            $message = "All fields are required!";
        }

	}
?>

<?php if (!empty($message)) {echo "<p class= error>" . "MESSAGE: ". $message . "</p>";} ?>


<div class="container mregister">
<div id="login">
    <h1>Registration</h1>
    <form action="register.php" id="registerform" method="post"name="registerform">
        <p><label for="user_login">Full name<br>
            <input class="input" id="full_name" name="full_name"size="32"  type="text" value=""></label></p>
        
        <p><label for="user_pass">E-mail<br>
            <input class="input" id="email" name="email" size="32"type="email" value=""></label></p>

        <p><label for="user_pass">Username<br>
            <input class="input" id="username" name="username"size="20" type="text" value=""></label></p>

        <p><label for="user_pass">Password<br>
            <input class="input" id="password" name="password"size="32"   type="password" value=""></label></p>

        <p class="submit"><input class="button" id="register" name= "register" type="submit" value="Go!"></p>
	    <p class="regtext">Already registered? <a href= "../php/login_user.php">Enter the username</a>!</p>
        
    </form>
</div>
</div>

</body>
</html>

<?php include("includes/footer.php"); ?>