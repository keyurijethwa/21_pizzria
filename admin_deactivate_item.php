<?php
include_once('database.php');
include_once('admin_nav.php');
$id= $_REQUEST['id'];
$q = "update item set status='Not Active' where item_id='$id'";
if (mysqli_query($con, $q)) {
    //$_SESSION['success'] = 'User Deactivated Successfully';
    ?>
    <script>
     alert("Item Deactivated Successfully");
    </script>
    <?php
} else {
    //$_SESSION['error'] = 'User Deactivation Failed';
    ?>
    <script>
     alert("Item Deactivated Failed");
    </script>
    <?php
}
?>
<script>
    window.location = "admin_item.php";
</script>