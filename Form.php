<html>
<head>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST">
<?php 

require once(DB_Login.php);

$sql=mysql_query("Select * from Department");

echo '<table border=1px>';
echo '<th>DepartmentId</th> <th>Department_Name</th> <th>Description</th>';

while($data=mysql_fetch_array($sql))
{
	//Running a loop all contents in the Mysql Table
	echo '<tr>';
	echo '<td>.$data['Dept_Id'] </td><td>.$data['Dname']</td> 
	<td>.$data['Description']</td>';
	echo '</tr>';
	
}
echo'<tr>';
echo'<td><input type="text" name="Deptid_text"></td><td><input type="text" name="DeptName_text"></td> <td><input type="text" name="Desc_text"></td>';
echo'</tr>';

echo '</table>';
echo'<input type="submit" value="Add_Department">';
?>
</form>
</body>
</head>
</html>






