<?php
include_once('database.php');
include_once('admin_nav.php');
$em = $_REQUEST['em'];
$q = "update users set status='Not Active' where email='$em'";
if (mysqli_query($con, $q)) {
   // $_SESSION['success'] = 'User Deactivated Successfully';
   ?>
   <script>
    alert("User Deactivated Successfully");
   </script>
   <?php
} else {
    //$_SESSION['error'] = 'User Deactivation Failed';
    ?>
   <script>
    alert("User Deactivated Failed");
   </script>
   <?php
}
?>
<script>
    window.location = "admin_users.php";
</script>