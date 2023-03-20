<?php
    session_start();
    if(isset($_SESSION['emailid']) && isset($_SESSION['password']) )
    {
        session_destroy();
        ?>
        <script>
            window.location="guest_index.php";
        </script>
        <?php
    }
?>