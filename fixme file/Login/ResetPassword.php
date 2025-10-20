<?php
require_once "../Registrater/connection.php";

if (!isset($_GET['email'])) {
    header("Location: ForgotPassword.php?err=Missing+email");
    exit();
}

$email = $_GET['email'];

$sql = "SELECT * FROM register WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (!mysqli_fetch_assoc($result)) {
    header("Location: ForgotPassword.php?err=Email+not+found");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <form action="passwordResetHandler.php" method="POST">
        <div class="image">
            <img src="../image/logo.png" alt="" width="100%" height="100%">
        </div>
        <div class="login">
            <h3>ADD New Password</h3>
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <label>New Password:</label>
            <input type="password" name="new_password" placeholder="New Password" required>
            <label>Confirm Password:</label>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit" style="width: 80%; margin-left: 10%;">Reset Password</button>
        </div>
    </form>
</body>
</html>
