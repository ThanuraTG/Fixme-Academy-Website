<?php
session_start();
require_once "../Registrater/connection.php"; // DB connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_SESSION["user_email"] ?? '';
    $titel = $_POST["titel"] ?? '';
    $name_initials = $_POST["name_initials"] ?? '';
    $full_name = $_POST["full_name"] ?? '';
    $dob = $_POST["dob"] ?? '';
    $nic_passport = $_POST["nic_passport"] ?? '';
    $mobile = $_POST["mobile"] ?? '';
    $country = $_POST["country"] ?? '';
    $email_address = $_POST["email_address"] ?? '';
    $degree = $_POST["degree"] ?? '';
    $batch = $_POST["batch"] ?? '';
    $al_result = $_POST["al_result"] ?? '';
    $payment_plan = $_POST["payment_plan"] ?? '';

    // SQL INSERT
    $sql = "INSERT INTO applications 
        (user_email, titel, name_initials, full_name, dob, nic_passport, mobile, country, email_address, degree, batch, al_result, payment_plan)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssssssssss", 
        $email, $titel, $name_initials, $full_name, $dob, $nic_passport,
        $mobile, $country, $email_address, $degree, $batch, $al_result, $payment_plan
    );

    if (mysqli_stmt_execute($stmt)) {
        echo "✅ Application Submitted Successfully!";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
