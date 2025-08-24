<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/application.css">
    <title>Application_form</title>
</head>
<body>
<!-- navigration bar -->
    <nav>
        <div class="sidebar">
            <img src="../image/logo.png" alt="" width="100%" height="100%">
            <ul>
                <a href="../Home/Home.php">Home</a>
                <a href="../Home/Faculties.php" style="font-weight: bold; text-decoration: underline red;">Faculties</a>
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
    <div class="application">
        <form action="./apply_db.php" method="POST">
            <div class="head-part">
                <h1 style="color: red;">F</h1><h3>IXME</h3> <h1 style="color: red;">A</h1><h3>CADEMY</h3>
            </div>
            <div class="form-columns">
                <h1>ONLINE APPLY</h1>
                <div class="form-part">
                    <div class="form-column">
                        <label for="titel">Titel :</label>
                            <select name="titel" id="titel">
                                <option value="titel" selected>Select</option>
                                <option value="titel">Mr</option>
                                <option value="titel">Ms</option>
                                <option value="titel">Mrs</option>
                                <option value="titel">Miss</option>
                                <option value="titel">Rev Father</option>
                                <option value="titel">Rev Mother</option>
                                <option value="titel">Rev Brother</option>
                                <option value="titel">Rev Sister</option>
                            </select>
                        <label for="">Name with Intitials :</label>
                            <input type="text" name="name_initials" value="<?php if(isset($_SESSION["user_email"])){ echo $_SESSION["user_name"]; } ?>" placeholder="Name with Intitials">
                        <label for="">Full Name :</label>
                            <input type="text" name="full_name" value="<?php if(isset($_SESSION["user_email"])){ echo $_SESSION["user_name"]; } ?>" placeholder="Full Name">
                        <label for="">Date of Birth :</label>
                            <input type="date" name="dob" id="">
                        <label for="">NIC / Passport :</label>
                            <input type="text" name="nic_passport" value="" id="" placeholder="NIC">
                        <label for="">Mobile Number :</label>
                            <input type="tel" name="mobile" value="<?php if(isset($_SESSION["user_email"])){ echo $_SESSION["user_phoneNo"]; } ?>" id="" placeholder="Mobile Number">
                        </div>
                        <div class="form-column">
                        <label for="country">Country :</label>
                            <select name="country" id="country">
                                <option value="country" selected>Sri Lanka</option>
                                <option value="country">Indian</option>
                                <option value="country">American</option>
                                <option value="country">Japan</option>
                                <option value="country">Chine</option>
                                <option value="country">Pakistan</option>
                            </select>
                            <label for="">Email Address :</label>
                            <input type="email" name="email_address" value="<?php if(isset($_SESSION["user_email"])){ echo $_SESSION["user_email"]; } ?>" id="" placeholder="Email.Address">
                        <label for="">Degree :</label>
                            <select name="degree" id="course">
                                <option value="course" selected>-- Select --</option>
                                <option value="course">Software Engineering</option>
                                <option value="course">Cyber Security</option>
                                <option value="course">Management Information systems</option>
                                <option value="course">Data Scince</option>
                                <option value="course">Marketing</option>
                                <option value="course">Accounting</option>
                                <option value="course">Human Resource</option>
                                <option value="course">Business Analytics</option>
                                <option value="course">Bio Medical Scince</option>
                                <option value="course">Acupunture</option>
                                <option value="course">English Course</option>
                            </select>
                        <label for="">Batch :</label>
                            <select name="batch" id="batch">
                                <option value="" selected>Batch 01</option>
                            </select>
                        <label for="">A/L Results :</label>
                            <select name="al_result" id="al">
                                <option value="al">Completed</option>
                                <option value="al">Pending</option>
                            </select>
                        <label for="">Payment Plan :</label>
                            <select name="payment_plan" id="pay">
                                <option value="Pay">Full</option>
                                <option value="pay">Semester</option>
                                <option value="pay">Quarter</option>
                                <option value="pay">Monthly</option>
                            </select>
                    </div>
                </div>
                <div class="form-buttons">
                    <button name="Cancel"><a href="../Home/Faculties.php">Cancel</a></button>
                    <button name="Save"><a href="#">Save</a></button>
                </div>
            </div>
        </form>
    </div>

<!-- footer parth -->
    <!-- <footer>
        <img src="/image/logo.png" alt="" width="10%" height="10%">
        <div class="head">
            <div class="infor">
                <h3>Information</h3>
                <ul>
                    <li>Home</li>
                    <li>Faculties</li>
                    <li>About Us</li>
                    <li>Contact</li>
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
    </footer> -->

</body>
</html>