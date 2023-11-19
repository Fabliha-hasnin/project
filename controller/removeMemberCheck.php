<?php
session_start();
require_once('../model/operationmodel.php');
$addMemberId =$_REQUEST['addMemberId'];

$result = removeMember($addMemberId);

    if ($result)
    {
        header('Location: ../views/addMember.php');
    }
    else{

        echo "Remove member unsecessful";
    }

?>

