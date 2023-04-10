<?php
include_once("database.php");
session_start();
$id = $_GET['id'];
//echo $em;
$q1 = "select * from offers where offer_id='$id' and Status='Active'";
$result = mysqli_num_rows(mysqli_query($con, $q1));
if ($result == 0) {
    $q = "update offers set Status='Active' where offer_id='$id'";
    if (mysqli_query($con, $q)) {
       // $_SESSION['Activation_succ'] = "Account reactivated successfully. Please log in to your account.";
        ?>
        <script>
            alert("Offer reactivated successfully. ");
        </script>
        <?php
    } else {
        //$_SESSION['Activation_err'] = "Account activation failed";
        ?>
        <script>
            alert("Offer activation failed");
        </script>
        <?php
    }
} else {
    //$_SESSION['Activation_err'] = "Account is already activated. Log in to your account";
    ?>
    <script>
        alert("Offer is already activated.");
    </script>
    <?php
}
?>
<script>
    window.location = "admin_offer.php";
</script>
<?php
include_once("footer.php");
