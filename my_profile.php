<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="
background-image: url('img/bg_4.jpg'); 
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
    <?php
    include_once('login_nav.php');
    ?>

    <div class=" mt-5 mb-5 mx-5">

        <h1 class="text-warning mt-5 text-center fst-italic">My Profile</h1>
        <div class="text-center"> 
        <div class="d-block mx-3 text-center">
            
            <div class="row justify-content-center align-items-center g-2 text-white d-flex">
                <div class="col-md-6 col-12">
                <div class="text-center"> <img class="rounded-circle profile mx-auto" src="img/p2.jfif" alt=""></div>
                <div class="fs-2 text-white"> Damien Green</div>
            <div class="fs-4 text-muted">damien12@gmail.com</div>
                </div>

                <<div class="col-md-6 col-12">
                    <a href="#">
                        <h5>Change password</h5>
                    </a>
                    <a href="#">
                        <h5>Chage Porfile</h5>
                    </a>
            </div>
            </div>
            <div><a href="#"><input type="button" value="Logout" class="text-white bg-warning"></a></div>

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