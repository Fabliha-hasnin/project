<?php
require_once('../model/usermodel.php');
session_start();

if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];
} else {
    $username = $password = "";
}

// Check if the form is submitted
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "" || $password == "") {
        echo "null username or password!";
    } elseif (isset($_POST['rememberMe'])) {
        setcookie('username', $username, time() + 200 , '/');
        setcookie('password', $password, time() + 200, '/');
    }

    $user = ['username' => $username];
    $status = login($username, $password);

    if ($status) {
        $_SESSION['user'] = $user;
        $_SESSION['flag'] = 'true';
        header('location: ../views/ManagerMenu.php');
    } else {
        echo "invalid user!";
    }

?>