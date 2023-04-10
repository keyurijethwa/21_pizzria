<?php
include_once('admin_nav.php');
$id = $_REQUEST['id'];
$q = "update item set Status='Delete' where item_id='$id'";
if (mysqli_query($con, $q)) {
    ?>
    <script>
        alert("User Deleted Successfully");
    </script>
    <?php
} else {
    ?>
    <script>alert("User Deletion Failed");</script>
    <?php
}
?>
<script>
    window.location = "admin_item.php";
</script>