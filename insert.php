<?php
 
 require_once('DB_Login.php');
 
 $Didtext = (int)$_POST['Dept_Id'];
 $Dnametext= mysqli_real_escape_string($_POST['Dname']);
 $Desctext= mysqli_real_escape_string($_POST['Description']);
 
 echo $Didtext;
 echo $Dnametext;
 
 $adddept="INSERT INTO Department(Dept_Id,Dname,Description) 

values('$Didtext','$Dnametext','$Desctext')";
 $result = mysqli_query($adddept);
if($result)
{
    echo("<br>Input data is succeed");
} else
{
    echo("<br>Input data failed");
}

?>
 
