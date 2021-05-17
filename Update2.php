<?php
  session_start();
	$serverName = "127.0.0.1:52105";
	$userName = "azure";
	$userPassword ="6#vWHD_$";
	$dbName = "myDatabase";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
	$strSQL = "SELECT * FROM Reservation WHERE id = '".$_SESSION['id']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<html>
<head>
<title>Update</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
    </head>


<body style="background: beige;font-family:'Sarabun', sans-serif;">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: LightPink;">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link text-uppercase " href="index.html">Home</a>
                    <a class="nav-item nav-link text-uppercase " href="_lab.2.html">Tourist Attraction</a>
                    <a class="nav-item nav-link text-uppercase " href="_lab.3.html">Restaurant</a>
                    <a class="nav-item nav-link text-uppercase active" href="_lab.9.html">Reservation</a>
                </div>
            </div>
        </div>
    </nav>
<form name="form1" method="post" action="save_Update2.php">
 <h2 style="text-align:center;background: Lavender;padding: 10px 10px 10px 10px;">Update your Reservation Infomation<br></h2><br>
  <table width="500" border="1" style="width: 35%;margin: auto;">
    <tbody>
      <tr>
        <td width="125"style="background: #d3f8d3;"> &nbsp;ID</td>
        <td width="180" style="background: white;">
          <?php echo $objResult["id"];?>
        </td>
      </tr>
      <tr>
        <td width="125" style="background: #d3f8d3;"> &nbsp;Firstname</td>
        <td width="180" style="background: white;">
          <input name="txtName" type="text" id="txtName" value="<?php echo $objResult["firstname"];?>">
        </td>
      </tr>
      <tr>
        <td width="125" style="background: #d3f8d3;"> &nbsp;Lastname</td>
        <td width="180" style="background: white;"><input name="txtLastname" type="text" id="txtLastname" value="<?php echo $objResult["lastname"];?>">
        </td>
      </tr>
      <tr>
        <td width="125" style="background: #d3f8d3;"> &nbsp;Email</td>
        <td width="180" style="background: white;"><input name="txtEmail" type="email" id="txtEmail" value="<?php echo $objResult["email"];?>">
        </td>
      </tr>
      <tr>
        <td width="125" style="background: #d3f8d3;">&nbsp;Phone Number</td>
        <td width="180" style="background: white;"><input name="txtNum" type="tel" id="txtNum" value="<?php echo $objResult["phone_number"];?>"></td>
      </tr>
      <tr>
        <td width="125" style="background: #d3f8d3;">&nbsp;Restaurant Name<br>ร้านเดิม :<?php echo $objResult["restaurant_name"];?></td>
        <td width="180" style="background: white;"><select name="ddlResName" id="ddlResName" value="<?php echo $objResult["restaurant_name"];?>">
            <option value="Anchalee">อัญชลี Thai Food Restaurant</option>
            <option value="KanabnamView">กระชังขนาบน้ำวิวซีฟู้ด</option>
            <option value="Lae lay Grill">Lae lay Grill</option>
            <option value="RanReun">ร้านเรือน</option>
            <option value="Reuntip">เรือนทิพย์</option>
            <option value="Baitoey Restaurant">ร้านอาหารใบเตย</option>
          </select></td>
      </tr>
      <tr>
        <td width="125" style="background: #d3f8d3;">&nbsp;Number of Customer</td>
        <td width="180" style="background: white;"><input name="txtNumCus" type="int" id="txtNumCus" value="<?php echo $objResult["num_customer"];?>"></td>
      </tr>
      <tr>
        <td width="125" style="background: #d3f8d3;">&nbsp;Reservation Date<br>Old date :<?php echo $objResult["reserv_date"];?></td>
        <td width="180" style="background: white;"><input name="txtReservDate" type="datetime-local" id="txtReservDate" value="<?php echo $objResult["reserv_date"];?>"></td>
      </tr>
      
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Save" style='color: black;margin-left: 575px;background: #ffc61a; text-decoration: none;font-size:20px;padding: 10px 10px 10px 10px;'>
</form>
</body>
</html>
<?php
	mysqli_close($objCon);
?>
	