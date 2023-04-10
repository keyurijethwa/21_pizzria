<?php
include_once("database.php");
session_start();
$id = $_GET['id'];
//echo $em;
$q1 = "select * from menu where menu_id='$id' and Status='Active'";
$result = mysqli_num_rows(mysqli_query($con, $q1));
if ($result == 0) {
    $q = "update menu set Status='Active' where menu_id='$id'";
    if (mysqli_query($con, $q)) {
       // $_SESSION['Activation_succ'] = "Account reactivated successfully. Please log in to your account.";
        ?>
        <script>
            alert("Menu reactivated successfully. Please log in to your account.");
        </script>
        <?php
    } else {
        //$_SESSION['Activation_err'] = "Account activation failed";
        ?>
        <script>
            alert("Menu activation failed");
        </script>
        <?php
    }
} else {
    //$_SESSION['Activation_err'] = "Account is already activated. Log in to your account";
    ?>
    <script>
        alert("Account is already activated. Log in to your account");
    </script>
    <?php
}
?>
<script>
    window.location = "admin_menu.php";
</script>
<?php
include_once("footer.php");
