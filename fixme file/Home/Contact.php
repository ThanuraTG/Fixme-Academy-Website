<?php
    session_start();
    // If not logged in
    if(!isset($_SESSION["user_email"])){
        header("location: ../Login/Login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<!-- navigration bar -->
    <nav>
        <div class="sidebar">
            <img src="../image/logo.png" alt="" width="100%" height="100%">
            <ul>
                <a href="./Home.php">Home</a>
                <a href="./Faculties.php">Faculties</a>
                <a href="./AboutUs.php">About Us</a>
                <a href="./Contact.php" style="font-weight: bold; text-decoration: underline red;">Contact</a>
            </ul>
            <div class="search-container">
                <input type="search" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="profile-container">
                <img src="../image/logo.png" class="profile-pic" onclick="toggleDialog()" />
            </div>
        </div>
    </nav>

<!-- body part -->
    
    <div class="contact-page">
        <div class="header-image">
            <img src="../image/contact.jpg" alt="Header Image">
            <h1>CONTACT</h1> <!-- ON image -->
        </div>
        
        <div class="contact-content">
            <h3>Get in Touch With Us</h3>
            <p>Let’s connect! Whether you have questions, need assistance, we’re here to help. <br> Reach out to us, and we’ll get back to you shortly.</p>
            
            <div class="phoneno-container">
                <div class="phoneno">
                    <i class="fa-solid fa-phone"></i>
                    <h4>PHONE</h4>
                    <p>+94 112 34 5678</p>
                </div>
                <div class="phoneno">
                    <i class="fa-solid fa-envelope-open-text"></i>
                    <h4>EMAIL</h4>
                    <p>info@fixme.lk</p>
                </div>
                <div class="phoneno">
                    <i class="fa-solid fa-location-dot"></i>
                    <h4>ADDRESS</h4>
                    <p>No 361 Thalangama North,<br>Koswatta</p>
                </div>
            </div>
            
            <div class="map">
                <h2>See Our Location</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15245.2308724665!2d79.92372348627485!3d6.905919141180011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2574c57fb01dd%3A0xbf05b338e80f50c5!2sKoswatta%2C%20Sri%20Jayawardenepura%20Kotte!5e1!3m2!1sen!2slk!4v1752959428342!5m2!1sen!2slk" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

<!-- footer parth -->
    <footer>
        <div class="head">
            <div class="imagefooter">
                <img src="../image/logo.png" alt="" width="100%" height="100%">
            </div>
            <div class="infor">
                <h3>Information</h3>
                <ul>
                    <li><a href="./Home.php">Home</a></li>
                    <li><a href="./Faculties.php">Faculties</a></li>
                    <li><a href="./AboutUs.php">About Us</a></li>
                    <li><a href="./Contact.php">Contact</a></li></li>
                </ul>
            </div>
            <div class="follw">
                <h3>Follow Us On</h3>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-tiktok"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-square-twitter"></i>
            </div>
            <div class="cont">
                <h3>Contact Me</h3>
                <p>Fixme Academy <br>361,Thalangama North, <br>Koswatta. <br>+94 11 123 4567</p>
            </div>
        </div>
        <div class="foot">
            <p>&copy;2025. Fixme Academy Website Sri Lanka.</p>
        </div>
    </footer>
</body>
</html>