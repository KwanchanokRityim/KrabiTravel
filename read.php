<html>
<head>
<title>Infomation</title>
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
<form name="form2" method="post" action="check_read.php">
  <h2 style="text-align:center;background: Lavender;padding: 10px 10px 10px 10px;">Reservation Infomation <br></h2><br>
  <table width="500" border="1" style="width: 35%;margin: auto;">
    <tbody>
		<tr>
        <td style="background: #d3f8d3;"> &nbsp;Your id</td>
        <td>
          <input name="txtID" type="int" id="txtID" size="35">
        </td>
      </tr>
        <td style="background: #d3f8d3;"> &nbsp;Phone Number</td>
        <td><input name="txtNum" type="tel" id="txtNum" size="35">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="view" value="view" style='color: black;margin-left: 575px;background: #b3d9ff; text-decoration: none;font-size:20px;padding: 10px 10px 10px 10px;'>
</form>
</body>
</html>