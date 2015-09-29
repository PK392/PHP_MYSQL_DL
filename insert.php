<?php
 
$servername="localhost";
$username="root";
$password="Master@1234";
$dbname="COMPANY";
//Create a connection 
$conn=mysql_connect($servername,$username,$password);
$dconn= mysql_select_db($dbname,$conn) ;
//check connection
if ($conn->connect_error)
{
	die("Connection failed:" .$conn->connect_error);
}
echo "Connected Successfully";
if ($dconn->connect_error)
{
	die("Couldnot Connect to database: .$dconn->connect-error");
}
echo"Connected to Database";
 
 $Didtext = mysql_real_escape_string($_POST['Dept_Id']);
 $Dnametext= mysql_real_escape_string($_POST['Dname']);
 $Desctext= mysql_real_escape_string($_POST['Description']);
 
 echo "$Didtext";
 echo "$Dnametext";
 
 $adddept="INSERT INTO Department(Dept_Id,Dname,Description) 

values($Didtext,'$Dnametext','$Desctext')";
echo $addept;
 $result = mysql_query($adddept);
if($result)
{
    echo("<br>Input data is succeed");
} else
{
    echo("<br>Input data failed");
}

?>
 
