<?php
 require_once('DB_Login.php');
 $Didtext = mysql_real_escape_string($_POST['Deptid_text']);
 $Dnametext=mysql_real_escape_string($_POST['DeptName_text']);
 $Desctext=mysql_real_escape_string($_POST['Desc_text']);
 
 $adddept="INSERT INTO Department('Dept_Id','Dname','Description') values('Didtext','Dnametext','Desctext')";
 $result = mysql_query($adddept);
if($result)
{
    echo("<br>Input data is succeed");
} else
{
    echo("<br>Input data failed");
}

?>
