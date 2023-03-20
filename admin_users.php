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
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
                <tr>
                    <td>Kriti</td>
                    <td>k@rku.ac.in</td>
                    <td>2K43H</td>
                    <td>9328686505</td>
                    <td><img src="img/p2.jfif" alt="" height="100px" width="100px"> </td>
                    <td><a href="edit_user.php"><i class="fa-regular fa-pen-to-square"></i></a></td>
                    <td><a href="remove_user.php"><i class="fa-solid fa-trash"></i></a></td>

                </tr>
            </table>
        </div>
    </div>
    <?php
        include_once('footer.php');
    ?>
</body>
</html>