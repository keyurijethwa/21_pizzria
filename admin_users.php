<?php
include_once('database.php');
$q = "select * from users";
$result = mysqli_query($con, $q);
?>
<?php
session_start();
if (isset($_SESSION['emailid']) && isset($_SESSION['password'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
    <?php
     include_once('admin_nav.php');
    ?>
    <div class="container">
        <h1 class="mt-5 p-5 text-center text-warning fst-italic">All Login users</h1>
        <a href="admin_new_user.php"><button class="text-white bg-warning rounded fw-bold my-5">+ New User</button></a>

        <div class="table-responsive">
            <table class="table text-white">
                <tr class="bg-warning"> 
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Mobile N0.</th>
                    <th>Profile</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Activation</th>
                </tr>
                <?php
            while ($b = mysqli_fetch_array($result)) {
                echo "<b>";
                echo "<tr>";
                echo "<td> " . $b[0] . "</td>";
                echo "<td>" . $b[1] . "</td>";
                echo "<td>" . $b[2] . "</td>";
                echo "<td>" . $b[3] . "</td>";
                echo "<td><img src='Profile/".$b[4]."' height='25%' width='25%'></td>";
                echo "<td>" . $b[5] . "</td>";
                echo "<td> <a href='edit_user.php?email=$b[1]'><i class='fa-regular fa-pen-to-square'></i></a></td>";
                echo "<td> <a href='remove_user.php?em=$b[1]'><i class='fa-solid fa-trash'></i></a></td>";
            if ($b[5] == "Active") { ?>
                <td> <a href="admin_deactivate_user.php?em=<?php echo $b[1]; ?>"><button class="btn btn-warning" style="width:100px">Deactivate</button></a>
                </td>
            <?php
            } else if ($b[5] == "Not Active") {
            ?>
                <td> <a href="admin_activate_user.php?em=<?php echo $b[1]; ?>"><button class="btn btn-warning" style="width:100px">Activate</button></a>
                </td>
            <?php
            } else if($b[5]=="Delete") {
            ?>
                <td> <a href="admin_reactivate_deleted_user.php?em=<?php echo $b[1]; ?>"><button class="btn btn-warning" style="width:100px">Reactivate</button></a>
                </td>
            <?php
            }
                echo "</b>";
                echo "</tr>";
            }?>
            </table>
        </div>
    </div>
    <?php
        include_once('footer.php');
    ?>
</body>
</html>
<?php
} else {
?>
    <script>
        window.location = "login.php";
    </script>
<?php
}
?>