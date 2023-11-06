<?php
// require_once('../model/usermodel.php');
// session_start();

// $username = $_POST['username'];
// $password = $_POST['password'];

// if ($username == '' || $password == '') {
//     echo "null username or password!";
// } else if (isset($_SESSION['user']) && $username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']) {
//     $_SESSION['flag'] = true;

//     header('location: ../views/ManagerMenu.php');
//     }
//  else {
//     echo "invalid username or password";
// }

require_once('../model/userModel.php');

session_start();
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if($username == "" || $password == "" ){

    echo "null username or password!";

}else{
    $user = ['username'=>$username];
    $status = login($username, $password);
    
    if ($status){
        $_SESSION['user']=$user;
        $_SESSION['flag'] = 'true';
        header('location: ../views/ManagerMenu.php');
    }else{
        echo "invalid user!";
    }
}
?>