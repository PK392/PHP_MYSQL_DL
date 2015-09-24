<?php
 require_once('DB_Login.php');
 foreach($_POST as $key => $value)
	{
		if($key != "SEND") //Prevent the submit button's name and value from being inserted into the db
		{
		 $adddept = "INSERT INTO Department ($key) VALUES ('$value')";
			$result=mysql_query($adddept) or die(mysql_error());
			if($result)
{
    echo("<br>Input data is succeed");
} 
else
{
    echo("<br>Input data failed");
}
			
		}
	}
 



?>
