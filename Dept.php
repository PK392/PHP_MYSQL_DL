<html>
<head>
<Title>Department Listing <Title>
<body>

<?php
require_once('DB_Login.php');
$sql=mysql_query("Select Dname from Department");
echo '<table border=1px>';
echo '<th>DEPARTMENTS</th>';
$datas=array();
while($data=mysql_fetch_array($sql))
{
	$datas[]=$data;
	//Running a loop all contents in the Mysql Table
	echo '<tr>';
	echo '<a href="CreateEmp.php?DeptName=<? php echo \".$datas['Dname']\" ; ?> ><td>.$datas[\'Dept_Id\'] </td></a>';
	echo '</tr>';
	
}
?>
</body>
</head>
</html>
