<?php
    session_start();
?>
<html lang="en">
<head>
    <title> Menu </title>
    <style>  
    td { vertical-align:top;}
    .center-fieldset {
            margin: 0 auto;
            text-align: center;
    }
   </style>
</head>
<body>
<!-- 
    <table border = "1" align="center" width="70%" height="30%">
            <tr>
                <th colspan="2" align="right"> <a href="managerSignUp.php"> Sign Up </pre></th>

            </tr>
            <tr>
                <td width="30%">
                <form method="POST" action="../controller/logincheck.php" enctype="">
                    <fieldset class="center-fieldset" style="width:50%;">
                        <legend> Login </legend>
            <b>Username:</b> <input type="text" name="Username" id="" /> <br> <br>
            <b>Password:</b> <input type="password" name="Password" id="" /> <br> 
                        <hr></hr>
            <input type="radio" name="Remember me" value="Remember me" /> Remember me<br> <br>
            <input type="submit" value="submit" /> <br> <br>
            <a href="forgetPass.php"> Forgot paasword? 

                </td>
        </tr>
                </fieldset>
                </form> 
            </td>
            </tr>
    </table> -->

    <form method="POST" action="../controller/logincheck.php">
    <table border="1" align="center" width="70%" height="30%">
        <tr>
            <th colspan="2" align="right"><a href="managerSignUp.php">Sign Up</a></th>
        </tr>
        <tr>
            <td width="30%">
                <fieldset class="center-fieldset" style="width:50%;">
                    <legend>Login</legend>
                    <b>Username:</b> <input type="text" name="username" id="" /><br><br>
                    <b>Password:</b> <input type="password" name="password" id="" /><br>
                    <hr>
                    <input type="radio" name="Remember me" value="Remember me" /> Remember me<br><br>
                    <input type="submit" value="Submit" /><br><br>
                    <a href="forgetPass.php">Forgot password?</a>
                </fieldset>
            </td>
        </tr>
    </table>
</form>

   
</body>
</html>










