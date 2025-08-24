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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Account - <?php if(isset($_SESSION["user_email"])){ echo $_SESSION["user_name"]; } ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/page.css">
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .full_contener {
            /* width: 100%; */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* === video_part === */
        .video_part {
            position: relative;
            text-align: center;
            margin-bottom: 100px;
        }
        .video_part video {
            width: 100%;
            max-height: 660px;
            object-fit: cover;
            opacity: 1;
            left: 0%;
            top: 0;
            width: 100%;
        }
        .video_part p {
            position: absolute;
            top: 85%;
            padding: 0 25px;
            color: white;
            font-size: 1.3rem;
        }
        @media (max-aspect-ratio:32/18){
            video{
                width: auto;
                height: 100%;
            }
        }

        /* === center_part with repeated logos === */
        .center_part {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 50px;
        }
        .image_1 img {
            width: 120px;
            height: auto;
        }

        /* === end_part === */
        .end_part {
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 40px;
        }
        .header img {
            width: 300px;
            height: auto;
        }
        .body_part {
            flex: 1;
            margin-top: 40px;
        }
        .body_part p {
            margin-bottom: 100px;
            font-size: 35px;
            color: #000;
        }
        .body_part button {
            padding: 10px 20px;
            background-color: #c50101ff;
            color: #fff;
            border: none;
            border-radius: 5px;
            margin-top: 30px;
        }
        .body_part button a {
            color: white;
            text-decoration: none;
        }

        /* === aboutEx section === */
        .aboutEx {
            margin-bottom: 130px;
            text-align: center;
        }
        .aboutEx h3 {
            font-size: 2.5rem;
            color: #c50101ff;
            margin-bottom: 50px;
        }
        .year {
            display: inline-block;
            margin: 0 15px;
            text-align: center;
            width: 25%;
            background-color: rgba(196, 194, 194, 0.2);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.733);
            padding: 1.5rem;
            border-radius: 8px;
            transition: transform 0.3s;
            text-align: center;
            border-bottom: 3px solid #ff0404 ;

        }
        .year h1 {
            color: #005effff;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .year p {
            font-size: 1.1rem;
            font-weight: 600;
        }

        /* === faculfix section === */
        .faculfix {
            text-align: center;
            margin-bottom: 100px;
        }
        .faculfix h3 {
            margin-bottom: 25px;
            font-size: 2.5rem;
            color: #c50101ff;
        }
        .facul1 {
            display: inline-block;
            width: 220px;
            margin: 10px;
            padding: 10px 10px 15px 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .facul1 img {
            width: 100px;
            height: auto;
        }
        .facul1 h4 {
            margin: 10px 0;
        }
        .faculfix > button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #c50101ff;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .faculfix > button a {
            color: white;
            text-decoration: none;
        }

        /* === Responsive === */
        @media (max-width: 768px) {
            .end_part {
                flex-direction: column;
                align-items: center;
            }
            .facul1 {
                width: 90%;
            }
        }
    </style>

</head>
<body>
    
<!-- navigration part -->
    <nav>
        <div class="sidebar">
            <img src="../image/logo.png" alt="" width="100%" height="100%">
            <ul>
                <a href="./Home.php" style="font-weight: bold; text-decoration: underline red;">Home</a>
                <a href="./Faculties.php">Faculties</a>
                <a href="./AboutUs.php">About Us</a>
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
<!-- Profile -->
    <div class="full_contener">
        
        <div class="video_part">
            <video autoplay loop muted plays-inline class="back">
                <source src="../image/academic.mp4" type="video/mp4">
            </video>
            <p>Achieve Your Academic Goals at KIU: Join Sri Lanka’s leading university for higher education, where accredited degree programs, expert faculty, and a dynamic campus life prepare you for a successful future and global opportunities..</p>
        </div>
        <div class="center_part">
            <div class="image_1">
                <img src="../image/home line 1.jpg" alt="">
            </div>
            <div class="image_1">
                <img src="../image/home line 2.jpg" alt="">
            </div>
            <div class="image_1">
                <img src="../image/home line 3.jpg" alt="">
            </div>
            <div class="image_1">
                <img src="../image/home line 4.jpg" alt="">
            </div>
        </div>
        <div class="end_part">
            <div class="header">
                <img src="../image/home apply.jpg" alt="">
            </div>
            <div class="body_part">
                <p style="color: #000;">Apply now to join FixMe Academy—one of Sri Lanka’s leading private academy—and take the first step toward a successful, globally recognized career.</p>
                <button><a href="../Pdf/Applycation.php">Explore More</a></button>
            </div>
        </div>
        <div class="aboutEx">
            <h3>About Our Excellence</h3>
            <div class="year">
                <h1>2024</h1>
                <p>The Year FixMe Academy was founded</p>
            </div>
            <div class="year">
                <h1>7564+</h1>
                <p>Students Studying Right Now</p>
            </div>
            <div class="year">
                <h1>11</h1>
                <p>Fully Functional Degree</p>
            </div>
        </div>
        <div class="faculfix">
            <h3>FACULTIES AT FIXME ACADEMY</h3>
            <div class="facul1">
                <img src="../image/home computer.jpg" alt="">
                <h4>Faculty of Computer Science</h4>
                <button><a href="../Department/Computer_progra.php">View</a></button>
            </div>
            <div class="facul1">
                <img src="../image/home helth.jpg" alt="">
                <h4>Faculty of Health Sciences</h4>
                <button><a href="../Department/Helth_progra.php">View</a></button>
            </div>
            <div class="facul1">
                <img src="../image/home management.jpg" alt="">
                <h4>Faculty of Management</h4>
                <button><a href="../Department/Management_progra.php">View</a></button>
            </div>
            <div class="facul1">
                <img src="../image/home languge.jpg" alt="">
                <h4>Faculty of Education & Languages</h4>
                <button><a href="../Department/English_progra.php">View</a></button>
            </div>
            <button><a href="../Home/Faculties.php">Explore More</a></button>
        </div>
    </div>
    
    
<!-- Profile Dialog Box -->
    <div class="profile-dialog" id="profileDialog">
        <img src="../image/logo.png" class="dialog-pic" /><br>
        <label for="">Name</label><br>
        <input type="text" name="" id="" value="<?php if(isset($_SESSION["user_email"])){ echo $_SESSION["user_name"]; } ?>">
        <label for="">Email</label>
        <input type="text" name="" id="" value="<?php if(isset($_SESSION["user_email"])){ echo $_SESSION["user_email"]; } ?>">
        <button><a href="../Login/Logout.php">Logout</a></button>
    </div>

    <script>
        function toggleDialog() {
            const dialog = document.getElementById("profileDialog");
            dialog.style.display = dialog.style.display === "block" ? "none" : "block";
        }

        // Close when clicking outside
        window.onclick = function(event) {
            const dialog = document.getElementById("profileDialog");
            if (!event.target.closest('.profile-container') && !event.target.closest('#profileDialog')) {
            dialog.style.display = "none";
            }
        }
    </script>


<!-- footer part -->
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
                <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.tiktok.com/"><i class="fa-brands fa-tiktok"></i></a>
                <a href="https://web.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://x.com/"><i class="fa-brands fa-square-twitter"></i></a>
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