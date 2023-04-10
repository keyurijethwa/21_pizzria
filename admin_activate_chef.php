<?php
include_once('admin_nav.php');
$id = $_REQUEST['id'];
$q = "update chefs set status='Active' where chef_id='$id'";
if (mysqli_query($con, $q)) {
    //$_SESSION['success'] = 'User Activated Successfully';
    ?>
<script>
    alert("Chef Activated Successfully");
</script>
    <?php
} else {
    //$_SESSION['error'] = 'User Activation Failed';
    ?>
    <script>
        alert("Chef Activated Failed");
    </script>
        <?php
}
?>
<script>
    window.location = "admin_chef.php";
</script>