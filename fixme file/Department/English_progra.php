<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/department.css">
    <title>English</title>
</head>
<body>
    <!-- navigration bar -->
    <nav>
        <div class="sidebar">
            <img src="../image/logo.png" alt="" width="100%" height="100%">
            <ul>
                <a href="../Home/Home.php">Home</a>
                <div class="dropdown">
                    <a href="../Home/Faculties.php" style="font-weight: bold; text-decoration: underline red;">Faculties</a>
                    <div class="dropdown-content">
                        <div class="has-sub">
                            <a href="../Department/Computer_progra.php">Computer Science</a>
                                <div class="sub-dropdown">
                                    <a href="../Degree/Cybersecurity.php">Cyber Security</a>
                                    <a href="../Degree/Software.php">Software </a>
                                    <a href="../Degree/Mis.php">MIS</a>
                                    <a href="../Degree/Data_Science.php">Data Science</a>
                                </div>
                        </div>
                        <div class="has-sub">
                            <a href="../Department/Helth_progra.php">Health Sciences</a>
                                <div class="sub-dropdown">
                                    <a href="../Degree/Acupunture.php">Acupuncture</a>
                                    <a href="../Degree/Bms.php">Biomedical Science</a>
                                </div>
                        </div>
                        <div class="has-sub">
                            <a href="../Department/Management_progra.php">Management</a>
                                <div class="sub-dropdown">
                                    <a href="../Degree/Human.php">Human Resource</a>
                                    <a href="../Degree/Accounting.php">Accounting</a>
                                    <a href="../Degree/Markrting.php">Marketing</a>
                                    <a href="../Degree/BA.php">Business Analytics</a>
                                </div>
                        </div>
                        <div class="has-sub">
                            <a href="../Department/English_progra.php">Languages</a>
                                <div class="sub-dropdown">
                                    <a href="../Degree/English.php">English</a>
                                </div>
                        </div>
                    </div>
                </div>
                <a href="../Home/AboutUs.php">About Us</a>
                <a href="../Home/Contact.php">Contact</a>
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
    <div class="dep">
        <div class="coverpic">
            <img src="../image/english head.jpg" alt="">
            <h2>DEPARTMENT OF EDUCATION AND LANGUAGES</h2>
        </div>
        <div class="programmes">
            <h3>DEPARTMENT</h3>
            <div class="degree1">
                <img src="../image/english.jpg" alt="">
                <h4>Department of English</h4>
                <p style="text-align: center;">English Language Programs – From Foundations to Fluency</p>
                <button><a href="../Degree/English.php">LEARN MORE</a></button>
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
                    <li><a href="../Home/Home.php">Home</a></li>
                    <li><a href="../Home/Faculties.php">Faculties</a></li>
                    <li><a href="../Home/AboutUs.php">About Us</a></li>
                    <li><a href="../Home/Contact.php">Contact</a></li></li>
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