<?php
include_once('database.php');
include_once('admin_nav.php');
$id= $_REQUEST['id'];
$q = "update chefs set status='Not Active' where chef_id='$id'";
if (mysqli_query($con, $q)) {
    //$_SESSION['success'] = 'User Deactivated Successfully';
    ?>
    <script>
     alert("Chef Deactivated Successfully");
    </script>
    <?php
} else {
    //$_SESSION['error'] = 'User Deactivation Failed';
    ?>
    <script>
     alert("Chef Deactivated Failed");
    </script>
    <?php
}
?>
<script>
    window.location = "admin_chef.php";
</script>