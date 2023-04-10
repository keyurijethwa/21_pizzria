<?php
include_once('admin_nav.php');
$q = "select * from users";
$users = mysqli_num_rows(mysqli_query($con, $q));
$q1 = "select * from users where status='Active'";
$active = mysqli_num_rows(mysqli_query($con, $q1));
$q2 = "select * from users where status='Not Active'";
$inactive = mysqli_num_rows(mysqli_query($con, $q2));
$q3 = "select * from users where status='Delete'";
$deleted = mysqli_num_rows(mysqli_query($con, $q3));
$q4 = "select * from menu where Status='Active'";
$menu = mysqli_num_rows(mysqli_query($con, $q4));
$q5 = "select * from item where Status='Active'";
$item = mysqli_num_rows(mysqli_query($con, $q5));
$q6 = "select * from offers where Status='Active'";
$offer = mysqli_num_rows(mysqli_query($con, $q6));
$q7 = "select * from contact";
$messsage = mysqli_num_rows(mysqli_query($con, $q7));
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0" , shrink-to-fit="">
        <title>Document</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="font/css/all.css">
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
        
        <div class=" " style="margin-top: 10%;">
            <div class="container mt-5"  >
                <h1 class="text-center text-warning">Dashboard</h1>
                <div class="row  mb-5 text-white">
                    
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center"><i class="fa-solid fa-user fa-xl"></i></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Users</h6>
                                <p class="card-text text-center mt-2">This are the users whos register in our website</p>
                                <h4 class="text-center"><?php echo $users; ?></h4>
                                <a href="admin_users.php" class="card-link"><button class="btn btn-warning" style="width:100px">view more</button></a>
                                <a href="admin_new_user.php" class="card-link"><button class="btn btn-warning" style="width:100px">add users</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center"><i class="fa-solid fa-user-xmark fa-xl"></i></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Not Active Users</h6>
                                <p class="card-text text-center mt-2">This are the not active users whos register but they don't active now in our website</p>
                                <h4 class="text-center"><?php echo $inactive; ?></h4>
                                <a href="admin_users.php" class="card-link"><button class="btn btn-warning" style="width:100px">view more</button></a>
                                <a href="admin_new_user.php" class="card-link"><button class="btn btn-warning" style="width:100px">add users</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center"><i class="fa-solid fa-user-check fa-xl"></i></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Active Users</h6>
                                <p class="card-text text-center mt-2">This are the Active users whos registered and using our website to orders pizza</p>
                                <h4 class="text-center"><?php echo $active; ?></h4>
                                <a href="admin_users.php" class="card-link"><button class="btn btn-warning" style="width:100px">view more</button></a>
                                <a href="admin_new_user.php" class="card-link"><button class="btn btn-warning" style="width:100px">add users</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center"><i class="fa-solid fa-users-slash fa-xl"></i></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Deleted Users</h6>
                                <p class="card-text text-center mt-2">This are the deleted users whos register and delete his/her account in our website</p>
                                <h4 class="text-center"><?php echo $deleted; ?></h4>
                                <a href="admin_users.php" class="card-link"><button class="btn btn-warning" style="width:100px">view more</button></a>
                                <a href="admin_new_user.php" class="card-link"><button class="btn btn-warning" style="width:100px">add users</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  mb-5 text-white">
                    
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center"><i class="fa-solid fa-bars fa-xl"></i></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Menu</h6>
                                <p class="card-text text-center mt-2">This are menu which added recentlly in our website.So,registerd user can use.</p>
                                <h4 class="text-center"><?php echo $menu; ?></h4>
                                <a href="admin_menu.php" class="card-link"><button class="btn btn-warning" style="width:100px">view more</button></a>
                                <a href="admin_new_menu.php" class="card-link"><button class="btn btn-warning" style="width:100px">add menu</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center"><i class="fa-solid fa-utensils fa-xl"></i></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Items</h6>
                                <p class="card-text text-center mt-2">This are the items which added in menu in our website. So,users can order their items.</p>
                                <h4 class="text-center"><?php echo $item; ?></h4>
                                <a href="admin_item.php" class="card-link"><button class="btn btn-warning" style="width:100px">view more</button></a>
                                <a href="admin_new_item.php" class="card-link"><button class="btn btn-warning" style="width:100px">add Item</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center"><i class="fa-solid fa-tags fa-xl"></i></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Offers</h6>
                                <p class="card-text text-center mt-2">This are the offers as per dates and time. This offers give the discout as per festivals.</p>
                                <h4 class="text-center"><?php echo $offer; ?></h4>
                                <a href="admin_offers.php" class="card-link"><button class="btn btn-warning" style="width:100px">view more</button></a>
                                <a href="admin_new_offer.php" class="card-link"><button class="btn btn-warning" style="width:100px">add offers</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center"><i class="fa-solid fa-message fa-xl"></i></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Messages from users</h6>
                                <p class="card-text text-center mt-2">This are the messages customer send and give the rate of delivery,food qulity and other.</p>
                                <h4 class="text-center"><?php echo $messsage; ?></h4>
                                <a href="admin_users.php" class="card-link"><button class="btn btn-warning" style="width:100px">view more</button></a>
                                <a href="admin_new_user.php" class="card-link"><button class="btn btn-warning" style="width:100px">add users</button></a>
                            </div>
                        </div>
                    </div>
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