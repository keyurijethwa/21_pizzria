<?php
include_once('admin_nav.php');
$em = $_REQUEST['em'];
$q = "update users set status='Active' where email='$em'";
if (mysqli_query($con, $q)) {
    //$_SESSION['success'] = 'User Activated Successfully';
    ?>
<script>
    alert("User Activated Successfully");
</script>
    <?php
} else {
    //$_SESSION['error'] = 'User Activation Failed';
    ?>
    <script>
        alert("User Activated Failed");
    </script>
        <?php
}
?>
<script>
    window.location = "admin_users.php";
</script>