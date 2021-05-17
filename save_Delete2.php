<?php
	session_start();
	$serverName = "127.0.0.1:52105";
	$userName = "azure";
	$userPassword = "6#vWHD_$";
	$dbName = "myDatabase";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
	$id = $_REQUEST["txtID"];
 
//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา
 
$sql = "DELETE FROM Reservation WHERE id='".$_SESSION['id']."' ";
$result = mysqli_query($objCon, $sql) or die ("Error in query: $sql " . mysqli_error());
 

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
	echo "</script>";
	echo "Go to <a href='index.html'>Home</a><br>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
	echo "Go to <a href='Delete.php'>Back</a><br>";
}
	?>