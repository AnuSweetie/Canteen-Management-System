<?php
$hostname="localhost";
$username="root";
$password="";
$database="canteen";
$dbc=@mysql_connect($hostname, $username, $password, $database) OR die("could not connect, ERROR: ".mysql_connect_error());
mysql_set_charset($dbc,"utf-8");
?>