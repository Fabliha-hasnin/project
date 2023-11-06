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
    <form method="POST" action="">
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
                    <div>
                        <h2>Set Task Priority</h2>
                    </div>
                    <h3>All current tasks:</h3>
                   

                   <!-- to show the data's from assignmanager table -->
                   <?php
                   $con = getConnection();
                    $sql = "SELECT am.projectName, am.projectType, am.projectDetails
                                   FROM adminproject AS am
                                   JOIN assignmanager AS p ON p.projectId = am.projectId
                                   WHERE p.username = 'fabliha'";
                    $result= mysqli_query($con, $sql);

                    if ($result) {
                        while ($row_data = mysqli_fetch_assoc($result)) {
                            echo "Project Name: " . $row_data['projectName'] . "<br>";
                            echo "Project Type: " . $row_data['projectType'] . "<br>";
                            echo "Details     : " . $row_data['projectDetails'] . "<br><br>";
                        }
                    } else {
                        echo "Error: " . mysqli_error($con);
                    }
                    ?>

                        
                        <select name="project_name" id="">   
                        <option value="">Select Project Name</option>
                           
                           <?php
                           $con = getConnection();
                           $result = mysqli_query($con, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                $project_name = $row['projectName'];
                                echo "<option value='$project_name'>$project_name</option>";}
                            ?>   
                        </select>


                        <select name="project_type" id="">                          
                        <option value="">Select Project Type</option>
                            
                            <?php
                            $con = getConnection();
                            $result = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $project_type = $row['projectType'];
                                echo "<option value='$project_type'>$project_type</option>";}
                            ?>

                        </select>

                            


                        <b>Set Priority:</b> <input type="text" name="priority_task" value="" /><br><br>
                        <b>Set Deadline:</b> <input type="date" name="deadline" value="" /><br><br>
                        <input type="reset" name="" value="Reset" /> <input type="submit" name="insert_project" value="Submit" />

                        <?php
                        $con = getConnection();
                        if (isset($_POST['insert_project'])) {
                        $project_name = $_POST['project_name'];
                        $project_type = $_POST['project_type'];
                        $priority_task = $_POST['priority_task'];
                        $deadline = $_POST['deadline'];
                    
                        $insert_query = "INSERT INTO setpriority (project_name, project_type, priority_task, deadline) 
                                        VALUES ('$project_name', '$project_type', '$priority_task', '$deadline')";
                        
                        $result = mysqli_query($con, $insert_query);
                    
                        if ($result) {
                            echo "Task priority and deadline inserted successfully";
                        } else {
                            echo "Error: " . mysqli_error($con);
                        }
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
