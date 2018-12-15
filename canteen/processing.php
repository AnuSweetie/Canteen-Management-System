<?php

if($_SERVER['REQUEST_METHOD']=='POST)
{
	$adminorstaff=$_POST['adminorstaff'];
	$fullname=$_POST['full name'];
	$password=$_POST['psw'];
	if(isset($adminorstaff,$fullname,$password))
	{
		include('connection.php');
	}
}
else
{
	echo "registration denied";
}
?>