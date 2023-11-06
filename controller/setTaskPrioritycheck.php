<?php
include('../model/db.php');

if (isset($_POST['insert_project'])) {
    $project_name = $_POST['Project_name'];
    $project_type = $_POST['Project_type']; 
    $priority_task = $_POST['priority_task'];
    $insert_query = "INSERT INTO project (project_name, project_type, priority_task) VALUES ('$project_name', '$project_type', '$priority_task')"; // Added commas
    $result = mysqli_query($con, $insert_query);

    if ($result) {
        echo "Project entered successfully";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
