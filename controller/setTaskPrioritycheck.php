<?php
session_start();
require_once('../model/operationmodel.php');

// $projects = displayAllProjectInfo();
// $projectNames = getProjectName();
// $projectTypes = getProjectType(); // Fetch project types

if (isset($_POST['insert_project'])) {
    $projectName = $_POST['project_name'];
    $projectType = $_POST['project_type'];
    $priorityTask = $_POST['priority_task'];
    $deadline = $_POST['deadline'];

    $inserted = insertTaskPriority($projectName, $projectType, $priorityTask, $deadline);

    if ($inserted) {
        echo "Task priority and deadline inserted successfully";
    } else {
        echo "Error: Failed to insert task priority";
    }
}

?>

