<?php
include_once('admin_nav.php');
$id = $_REQUEST['id'];
$q = "update offers set Status='Delete' where offer_id='$id'";
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
    window.location = "admin_offer.php";
</script>