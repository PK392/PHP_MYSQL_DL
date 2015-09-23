<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="COMPANY";

//Create a connection 
$conn=mysql($servername,$username,$password);
$dconn= mysql_select_db($dbname,$conn) ;


//check connection

if ($conn->connect_error)
{
	die("Connection failed:" .$conn->connect_error);
}
echo "Connected Successfully";

if ($dconn->connect_error)
{
	die("Couldnot Connect to dataabse: .$dconn->connect-error");
}
?>
