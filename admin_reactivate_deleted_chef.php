<?php
include_once("database.php");
session_start();
$id = $_GET['id'];
//echo $em;
$q1 = "select * from chefs where chef_id='$id' and Status='Active'";
$result = mysqli_num_rows(mysqli_query($con, $q1));
if ($result == 0) {
    $q = "update chefs set Status='Active' where chef_id='$id'";
    if (mysqli_query($con, $q)) {
       // $_SESSION['Activation_succ'] = "Account reactivated successfully. Please log in to your account.";
        ?>
        <script>
            alert("Chef reactivated successfully.");
        </script>
        <?php
    } else {
        //$_SESSION['Activation_err'] = "Account activation failed";
        ?>
        <script>
            alert("Chef activation failed");
        </script>
        <?php
    }
} else {
    //$_SESSION['Activation_err'] = "Account is already activated. Log in to your account";
    ?>
    <script>
        alert("Chef is already activated.");
    </script>
    <?php
}
?>
<script>
    window.location = "admin_chef.php";
</script>
<?php
include_once("footer.php");
