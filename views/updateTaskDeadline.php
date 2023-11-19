<?php
require_once('../model/operationmodel.php');
//print_r(getAllTaskInfo());
$projectTaskInfo = getAllTaskInfo();

?>
<html lang="en">
<head>
    <title>Document</title>
    <style>  
    td { vertical-align:top;}
   </style>
</head>
<body>
<table border = "1" align="center" width="70%" height="100%">
    <tr> <th colspan="2"> <bold><h1> Collaborative task management </h1></bold> <a href="../controller/logout.php"> Logout </a></th></tr>
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
          <!-- <li> <a href="./currentWork.php"> Current work </a> </li> -->
          <li> <a href="./manageTeam.php"> Manage team </a> </li>
          <li> <a href="./viewprof.php"> View profile </a> </li>
          <li> <a href="./editprof.php"> Edit profile </a> </li>
          <!-- <li> <a href="./changeprofpic.php"> Change profile photo </a> </li> -->
          <li> <a href="./changepass.php"> Change password </a> </li>
         </ul>
     </td>

        <td width="70%">
           
        <form action="../controller/updateDeadlinecheck.php" method="POST" enctype="">
    <div>
        <center> <h2> Update Task Deadline </h2> </center> 
    </div>

   <h3> All current tasks : </h3>

                        <?php
                            for ($i = 0; $i < count($projectTaskInfo); $i++) { ?>
                            
                            Project Name: <?php echo $projectTaskInfo[$i]['project_name']; ?><br>
                            Project Type: <?php echo $projectTaskInfo[$i]['project_type']; ?><br>
                            Priority Task: <?php echo $projectTaskInfo[$i]['priority_task']; ?><br>
                            Deadline: <?php echo $projectTaskInfo[$i]['deadline']; ?><br> <hr>
                        <?php }?>
                        
                        <select name="project_name">
                            <option value="">Select Project Name</option>
                            <?php for ($i = 0; $i < count($projectTaskInfo); $i++) { ?>
                                <option value="<?php echo $projectTaskInfo[$i]['project_name']; ?>"><?php echo $projectTaskInfo[$i]['project_name']; ?></option>
                            <?php } ?>
                        </select>

                        <b>Set Deadline:</b> <input type="date" name="deadline" value="" /><br><br>
                        <input type="reset" name="" value="Reset" /> 
                        <input type="submit" name="submit" value="Update" />

                        </form>   
           </td>

    </tr>
    <tr align="center">
        <td colspan="2"> Copyright c 2017 </td>
    </tr>
    </table>
</body>
</html>
  

