<?php
	
$con=mysqli_connect("localhost:3308","root","","complain_system");
if(!$con){
	echo mysqli_connect_error();
}
else
{
	$err_msg="";
	echo $err_msg;
	}
?>