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
    <title>About Us</title>
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
                <a href="./AboutUs.php" style="font-weight: bold; text-decoration: underline red;">About Us</a>
                <a href="./Contact.php">Contact</a>
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
    <div class="full_contener">
        <div class="header-image">
            <img src="../image/aboutus.jpg" alt="Header Image">
            <h1>ABOUT US</h1>
        </div>

        <div class="first_part">

            <div class="start_part">
                <h3>Anyone can learn anything.</h3>
                <p>We believe in nurturing curiosity, creativity, and confidence in each individual, equipping them with lifelong skills and knowledge.</p>
            </div>

            <div class="center_part">
                <div class="image_1">
                    <img src="../image/about line 1.jpg" alt="">
                </div>
                <div class="image_1">
                    <img src="../image/about line 2.jpg" alt="">
                </div>
                <div class="image_1">
                    <img src="../image/about line 3.jpg" alt="">
                </div>
                <div class="image_1">
                    <img src="../image/about line 4.jpg" alt="">
                </div>
            </div>

            <div class="end_part">
                <div class="header">
                    <h3>What is</h3>
                    <h1>Fixme Academy?</h1>
                    <img src="../image/about line 5.jpg" alt="">
                </div>
                <div class="body_part">
                    <p>Fixme Academy is a pioneering initiative committed to enhancing the learning experience for individuals across all walks of life. We believe that education should be personalized, accessible, and boundary-free, aligning with the diverse needs and aspirations of today's learners. Our focus on human capability development, through unique educational strategies, is central to our mission.</p>
                    <p>With a dedicated team of educators, developers, designers, and content specialists, Fixme Academy is driven to provide equitable access to world-class digital learning & teaching, and healthcare facilities. This integrative approach not only aids in eradicating poverty but also fosters individual growth and community progress.</p>
                    <p>Fixme Academy is not just about providing courses; it's about nurturing curiosity, building confidence, and empowering lives through learning. We aim to create an impact that goes beyond traditional education, investing in the overall development of human capability. Join us on this transformative journey, and discover an educational pathway curated just for you.</p>
                </div>
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