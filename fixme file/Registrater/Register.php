<?php
    include('connection.php');

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixme Academy_registration</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        /* Whole page layout */
        body {
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
            margin: 100px 150px;
        }

        /* Main form layout */
        .form1 {
            
            padding: 20px 30px;
            width: 800px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: rgb(0, 0, 0);
            border-radius: 5px;
            box-shadow: 3px 3px 3px 3px rgb(125, 121, 121);
            background-color: rgb(255, 255, 255);
            font-size: 20px;
            font-family: Times New Roman;
            padding: 20px;
        }

        /* Logo image div */
        .image1 {
            width: 500px;
            height: 250px;
            flex-direction: row;
            display: flex;
            justify-content: center;
            align-items: center;
            h1{
                font-size: 70px;
            }
            h3{
                font-size: 40px;
                margin-top: 25px;
            }
        }
        /* Sign up section layout */
        .signup {
            width: 95%;
            padding: 20px;
            box-sizing: border-box;
            border-top: 4px solid #fa2727;
            padding: 20px 20px;
            border-radius: 5px;
            box-shadow: 2px 2px 2px 2px rgb(125, 121, 121);
        }

        /* Form heading */
        .signup h1 {
            text-align: center;
            margin-bottom: 20px;
            display: inline-block;
        }

        /* Error paragraph */
        .para {
            color: rgb(255, 0, 0);
            border-radius: 5px;
            background-color: rgb(234, 255, 97);
            height: 30px;
            align-items: center;
            display: flex;
            justify-content: center;
            margin: 0px 0px 20px 0px;
            font-weight: 550;
        }

        /* Half labels layout (using grid) */
        .signup .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        /* Inputs and labels styling */
        .signup label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .signup input[type="text"],
        .signup input[type="email"],
        .signup input[type="tel"],
        .signup input[type="password"],
        .signup select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #000;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .signup input[type="radio"] {
            margin:15px 10px 0 15px;
            background-color: #007BFF;
            
        }


        /* Buttons */
        .but{
            text-align: end;
        }
        .signup button {
        
            background-color: #007BFF;
            width: 20%;
            text-align: center;
            border-radius: 5px;
            font-weight: 700;
            font-size: 18px;
            cursor: pointer;
            justify-content: center;
            padding: 8px;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 7px;
            font-family: Perpetua Titling MT;
            font-weight: 700;
        }

        .signup button[name="Cancel"] {
            background-color: #dc3545;
            a{
                text-align: center;
                color: #ffffff;
            }
        }

        .signup button:hover {
            background-color: #000000;
        }

        .signup a {
            font-size: 0.9em;
            color: #007bff;
            text-decoration: none;
            margin-left: 10px;
        }
        /* Footer link */
        .signup p {
            text-align: start;
            margin-top: 20px;
        }

        @media screen and (max-width:700px){
            .log{
                width: 60%;
                padding: 40px;
            }
        }

    </style>
</head>
<body>
    <form action="./connect.php" method="POST" class="form1">
        <div class="image1">
            <img src="../image/logo.png" alt="" width="250px" height="250px">
            <h1 style="color: red;">F</h1><h3>IXME</h3> <h1 style="color: red;">A</h1><h3>CADEMY</h3>
        </div>
        <div class="signup">
            <h1>New Account </h1>
            <?php if (isset($_GET['err'])) {
                echo "<p class= 'para'>" . htmlspecialchars($_GET['err']) . "</p>";} 
            ?>
            <div class="form-grid">
                <div>
                    <label for="">Full Name :</label>
                        <input type="text" name="name" placeholder="Name">
                    <label for="">NIC Number :</label>
                        <input type="text" name="nic" placeholder="NIC Number">
                    <label for="">Address :</label>
                        <input type="text" name="address" placeholder="Address">
                    <label for="">Gender :</label>
                        <input type="radio" placeholder="Gender" name="sex" value="Male">Male
                        <input type="radio" placeholder="Gender" name="sex" value="Female">Female
                        <input type="radio" placeholder="Gender" name="sex" value="Other">Other 
                </div>
                <div>
                    <label for="">Phone No :</label>
                        <input type="tel" name="phone" placeholder="Phone No">
                    <label for="">Email :</label>
                        <input type="email" name="email" placeholder="Email">
                    <label for="course">Course :</label>
                        <select name="course" id="course">
                            <option value="select" selected>-- Select --</option>
                            <option value="Software">Software Engineering</option>
                            <option value="Cyber Security">Cyber Security</option>
                            <option value="MIS">MIS</option>
                            <option value="data science">Data Science</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Management">Management</option>
                            <option value="Human Resource">Human Resource</option>
                            <option value="Business Analytic">Business Analytic</option>
                            <option value="Bio Medical">Bio Medical Science</option>
                            <option value="Acupunture">Acupunture</option>
                            <option value="English Course">English Course</option>
                        </select>
                    <label for="">Password :</label>
                        <input type="password" name="password" placeholder="Password">
                    <label for="">Comform Password :</label>
                        <input type="password" name="re_password" placeholder="Comform Password">
                </div>
            </div>
            <div class="but">
                <button name="Cancel"><a href="../Login/Login.php">Cancel</a></button>
                <button name="Register">Register</button>
            </div>

            <p>Alreeady have an account? <a href="../Login/Login.php">Sign In</a></p>
        </div>
    </form>
</body>
</html>