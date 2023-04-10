<?php
include_once('database.php');
include_once('admin_nav.php');
$id= $_REQUEST['id'];
$q = "update menu set status='Not Active' where menu_id='$id'";
if (mysqli_query($con, $q)) {
    //$_SESSION['success'] = 'User Deactivated Successfully';
    ?>
    <script>
     alert("Menu Deactivated Successfully");
    </script>
    <?php
} else {
    //$_SESSION['error'] = 'User Deactivation Failed';
    ?>
    <script>
     alert("Menu Deactivated Failed");
    </script>
    <?php
}
?>
<script>
    window.location = "admin_menu.php";
</script>