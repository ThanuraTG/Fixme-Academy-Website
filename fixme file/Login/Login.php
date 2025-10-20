<?php
    require_once "../Registrater/connection.php";
    session_start();
    if(isset($_SESSION["user_email"])){
        header("location: ../Home/Home.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixme Academy_login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <form action="./logconb.php" method="POST" >
        <div class="image">
            <img src="../image/logo.png" alt="" width="100%" height="100%">
        </div>
        <div class="login">
            <h3>Sign in to Web Page</h3>
            <?php if (isset($_GET['err'])) {
                echo "<p class= 'para'>" . htmlspecialchars($_GET['err']) . "</p>";} 
            ?>
            <label for="">Email :</label>
            <input type="text" name="email" placeholder="Email" require><br>
            <label for="">Password :</label>
            <input type="password" name="password" placeholder="Password" require><br>
            <a href="../Login/ForgotPassword.php">Forgot Your Password?</a><br>
            <button name="signin">Sign in</button>
            <p>Don't you have an account? <a href="../Registrater/Register.php">Create New Account</a></p>
        </div>
    </form>
    <!-- <script>
            function isvalid(){
                var user = document.form.user.value;
                var password = document.form.pass.value;
                if(user.length=="" && password.length==""){
                    alert("Username and password field is empty !!");
                    return false
                }
                else {
                    if(user.length==""){
                        alert("Username is empty !!");
                        return false
                    }
                    if(password.length==""){
                        alert("Password is empty !!");
                        return false
                    }
                }
            }
        </script> -->
</body>
</html>

