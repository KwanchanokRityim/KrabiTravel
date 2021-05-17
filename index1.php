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



// sql to create table
$sql = "CREATE TABLE Reservation (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
phone_number int(10) NOT NULL,
restaurant_name varchar(30) NOT NULL,
num_customer int(2) NOT NULL,
reserv_date datetime  NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Reservation created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
?>