
<?php
include_once('database.php');
$str = $_REQUEST['strdate'];
$current_date=date('d-m-Y');
if (strtotime($current_date) > strtotime($str)) {
    echo "error";
}
?>