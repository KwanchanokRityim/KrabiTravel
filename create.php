<html>
<head>
<title>Reservation</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<form name="form1" method="post" action="save_create.php">
  <h2 style="text-align:center;background: Lavender;padding: 10px 10px 10px 10px;">Reservation Form <br></h2>
  <table width="400" border="1" style="width: 35%;margin: auto;">
    <tbody>
      <tr>
        <td width="125" style="background: #d3f8d3;"> &nbsp;Name</td>
        <td width="180" style="background: white;">
          <input name="txtName" type="text" id="txtName" size="35">
        </td>
      </tr>
      <tr>
        <td style="background: #d3f8d3;"> &nbsp;Last Name</td>
        <td style="background: white;"><input name="txtLastName" type="text" id="txtLastName" size="35">
        </td>
      </tr>
      <tr>
        <td style="background: #d3f8d3;">&nbsp;Email</td>
        <td style="background: white;"><input name="txtEmail" type="email" id="txtEmail" size="35"></td>
      </tr>
      <tr>
        <td style="background: #d3f8d3;"> &nbsp;Phone Number</td>
        <td style="background: white;"><input name="txtNum" type="tel" id="txtNum" size="35">
        </td>
      </tr>
      <tr>
        <td style="background: #d3f8d3;"> &nbsp;Restaurant Name</td>
        <td style="background: white;"><select name="ddlResName" id="ddlResName" >
            <option value="Anchalee" size="35">อัญชลี Thai Food Restaurant</option>
            <option value="KanabnamView" size="35">กระชังขนาบน้ำวิวซีฟู้ด</option>
            <option value="Lae lay Grill" size="35">Lae lay Grill</option>
            <option value="RanReun" size="35">ร้านเรือน</option>
            <option value="Reuntip" size="35">เรือนทิพย์</option>
            <option value="Baitoey Restaurant" size="35">ร้านอาหารใบเตย</option>
          </select>
        </td>
      </tr>
      <tr>
        <td style="background: #d3f8d3;"> &nbsp;Number of Customer</td>
        <td style="background: white;"><input name="txtNumCus" type="number" id="txtNumCus" min="1" max="50" size="35">
        </td>
      </tr>
      <tr>
        <td style="background: #d3f8d3;"> &nbsp;Reservation Date</td>
        <td style="background: white;"><input name="txtReservDate" type="datetime-local" id="txtReservDate" size="35">
        </td>
      </tr>
      <tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Save" style='color: black;margin-left: 575px;background: #b3d9ff; text-decoration: none;font-size:20px;padding: 10px 10px 10px 10px;'>
</form>
</body>
</html>