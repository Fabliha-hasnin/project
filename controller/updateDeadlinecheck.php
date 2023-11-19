<?php
session_start();
require_once('../model/operationmodel.php');

if (isset($_POST['project_name'], $_POST['deadline'])) {
    $projectName = $_POST['project_name'];
    $newDeadline = $_POST['deadline'];

    $updatedeadline = updateDeadline($projectName, $newDeadline);

    if ($updatedeadline) {
        
        header('Location:../views/updateTaskDeadline.php');

    } else {
        echo "Update unsuccessful";
    }
}
?>
