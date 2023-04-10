<?php
include_once('database.php');
$str = $_REQUEST['strdate'];
$end=$_REQUEST['enddate'];
if (strtotime($str) > strtotime($end)) {
    echo "error";
}
?>