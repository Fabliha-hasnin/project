<html lang="en">
<head>
    <title>Change password</title>
    <style>  
    td { vertical-align:top;}
   </style>
</head>
<body>
<table border = "1"  border = "1" align="center" width="50%" >
<tr> <th colspan="2"> <bold><h1> Collaborative task management </h1></bold> <a href="../controller/logout.php"> Logout </a></th></tr>
     <tr>
            <td> 
            <form action="../controller/changepasscheck.php" method="POST" enctype="">
                <fieldset>
            <legend> Change password </legend>
            
                                    Current password   : <input type="text" name="password" value="" /> <br> 
           <p style="color:green;"> New Password       :<input type="text" name="newPassword" value="" /> </p> 
           <p style="color:red;">   Retype New Password: <input type="text" name="retypePassword" value="" /> </p> 
            <hr></hr>
            <input type="submit" name="" value="submit" /> 
            <a href="ManagerMenu.php"> Back </a>
        </fieldset> 
</form>
    </td>

    </tr>
    <tr align="center">
        <td colspan="2"> Copyright c 2017 </td>
    </tr>
</body>
</html>