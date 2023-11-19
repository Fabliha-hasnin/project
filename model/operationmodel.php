<?php
require_once('db.php');

function displayAllProjectInfo() // Fetch all project information
{
    $con = getConnection();
    $sql = "SELECT am.projectName, am.projectType, am.projectDetails
    FROM adminproject AS am
    JOIN assignmanager AS p ON p.projectId = am.projectId
    WHERE p.username = 'Fabliha'";
    $result = mysqli_query($con, $sql);
    $projects = [];

    if ($result) {
        while ($row_data = mysqli_fetch_assoc($result)) {
            echo "Project Name: " . $row_data['projectName'] . "<br>";
            echo "Project Type: " . $row_data['projectType'] . "<br>";
            echo "Details     : " . $row_data['projectDetails'] . "<br><br>";
        }
        return $projects; // return the fetched projects
    } else {
        echo "Error: " . mysqli_error($con);
        return []; // return an empty array in case of an error
    }
}

function getProjectName() // Fetch project names for dropdown
{
    $con = getConnection();
    $sql = "SELECT am.projectName, am.projectType, am.projectDetails
    FROM adminproject AS am
    JOIN assignmanager AS p ON p.projectId = am.projectId
    WHERE p.username = 'Fabliha'";
    $result = mysqli_query($con, $sql);
    $projectNames = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $projectNames[] = $row['projectName'];
    }
    return $projectNames;
}

function getProjectType() { // Fetch project types for dropdown
    $con = getConnection();
    $sql = "SELECT am.projectName, am.projectType, am.projectDetails
    FROM adminproject AS am
    JOIN assignmanager AS p ON p.projectId = am.projectId
    WHERE p.username = 'Fabliha'";
    $result = mysqli_query($con, $sql);
    $projectTypes = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $projectTypes[] = $row['projectType'];
    }
    return $projectTypes;
}

function getAllTaskInfo() { // get deadline along with project name and type
    $con = getConnection();
    $sql = "SELECT * FROM setpriority ";
    $result = mysqli_query($con, $sql);
    $taskInfo = []; 

    if ($result) {
        while ($row_data = mysqli_fetch_assoc($result)) {

            array_push($taskInfo, $row_data);
        
        }
    return $taskInfo; 
    }else {
        echo "Error: " . mysqli_error($con);
        return []; 
    }
}


function insertTaskPriority($projectName, $projectType, $priorityTask, $deadline)
{
    $con = getConnection();
    $insert_query = "INSERT INTO setpriority (project_name, project_type, priority_task, deadline)
                    VALUES ('$projectName', '$projectType', '$priorityTask', '$deadline')";
    $result = mysqli_query($con, $insert_query);

    return $result;
}

function updateDeadline($projectName , $newdeadline )
{
    $con = getConnection();
    $sql = "UPDATE setpriority SET deadline = '$newdeadline' WHERE project_name = '$projectName'";
    $result = mysqli_query($con, $sql);
    if ($result)
        {
            return true;
        }
    else 
        {
            return false;
        }
    }
    function getDeveloperInfo(){
        $con = getConnection();
        $sql = "SELECT * FROM userinfo WHERE userType = 'Developer'";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        return $users;
    }

    function addMember($username, $role)
    {
        $con = getConnection();
        $insert_query = "INSERT INTO addmember (username, role ) VALUES ('$username', '$role')";
        $result = mysqli_query($con, $insert_query);
        if ($result)
        {
            return true;
        }
        else{
            return false;
        }
    }

    function getAllMemberAdded()
    {
        $con = getConnection();
        $sql = "SELECT * FROM addmember";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        return $users;
    }

    function removeMember($addMemberId)
    {
        $con = getConnection();
        $insert_query = "delete from addmember where addMemberId = '$addMemberId'";
        $result = mysqli_query($con, $insert_query);
        if ($result)
        {
            return true;
        }
        else{
            return false;
        }
    }

 ?>  

