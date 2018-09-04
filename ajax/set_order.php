<?php
require_once("../include/connection.php");
$list_order = $_POST['list_order'];
$list = explode(',' , $list_order);
$i = 1 ;
foreach($list as $id)
{
	$query  = "UPDATE items SET item_order=$i WHERE id = $id" ;
	$con->query($query) or die($con->error);
	$i++ ;
}
?>