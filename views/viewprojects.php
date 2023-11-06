<?php
include('../model/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Collaborative Task Management</title>
    <style>
        td { vertical-align: top; }
    </style>
</head>
<body>
    <form method="POST" action="../controller/viewprojectscheck.php">
        <table border="1" align="center" width="70%" height="100%">
            <tr>
                <th colspan="2">
                    <h1>Collaborative Task Management</h1>
                    <p>Logged in as <a href="logout.php">Logout</a></p>
                </th>
            </tr>
            <tr>
                <td width="30%">
                    <p>Accounts</p>
                    <hr>
                    <ul>
                        <li><a href="./managerDashboard.php">Dashboard</a></li>
                        <li><a href="./setTask.php">Set Task</a>
                            <ul>
                                <li><a href="./setTaskPriority.php">Set Task Priority</a></li>
                                <li><a href="./updateTaskDeadline.php">Update Task Deadline</a></li>
                            </ul>
                        </li>
                        <li><a href="./viewprojects.php">View Projects</a></li>
                        <li><a href="./currentWork.php">Current Work</a></li>
                        <li><a href="./manageTeam.php">Manage Team</a></li>
                        <li><a href="./viewprof.php">View Profile</a></li>
                        <li><a href="./editprof.php">Edit Profile</a></li>
                        <li><a href="./changeprofpic.php">Change Profile Photo</a></li>
                        <li><a href="./changepass.php">Change Password</a></li>
                    </ul>
                </td>
                <td width="70%">
                    <h3>All current tasks:</h3>
                   
                    <?php
                    $con = getConnection();
                    // $select_query = "SELECT am.projectName, am.projectType, am.projectDetails
                    //                FROM adminproject AS am
                    //                JOIN assignmanager AS p ON p.projectId = am.projectId
                    //                WHERE p.username = 'fabliha'";
                    $sql= "SELECT * FROM setpriority";
                    $result= mysqli_query($con, $sql);
                    if($result) {
                        while ($row_data = mysqli_fetch_assoc($result)) {
                            echo "Project Name: " . $row_data['project_name'] . "<br>";
                            echo "Project Type: " . $row_data['project_type'] . "<br>";
                            echo "Priority     : " . $row_data['priority_task'] . "<br>";
                            echo "Deadline " . $row_data['deadline'] . "<br><br>";
                        }
                    } else {
                        echo "Error: " . mysqli_error($con);
                    }
                    ?>
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">Copyright &copy; 2017</td>
            </tr>
        </table>
    </form>
</body>
</html>
