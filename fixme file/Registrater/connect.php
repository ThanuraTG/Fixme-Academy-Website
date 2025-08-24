<?php
// Add DB connection
require_once "./connection.php";
// Add validation
require_once "./validation.php";

// Start session
session_start();

// If the Register button is clicked
if (isset($_POST['Register'])) {
    // Get inputs
    $name = $_POST['name'];
    $nic = $_POST['nic'];
    $gender = $_POST['sex'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    // Validation checks
    if (inputsEmptyRegister($name, $nic, $gender, $address, $phone, $email, $course, $password, $re_password)) {
        header("location: ./Register.php?err=Empty Inputs");
        exit();
    } else if (nameInvalid($name)) {
        header("location: ./Register.php?err=Invalid Name");
        exit();
    } else if (nicInvalid($nic)) {
        header("location: ./Register.php?err=Invalid NIC Number");
        exit();
    } else if (addressInvalid($address)) {
        header("location: ./Register.php?err=Invalid Address");
        exit();
    } else if (phoneInvalid($phone)) {
        header("location: ./Register.php?err=Invalid Phone");
        exit();
    } else if (emailInvalid($email)) {
        header("location: ./Register.php?err=Invalid Email");
        exit();
    } else if (passwordInvalid($password)) {
        header("location: ./Register.php?err=Weak Password (Min 8 chars, 1 uppercase, 1 number)");
        exit();
    } else if (passwordNotMatch($password, $re_password)) {
        header("location: ./Register.php?err=Different Password");
        exit();
    } else if (emailOrMobileOrNicAvailable($conn, $email, $nic, $phone)) {
        header("location: ./Register.php?err=Email/Phone/NIC Already Exists");
        exit();
    }

    // No validation errors - Register the user
    registerNewUser($conn, $name, $nic, $gender, $address, $phone, $email, $course, $password);
} else {
    header("location: ./Register.php");
    exit();
}

// Function to register new user
function registerNewUser($conn, $name, $nic, $gender, $address, $phone, $email, $course, $password)
{
    // Hash the password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    if ($hashedPassword === false) {
        error_log("Password hashing failed for user: $email\n", 3, "error.log");
        header("location: ./Register.php?err=Password Hashing Failed");
        exit();
    }

    // Insert query
    $sql = "INSERT INTO `register`(`full_name`, `nic_number`, `gender`, `address`, `phone_no`, `email`, `course`, `password`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ./Register.php?err=Database Error");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssss", $name, $nic, $gender, $address, $phone, $email, $course, $hashedPassword);
    
    if (mysqli_stmt_execute($stmt)) {
        header("location: ../Login/Login.php?success=registered");
        exit();
    } else {
        header("location: ./Register.php?err=Registration Failed");
        exit();
    }

    mysqli_stmt_close($stmt);
}
?>
