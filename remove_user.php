<?php
    include_once("database.php");
    $em=$_GET['email']; 
    $q="DELETE FROM users WHERE Email='$em'" ;
    $q = "delete from users where email='$em'";
if (mysqli_query($con, $q)) {
?>
    <script>
        window.location= "admin_users.php";
    </script>
<?php
} else {
?>
    <script>
        alert ("Not delete data try again");
    </script>
<?php
}
?>