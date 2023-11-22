<?php
     include('../controller/setTaskPrioritycheck.php');
     //$userSession = $_SESSION['user']['username'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Collaborative Task Management</title>
    <script src="../event(js)/setprioritycheck.js"></script>
    <style>
        td { vertical-align: top; }
    </style>
</head>
<body>
        <table border="1" align="center" width="70%" height="100%">
        <tr> <th colspan="2"> <bold><h1> Collaborative task management </h1></bold> <a href="../controller/logout.php"> Logout </a></th></tr>

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
          <!-- <li> <a href="./currentWork.php"> Current work </a> </li> -->
          <li> <a href="./manageTeam.php"> Manage team </a> </li>
          <li> <a href="./viewprof.php"> View profile </a> </li>
          <li> <a href="./editprof.php"> Edit profile </a> </li>
          <!-- <li> <a href="./changeprofpic.php"> Change profile photo </a> </li> -->
          <li> <a href="./changepass.php"> Change password </a> </li>
                </td>

                <form method="POST" action="../controller/setTaskPrioritycheck.php" onsubmit="return getpriority()" >
                <td width="70%">
                    <div>
                        <h2>Set Task Priority</h2>
                    </div>
                    <h3>All current tasks:</h3>

                    <?php  $projects = displayAllProjectInfo(); ?>
                    <?php  $projectNames = getProjectName();
                           $projectTypes = getProjectType();
                        ?> <hr>

                    <select name="project_name" id="project_name">
                        <option value="">Select Project Name</option>
                        <?php foreach ($projectNames as $projectName) : ?>
                            <option value="<?= $projectName ?>"><?= $projectName ?></option>
                        <?php endforeach; ?>
                    </select>

                    <select name="project_type" id="project_type">
                    <option value="">Select Project Type</option>
                    <?php foreach ($projectTypes as $projectType) : ?>
                        <option value="<?= $projectType ?>"><?= $projectType ?></option>
                        <?php endforeach; ?>
                    </select>

                    <b>Set Priority:</b> <input type="text" name="priority_task" id="priority_task"  /><br><br>
                    <b>Set Deadline:</b> <input type="date" name="deadline" id="deadline"  /><br><br>
                    <input type="reset" name="" value="Reset" /> <input type="submit" name="insert_project" value="Submit" onclick="getpriority()" /><br><br>
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">Copyright c 2023</td>
            </tr>
        </table>
    </form>
</body>
</html>
