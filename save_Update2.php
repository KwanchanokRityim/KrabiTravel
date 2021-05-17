<?php
	session_start();
	if($_SESSION['id'] == "")
	{
		echo "Please Login!";
		exit();
	}

	$serverName = "127.0.0.1:52105";
	$userName = "azure";
	$userPassword ="6#vWHD_$";
	$dbName = "myDatabase";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
	$strSQL = "UPDATE Reservation SET firstname = '".trim($_POST['txtName'])."' 
	,lastname = '".trim($_POST['txtLastname'])."',email = '".trim($_POST['txtEmail'])."',phone_number= '".trim($_POST['txtNum'])."',restaurant_name='".trim($_POST['ddlResName'])."',num_customer='".trim($_POST['txtNumCus'])."',reserv_date='".trim($_POST['txtReservDate'])."'  WHERE id = '".$_SESSION["id"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	
	echo "<script type='text/javascript'>";
	echo "alert('Save Completed!');";
	echo "</script>";
	echo "Go to <a href='index.html'>Home</a><br>";
			
	
	mysqli_close($objCon);
?>
