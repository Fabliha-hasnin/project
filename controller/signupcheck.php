<?php
   // session_start();
    require_once('../model/usermodel.php');
    $username = $_REQUEST['username'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];
    $userType = $_REQUEST['userType'];

    if($username == '' || $name == '' || $email == '' || $password == ''|| $confirmPassword == ''|| $gender == '' || $dob == '' || $userType == ''){

        echo "null value! <br> please provide all the value";
    }
    else{
        $result=signup($username, $name, $email, $password, $gender, $dob, $userType);
        if($result){
        //$user = ['username' => $username, 'name' => $name,'email' => $email, 'password' => $password, 'confirmPassword' => $confirmPassword, 'gender' => $gender, 'dob' => $dob, 'userType' => $userType];
        //$_SESSION['user'] = $user;
        header('location: ../views/managerLogin.php');
        }
    }

?>