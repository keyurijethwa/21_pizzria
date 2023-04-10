<?php
include_once('admin_nav.php');
$id = $_REQUEST['id'];
$q = "update offers set status='Active' where offer_id='$id'";
if (mysqli_query($con, $q)) {
    //$_SESSION['success'] = 'User Activated Successfully';
    ?>
<script>
    alert("Offer Activated Successfully");
</script>
    <?php
} else {
    //$_SESSION['error'] = 'User Activation Failed';
    ?>
    <script>
        alert("Offer Activated Failed");
    </script>
        <?php
}
?>
<script>
    window.location = "admin_offers.php";
</script>