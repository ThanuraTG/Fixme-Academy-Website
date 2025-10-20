<?php
require_once "../Registrater/connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    if ($new_password !== $confirm_password) {
        header("Location: ResetPassword.php?email=".urlencode($email)."&err=Passwords+do+not+match");
        exit();
    }

    $hashed = password_hash($new_password, PASSWORD_DEFAULT);

    $sql = "UPDATE register SET password = ? WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $hashed, $email);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: Login.php?msg=Password+updated+successfully");
    } else {
        echo "<p>Error updating password.</p>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
