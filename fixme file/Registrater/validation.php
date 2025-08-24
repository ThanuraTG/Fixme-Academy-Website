<?php
//function to validation inpiut
//input are empty
    function inputsEmptyRegister($name,$nic,$gender,$address,$phone,$email,$course,$password,$re_password){
        $value;
        if(empty($name) || empty($nic) || empty($gender) || empty($address) || empty($phone) || empty($email) || empty($course) || empty($password) || empty($re_password)){
            $value =true;
        }
        else{
            $value =false;
        }
        return $value;
    }

//input login page empty
    function inputsEmptyLogin($email, $password){
        $value;
        if(empty($email) || empty($password)){
            $value =true;
        }
        else{
            $value =false;
        }
        return $value;
    }
//input are name invalid
    function nameInvalid($name){
        $value;
        if(!preg_match("/^[a-zA-Z ]+$/",$name)){
            $value =true;
        }
        else{
            $value =false;
        }
        return $value;
    }
//input are nic invalid
    function nicInvalid($nic){
        $value;
        if(!preg_match("/^[\d]+$/",$nic)){
            $value =true;
        }
        else{
            $value =false;
        }
        return $value;
    }
//input are address invalid
    function addressInvalid($address){
        $value;
        if(!preg_match("/^[a-zA-Z \d\._-]+$/",$address)){
            $value =true;
        }
        else{
            $value =false;
        }
        return $value;
    }
//input are email invalid
    function emailInvalid($email){
        $value;
        if(!preg_match("/^[a-zA-Z\d\._-]+@[a-zA-Z\d_-]+\.[a-zA-Z\d\.]{2,}+$/",$email)){
            $value =true;
        }
        else{
            $value =false;
        }
        return $value;
    }
//input are phone invalid
    function phoneInvalid($phone){
        $value;
        if(!preg_match("/^[0][\d]{9}+$/",$phone)){
            $value =true;
        }
        else{
            $value =false;
        }
        return $value;
    }
//input are password invalid
    function passwordInvalid($password){
        $value;
        if(!preg_match("/^.{6,}+$/",$password)){
            $value =true;
        }
        else{
            $value =false;
        }
        return $value;
    }
//input are re_password invalid
    function passwordNotMatch($password,$re_password){
        $value;
        if($password !== $re_password){
            $value =true;
        }
        else{
            $value =false;
        }
        return $value;
    }
//input are moblie nic and email availabel
    function emailOrMobileOrNicAvailable($conn,$email,$nic,$phone){
        $value;
        $sqlll = "SELECT * FROM `register` WHERE email = ? OR phone_no = ? OR nic_number = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sqlll)){
            header("location:./register.php?err=failedstmt");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"sss", $email, $phone, $nic);
            mysqli_stmt_execute($stmt);
            $data = mysqli_stmt_get_result($stmt);
            if(!mysqli_fetch_assoc($data)){
                $value = false;
            }
            else{
                $value = true;
            }
        }
        mysqli_stmt_close($stmt);
        return $value;
    }
?>