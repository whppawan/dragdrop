<?php
//error_reporting(error_reporting() & ~E_NOTICE );
//error_reporting(E_ALL ^ E_DEPRECATED);
//error_reporting(E_ALL ^ E_NOTICE);

$servername = "localhost";
$username = "root";
$password = "Root@1978";
$dbname = "drag_drop";

$con = new mysqli($servername, $username, $password, $dbname);
if($con->connect_error)
    die("Connection failed: " . $con->connect_error);
mysqli_set_charset( $con, 'utf8');
?>