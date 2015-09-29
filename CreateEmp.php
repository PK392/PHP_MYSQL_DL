<html>
<head>
<title>Insert A new Employee </title>
<body>
<form method="POST" action ='InsertEmp.php'>
<?php
$getdeptname = $_GET['DeptName'];
echo '<input type=\'text\' name=\'DepartmentName\' value=\"<?php echo $getdeptname; ?>\" id=\'DepartmentName\' disabled ><br><br>';
echo '<input type=\'text\' name=\'Empid\' id=\'Empid\'><br><br>';
echo '<input type=\'text\' name=\'Empname\' id=\'Empname\'><br><br>';
echo '<input type=\'text\' name=\'Age\' id=\'Age\'><br><br>';
echo '<input type=\'text\' name=\'Salary\' id=\'Salary\'><br><br>';
echo '<p1>"Marital Status" </p1><br>';
echo '<select id=\'ms\' name=\'selectvalue\' > <option value=\"Married\">Married</option>  <option value=\"Single\">Single</option><\select><br><br>';
echo '<input type=\'text\' name=\'Age\' id=\'Age\'><br><br>';
echo '<textarea name=\"Address\"cols=\"30\" rows=\"4\" id=\"Address\"></textarea><br><br>';
echo '<input type=\"Submit\" value=\"Add_Employee\">';
?>

</form>
</body>
</head>
</html>
