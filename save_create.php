<?php
$servername = "127.0.0.1:52105";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "myDatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	
	if(trim($_POST["txtName"]) == "")
	{
		echo "Please input Name!";
		exit();	
	}
	
	if(trim($_POST["txtLastName"]) == "")
	{
		echo "Please input Last Name!";
		exit();	
	}	
	
	if(trim($_POST["txtNum"]) == "")
	{
		echo "Please input Phone Number!";
		exit();	
	}
		
	if(trim($_POST["ddlResName"]) == "")
	{
		echo "Please input Restaurant Name!";
		exit();	
	}	
	
	if(trim($_POST["txtNumCus"]) == "")
	{
		echo "Please input Number of Customer!";
		exit();	
	}	
	
	if(trim($_POST["txtReservDate"]) == "")
	{
		echo "Please input Reservation Date!";
		exit();	
	}	
	
	$strSQL = "INSERT INTO Reservation (firstname,lastname,email,phone_number,restaurant_name,num_customer,reserv_date) VALUES ('".$_POST["txtName"]."', 
		'".$_POST["txtLastName"]."','".$_POST["txtEmail"]."','".$_POST["txtNum"]."','".$_POST["ddlResName"]."','".$_POST["txtNumCus"]."','".$_POST["txtReservDate"]."')";
	
if ($conn->query($strSQL) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $strSQL . "<br>" . $conn->error;
}

echo " Please remember your id for Update or Cancel your reservation!!!!<br>";
echo "Name : '".$_POST["txtName"]."'<br>";
echo "Go to <a href='create.php'>Reservation page</a><br>";

$sql = "SELECT id FROM reservation WHERE phone_number= '".$_POST["txtNum"]."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. "<br>" ;
  }
} else {
  echo "0 results";
}
echo "<br><br>Go to <a href='index.html'>Home</a><br>";
		
$conn->close();
?>