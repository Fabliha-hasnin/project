<?php
require_once('../model/operationmodel.php');
//print_r(getAllTaskInfo());
$projectTaskInfo = getAllTaskInfo();

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
        <tr> <th colspan="2"> <bold><h1> Collaborative task management </h1></bold> <a href="../controller/logout.php"> Logout </a></th></tr>
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
                        <!-- <li><a href="./currentWork.php">Current Work</a></li> -->
                        <li><a href="./manageTeam.php">Manage Team</a></li>
                        <li><a href="./viewprof.php">View Profile</a></li>
                        <li><a href="./editprof.php">Edit Profile</a></li>
                        <!-- <li><a href="./changeprofpic.php">Change Profile Photo</a></li> -->
                        <li><a href="./changepass.php">Change Password</a></li>
                    </ul>
                </td>
                <td width="70%">
                    <h3>All current tasks:</h3>
                     
                    <?php
                            for ($i = 0; $i < count($projectTaskInfo); $i++) { ?>
                            
                            Project Name: <?php echo $projectTaskInfo[$i]['project_name']; ?><br>
                            Project Type: <?php echo $projectTaskInfo[$i]['project_type']; ?><br>
                            Priority Task: <?php echo $projectTaskInfo[$i]['priority_task']; ?><br>
                            Deadline: <?php echo $projectTaskInfo[$i]['deadline']; ?><br> 
                        <?php }?>
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">Copyright &copy; 2017</td>
            </tr>
        </table>
    </form>
</body>
</html>
