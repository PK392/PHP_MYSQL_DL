<html>
<head>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST">
<?php 

require_once('DB_Login.php');

$sql=mysql_query("Select * from Department");

echo '<table border=1px>';
echo '<th>DepartmentId</th> <th>Department_Name</th> <th>Description</th>';

$datas=array();

while($data=mysql_fetch_array($sql))
{
	$datas[]=$data;
	//Running a loop all contents in the Mysql Table
	echo '<tr>';
	echo '<td>.$datas[\'Dept_Id\'] </td> <td>.$datas[\'Dname\']</td> 
	<td>.$datas[\'Description\']</td>';
	echo '</tr>';
	
}
echo'<tr>';
echo'<td><input type=\"text\" name=\"Deptid_text\"></td><td><input type=\"text\" name=\"DeptName_text\"></td> <td><input type=\"text\" name=\"Desc_text\"></td>';
echo'</tr>';

echo '</table>';
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
echo'<input type="submit" value="Add_Department">';
?>
</form>
</body>
</head>
</html>
