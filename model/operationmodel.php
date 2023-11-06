<?php
require_once('db.php');

function displayallprojectinfo() 
{
   $con = getConnection();
   $sql = "select * from setpriority";
   $result = mysqli_query($con, $sql);
   $projects = [];
   
   while($project = mysqli_fetch_assoc($result)){
       array_push($projects, $project);
   }
   return $projects;
}