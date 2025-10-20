<?php
if (isset($_GET['err'])) {
    echo "<p style='color:red;'>".htmlspecialchars($_GET['err'])."</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../css/login.css"> -->
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <form action="ResetPassword.php" method="GET">
        <div class="image">
            <img src="../image/logo.png" alt="" width="100%" height="100%">
        </div>
        <div class="login">
            <h3>Forgot Password</h3>
            <label for="">Enter your email:</label>
            <input type="email" name="email" placeholder="Your Email" required>
            <button type="submit">Next</button>
        </div>
    </form>
</body>
</html>
