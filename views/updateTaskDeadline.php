<?php
include('../model/db.php');
?>
<html lang="en">
<head>
    <title>Document</title>
    <style>  
    td { vertical-align:top;}
   </style>
</head>
<body>
    <table>
    <html lang="en">
<head>
    <title> Menu </title>
</head>
<body>
<table border = "1" align="center" width="70%" height="100%">
    <tr>
        <th colspan="2"> <bold><h1> Collaborative task management </h1></bold><pre><p> Logged in as </p> | <a href="logout.php"> Logout </a></pre></th>

    </tr>
     <tr>
     <td width="30%">
         Accounts
         <hr></hr>
         <ul>
          <li> <a href="./managerDashboard.php"> Dasboard </a> </li>
          <li> <a href="./setTask.php"> Set task </a> </li>
          <div>
            <ul>
                <li> <a href="./setTaskPriority.php"> Set task priority </a> </li>
                <li> <a href="./updateTaskDeadline.php"> Update task deadline </a> </li>
            </ul>
            </div>
          <li> <a href="./viewprojects.php"> View projects </a> </li>
          <li> <a href="./currentWork.php"> Current work </a> </li>
          <li> <a href="./manageTeam.php"> Manage team </a> </li>
          <li> <a href="./viewprof.php"> View profile </a> </li>
          <li> <a href="./editprof.php"> Edit profile </a> </li>
          <li> <a href="./changeprofpic.php"> Change profile photo </a> </li>
          <li> <a href="./changepass.php"> Change password </a> </li>
         </ul>
     </td>

        <td width="70%">
           
    <div>
        <center> <h2> Update Task Deadline </h2> </center> 
    </div>

    
   <h3> All current tasks : </h3>
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

                        
                           <option value="">Select Project Name</option>

                           <?php
                           $con = getConnection();
                            $sql = "SELECT am.projectName, am.projectType, am.projectDetails
                            FROM adminproject AS am
                            JOIN assignmanager AS p ON p.projectId = am.projectId
                            WHERE p.username = 'fabliha'";
                            $result = mysqli_query($con, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                $project_name = $row['projectName'];
                                echo "<option value='$project_name'>$project_name</option>";}
                            ?>
                            
                        </select>
                        
                        <b>Set Deadline:</b> <input type="date" name="newdeadline" value="" /><br><br>

                        <input type="reset" name="" value="reset" /> <input type="submit" name="" value="submit" /> 
   
                        <?php
                        if (isset($_POST['submit'])) {
                            $con = getConnection();
                            $project_name = $_POST['project_name'];
                            $newdeadline = $_POST['newdeadline'];

                            $sql = "UPDATE deadline SET deadline = '$newdeadline' WHERE project_name = '$project_name'";
                            $result = mysqli_query($con, $sql);

                            if ($result) {
                                echo "Deadline updated successfully";
                            } else {
                                echo "Error: " . mysqli_error($con);
                            }
                        }
                        ?>
           </td>

    </tr>
    <tr align="center">
        <td colspan="2"> Copyright c 2017 </td>
    </tr>
</body>
</html>
    </table>
</body>
</html>