<html>
<head>
<body>
<form action="insert.php" method="GET">
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
echo'<td><input type=\"text\" name=\"Department_Id\" id=\"Department_Id\"></td><td><input type=\"text\" name=\"Department_name\" id=\"Department_name\"></td> <td><input type=\"text\" name=\"Desc\" id=\"Desc\"></td>';
echo'</tr>';

echo '</table>';

echo'<input type="submit" value="SEND">';
?>
</form>
</body>
</head>
</html>
