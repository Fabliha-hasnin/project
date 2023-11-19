<?php
    
    require_once('../controller/sessioncheck.php'); 
    require_once('../model/usermodel.php');

    $user = getAllUser(); 
    $userSession = $_SESSION['user']['username']; 
    ?>
<html lang="en">
<head>
    <title>Document</title>
    <style>  
    td { vertical-align:top;}
    fieldset {
            width: 500px; 
            height: 500px; 
        }
   </style>
</head>
<body>
<table border = "1" align="center" width="70%" height="100%" >
    <tr>
        <th colspan="2"> <bold><h1> Collaborative task management </h1></bold><pre><p> Logged in as <?php echo $_SESSION['user']['username']?> </p> | <a href="../controller/logout.php"> Logout </a></pre></th>

    </tr>
     <tr>
     <td width="30%">
         Accounts
         <hr></hr>
         <ul>
          <li> <a href="./managerDashboard.php"> Dasboard </a> </li>
          <li> <a href="./setTask.php"> Set task </a> </li>
          <li> <a href="./viewprojects.php"> View projects </a> </li>
          <!-- <li> <a href="./currentWork.php"> Current work </a> </li> -->
          <li> <a href="./manageTeam.php"> Manage team </a> </li>
          <li> <a href="./viewprof.php"> View profile </a> </li>
          <li> <a href="./editprof.php"> Edit profile </a> </li>
          <!-- <li> <a href="./changeprofpic.php"> Change profile photo </a> </li> -->
          <li> <a href="./changepass.php"> Change password </a> </li>
         </ul>
     </td>

    
     <td align ="center" width="70%" style="background-color: #F5F5F5;">
     <form method="POST" action="../controller/editprofcheck.php">
     <?php
            for ($i = 0; $i < count($user); $i++) {
                if ($user[$i]['username'] == $userSession) {
                    ?>
                    <br>
                    Name: <input type="text" name="name" value="<?= $user[$i]['name']; ?>"><hr>
                    Email: <input type="text" name="email" value="<?= $user[$i]['email']; ?>"><hr>
                    Gender: 
                    <input type="radio" name="gender" value="Male" <?= ($user[$i]['gender'] === 'Male') ? 'checked' : ''; ?>>Male
                    <input type="radio" name="gender" value="Female" <?= ($user[$i]['gender'] === 'Female') ? 'checked' : ''; ?>>Female
                    <input type="radio" name="gender" value="Other" <?= ($user[$i]['gender'] === 'Other') ? 'checked' : ''; ?>>Other
                    <hr>
                    Date of Birth: <input type="date" name="dob" value="<?= $user[$i]['dob']; ?>"><hr>
                    <input type="submit" value="Submit" />
            <?php
                }
            }
            ?>
            </form>
    </td> 
    </tr>
    <tr align="center">
        <td colspan="2"> Copyright c 2017 </td>
    </tr>
    </table>
</body>
</html>