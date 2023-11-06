<?php
//     require_once('db.php');
//     {

//     $name= $_REQUEST['name'];
//     $email= $_REQUEST['email'];
//     $username= $_REQUEST['username'];
//     $password= $_REQUEST['password'];
//     $user = mysqli_fetch_assoc($result);
        
//     if(count($user) > 0){
//         return true;
//     }else{
//         return false;
//     }
// }

//     function managerSignUp($user)
//     {
//         global $name;
//         global $email;
//         global $username;
//         global $password;

//         $con= getConnection();
//         $sql= "INSERT INTO anotherdb VALUES('$name','$email','$username', $password)";

//         $result= mysqli_query($con, $sql);

//         if($result)
//         {
//             return true;
//         }
//         else{
//             return false;
//         }
//      }



require_once('db.php');
//session_start();
// function checkUserExists($username) {
//     $con = getConnection();
//     $sql = "SELECT * FROM anotherdb WHERE username = '$username'";
//     $result = mysqli_query($con, $sql);
//     $user = mysqli_fetch_assoc($result);
    
//     if ($user) {
//         return true;
//     } else {
//         return false;
//     }
// }

function signup($username, $name, $email, $password, $gender, $dob, $userType)
 {
    $con = getConnection();
    $sql = "INSERT INTO userinfo (username, name, email, password, gender, dob, userType) 
    VALUES ('$username', '$name', '$email','$password', '$gender', '$dob', '$userType')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        return true;
    } else {
        return false;
    }
}
function login($username, $password)
{
    $con = getConnection();
    $sql = "select * from userInfo where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $cnt= mysqli_num_rows($result);

    if($result){
        $user = mysqli_fetch_assoc($result);
        if ($user)
        {
            return true;
        }         
    }
    else{
        return false;
    }
}
?> 

