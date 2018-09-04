<?php
//error_reporting(error_reporting() & ~E_NOTICE );
//error_reporting(E_ALL ^ E_DEPRECATED);
//error_reporting(E_ALL ^ E_NOTICE);

$servername = "localhost";
$username = "root";
$password = "Root@1978";
$dbname = "dragdrop";

$con = new mysqli($servername, $username, $password);
if(!$con->connect_error)
{
	if($con->select_db($dbname)===false)
	{
		$sql = file_get_contents("db/$dbname.sql");
		$rslt=$con->multi_query($sql);
		if(!$con->error)
		{
			do{
				$con->use_result();
			}while($con->next_result());
			
			if($con->select_db($dbname)===false)
				die($con->error);
		}
		else
			die($con->error);
	}
}
else
	die($con->connect_error);

$con->set_charset('utf8');
?>