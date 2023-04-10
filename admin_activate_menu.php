<?php
include_once('admin_nav.php');
$id = $_REQUEST['id'];
$q = "update menu set status='Active' where menu_id='$id'";
if (mysqli_query($con, $q)) {
    //$_SESSION['success'] = 'User Activated Successfully';
    ?>
<script>
    alert("Menu Activated Successfully");
</script>
    <?php
} else {
    //$_SESSION['error'] = 'User Activation Failed';
    ?>
    <script>
        alert("Menu Activated Failed");
    </script>
        <?php
}
?>
<script>
    window.location = "admin_menu.php";
</script>