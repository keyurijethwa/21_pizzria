<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="font/css/all.css">
    <style>
       .row a:hover{
            color:#ffc107;
        }
    </style>

</head>

<body style="
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
    <?php
    include_once('admin_nav.php')
    ?>
    <div class=" mt-5 mb-5 mx-5">
        <div class="row mx-auto">
            <h1 class="text-warning mt-5 text-center">My Profile</h1>
            <div class="text-center"> <img class="rounded-circle profile mx-auto" src="img/p2.jfif" alt=""></div>
            <div class="d-block mx-3 text-center">
                <div class="fs-2 text-white"> Damien Green</div>
                <div class="fs-4 text-muted">damien12@gmail.com</div>
                <div><a href="#"><input type="button" value="Logout"></a></div>
            </div>
        </div>

        <div class="row text-white text-center mx-4 my-5">
            <div class=" col-12  ">
                <div class="border border-1 p-1 text-warning "><h3>Add & remove</h3></div>
                <div class="d-flex">
           <div class="mx-5"> <h2>Add users</h2>
           <a href="add_user.php">Add_user</a></div>
           <div class="mx-5"> <h2>Add offers</h2>
            <a href="add_offers.php">Add_offer</a></div>
                
                    <div>
            <h2 class="mx-5">Remove User</h2>
            <a href="View_user.php">Remove_User</a></div>
           <div class="mx-5"> <h2>Remove Offer</h2>
            <a href="View_user.php">Remove_Offer</a></div>
            <div class="mx-5"> <h2>View</h2>
           <a href="View_user.php">View_user</a></div>
            </div>
            </div>

            <div class=" col-12   ">
            <div class="border border-1 p-1 text-warning mt-5"><h3>about</h3></div>
            <p>He is studing in USA. your Dream is to make a big barnd or company .<br>Now i am 
             headling big pizzria .<br>
             birth-date:2/06/1993<br>
             address:USA
            </p>
            </div>
        </div>
        <div class="row">
                    <div class="border border-1 p-1 bg-warning text-center text-white"><h3>Messages</h3></div>
                    <div class="table-responsive">
                    <table class="table text-white">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                        <tr>
                            <td>Kriti</td>
                            <td>Kriti@gmail.com</td>
                            <td>delivery</td>
                            <td> I have not get a pizza in time your delivery service is very bad</td>
                        </tr>
                    </table>
                    </div>
        </div>
    </div>

    <?php
    include_once('footer.php');
    ?>
</body>

</html>