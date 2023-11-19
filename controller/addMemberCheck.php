<?php
    session_start();
    require_once('../model/operationmodel.php');

    $role =$_REQUEST['Role'];
    $username=$_REQUEST['username'];

    $result = addMember($username, $role);

    if ($result)
    {
        header('Location: ../views/addMember.php');
    }
    else{

        echo "adding member unsecessful";
    }

?>