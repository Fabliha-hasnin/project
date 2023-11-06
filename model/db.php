 
<?php
    // $con=mysqli_connect('localhost','root', '', 'collaborative_task_management');
    // if(!$con){
    //     die(mysqli_error($con));
    // } 

    $dbhost= "localhost";
    $dbname= "collaborative_task_management";
    $dbuser= "root";
    $dbpass= "";

    function getConnection()
    {
        global $dbhost;
        global $dbname;
        global $dbuser;
        global $dbpass;

        return $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    }
?>
