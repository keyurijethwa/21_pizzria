<?php
$con = mysqli_connect("localhost", "root", "") or die("Error in coonecting with database");
mysqli_select_db($con,"pizzria");
// $q = "Create database pizzria";
// if(mysqli_query($con,$q))
// {
//     echo "Database created successfully";
// }
// else{
//     echo "Error is creating the database";
// }
// ?>