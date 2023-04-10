<?php
include_once('admin_nav.php');
$em = $_REQUEST['em'];
$q = "update users set Status='Delete' where email='$em'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'User Deleted Successfully';
} else {
    $_SESSION['error'] = 'User Deletion Failed';
}
?>
<script>
    window.location = "admin_users.php";
</script>