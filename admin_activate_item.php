<?php
include_once('admin_nav.php');
$id = $_REQUEST['id'];
$q = "update item set status='Active' where item_id='$id'";
if (mysqli_query($con, $q)) {
    //$_SESSION['success'] = 'User Activated Successfully';
    ?>
<script>
    alert("Item Activated Successfully");
</script>
    <?php
} else {
    //$_SESSION['error'] = 'User Activation Failed';
    ?>
    <script>
        alert("Item Activated Failed");
    </script>
        <?php
}
?>
<script>
    window.location = "admin_item.php";
</script>