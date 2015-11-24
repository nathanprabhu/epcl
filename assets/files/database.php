<?php
ini_set("display_errors",0);

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db_name="epcl"; // Database name
session_start();
// Connect to server and select databse.
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect");
$db=mysql_select_db("$db_name",$con)or die("cannot select DB");
?>