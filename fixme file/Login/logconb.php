<?php
// Enable full error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start session
session_start();

// Log login attempt
file_put_contents('debug.log', "\n\n".date('Y-m-d H:i:s')." - Login attempt started\n", FILE_APPEND);

require_once "../Registrater/connection.php";
require_once "../Registrater/validation.php";

if (isset($_POST["signin"])) {
    // Log received data
    file_put_contents('debug.log', "Login POST data: ".print_r($_POST, true)."\n", FILE_APPEND);

    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validation checks with logging
    $validationErrors = [];
    if (inputsEmptyLogin($email, $password)) {
        $validationErrors[] = "Empty Inputs";
    }
    if (emailInvalid($email)) {
        $validationErrors[] = "Invalid Email";
    }
    if (passwordInvalid($password)) {
        $validationErrors[] = "Invalid Password";
    }

    if (!empty($validationErrors)) {
        file_put_contents('debug.log', "Login validation errors: ".implode(", ", $validationErrors)."\n", FILE_APPEND);
        header("Location: ./Login.php?err=".urlencode(implode(", ", $validationErrors)));
        exit();
    }

    // Proceed with login
    loginUser($conn, $email, $password);
} else {
    file_put_contents('debug.log', "Login form not submitted properly\n", FILE_APPEND);
    header("Location: ./Login.php");
    exit();
}

function loginUser($conn, $email, $password) {
    file_put_contents('debug.log', "Attempting login for $email\n", FILE_APPEND);
    
    $sql = "SELECT * FROM register WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        file_put_contents('debug.log', "Database prepare failed: ".mysqli_error($conn)."\n", FILE_APPEND);
        header("Location: ./Login.php?err=Database+Error");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        file_put_contents('debug.log', "User found: ".print_r($row, true)."\n", FILE_APPEND);
        
        // Debug password verification
        file_put_contents('debug.log', "Input password: $password\n", FILE_APPEND);
        file_put_contents('debug.log', "Stored hash: ".$row['password']."\n", FILE_APPEND);
        file_put_contents('debug.log', "Verification result: ".(password_verify($password, $row['password']) ? 'true' : 'false')."\n", FILE_APPEND);

        if (password_verify($password, $row['password'])) {
            file_put_contents('debug.log', "Password verified successfully\n", FILE_APPEND);
            
            // Set session variables
            $_SESSION["user_email"] = $row["email"];
            $_SESSION["user_phoneNo"] = $row["phone_no"];
            $_SESSION["user_name"] = $row["full_name"];
            $_SESSION["user_nic_number"] = $row["nic_number"];
            $_SESSION["user_name"] = $row["full_name"];
            
            session_regenerate_id(true);
            
            file_put_contents('debug.log', "Login successful, redirecting to Home.php\n", FILE_APPEND);
            header("Location: ../Home/Home.php");
            exit();
        } else {
            file_put_contents('debug.log', "Password verification failed\n", FILE_APPEND);
            header("Location: ./Login.php?err=Login+Failed+Password");
            exit();
        }
    } else {
        file_put_contents('debug.log', "No user found with email $email\n", FILE_APPEND);
        header("Location: ./Login.php?err=Login+Failed+Email");
        exit();
    }

    mysqli_stmt_close($stmt);
}
?>