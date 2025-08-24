<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/department.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>Business_Analytics</title>
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
    <div class="soft">
        <div class="coverpic">
            <img src="../image/ba2.jpg" alt="">
            <h2>BACHELOR OF MANAGEMENT HONOURS IN BUSINESS ANALYTICS</h2>
        </div>
        <div class="sof1">
            <div class="head">
                <h3>What is </h3>
                <h1>Business Analytics?</h1>
                <img src="../image/ba1.jpg" alt="">
            </div>
            <div class="bod">
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;In a data-driven world, the Department of Decision Science at KIU offers a cutting-edge degree in Business Analytics. This program covers data analysis, predictive modeling, data visualization, and business intelligence tools. With a focus on real-time data applications, students learn to turn raw data into strategic insights. Supported by a visiting panel of academic and industry experts, the program ensures graduates are job-ready for roles such as data analyst, business consultant, systems architect, or market research analyst in a variety of industries.</p>
            </div>
        </div>
        <div class="sof2">
            <h3>Entry Requirements</h3>
            <ul>
                <li>Minimum of three (03) passes at GCE A/L (any stream)</li>
                <li>Minimum “C” pass for Mathematics at GCE O/L for Accounting</li>
                <li>Equivalent qualifications for international students</li>
            </ul>
        </div>
        <div class="footerpart">
            <div class="sof3">
                <div class="downlo">
                    <h3>COURSE CONTENT</h3>
                    <p>To view the course content, click the download button below and download the PDF.</p>
                </div>
                <a href="../Pdf/sGr12TG Dancing.pdf" target="_blank"><button>Download</button></a>
            </div>
            <div class="sof4">
                <div class="appl">
                    <h3>Apply Now</h3>
                    <p>To apply for the course, click the apply button below and fill out the form.</p>
                </div>
                <button><a href="../Pdf/Applycation.php">APPLY</a></button>
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