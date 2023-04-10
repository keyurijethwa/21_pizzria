<?php
include_once('database.php');
include_once('admin_nav.php');
$id = $_REQUEST['id'];
$q = "update offers set status='Not Active' where offer_id='$id'";
if (mysqli_query($con, $q)) {
   // $_SESSION['success'] = 'User Deactivated Successfully';
   ?>
   <script>
    alert("Offer Deactivated Successfully");
   </script>
   <?php
} else {
    //$_SESSION['error'] = 'User Deactivation Failed';
    ?>
   <script>
    alert("Offer Deactivated Failed");
   </script>
   <?php
}
?>
<script>
    window.location = "admin_offer.php";
</script>