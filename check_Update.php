<?php
	session_start();
	$serverName = "127.0.0.1:52105";
	$userName = "azure";
	$userPassword = "6#vWHD_$";
	$dbName = "myDatabase";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$strSQL = "SELECT * FROM Reservation WHERE id = '".mysqli_real_escape_string($objCon,$_POST['txtID'])."' 
	and phone_number = '".mysqli_real_escape_string($objCon,$_POST['txtNum'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
			echo "id and Phone Number Incorrect!";
			echo "<br>Go to <a href='Update.php'>login page</a><br>";
	}
	else
	{
			$_SESSION["id"] = $objResult["id"];

			session_write_close();
			header("location:Update2.php");
			
	}
	mysqli_close($objCon);
?>