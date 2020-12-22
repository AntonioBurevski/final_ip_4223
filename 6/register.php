<html>
<head>
<title>4223</title>
</head>
<body>
<form method="post" action="register.php">
  	
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="fname">
    </div>
    <br>

    <div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="uname">
    </div>
    <br>
      
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="pwd">
    </div>
    <br>
      
    <div class="input-group">
        <SELECT id="city" name="city">
            
            <OPTION Value="-1">--- Select ---</OPTION>
            <OPTION Value="Paris">Paris</OPTION>
            <OPTION Value="Rome">Rome</OPTION>
            <OPTION Value="NewYork">New York</OPTION>
            <OPTION Value="London">London</OPTION>
            <OPTION Value="Moscow">Moscow</OPTION>

        </SELECT>
    </div>
    <br>

    <input type="radio" name="tUser" value="Free" checked> Free&nbsp;
    <input type="radio" name="tUser" value="Basic"> Basic&nbsp;
    <input type="radio" name="tUser" value="Premium"> Premium
    <br>
    <br>

    End User Agreement<input type="checkbox" name="eua">
    <br>
    <br>
      
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  </form>


<?php
if (isset($_POST['fname'])){ 

$hostname='localhost';
$username='root';
$password='';
$database='test';

$fname;
$uname;
$pwd;
$city;
$tUser;

	if (isset($_POST['fname'])){		
		$fname = $_POST['fname'];		
	}
	if (isset($_POST['uname'])){		
		$uname = $_POST['uname'];		
	}
	if (isset($_POST['pwd'])){		
		$pwd = $_POST['pwd'];		
	}
	if (isset($_POST['city'])){		
		$city = $_POST['city'];		
	}	
	if (isset($_POST['tUser'])){		
		$tUser = $_POST['tUser'];		
	}	

	$mysqli = new mysqli($hostname, $username, $password, $database);
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
    $sql = "INSERT INTO reservation (Name, Username, Password, City, tUser) VALUES ('".$fname."','".$uname."','".$pwd."','".$city."','".$tUser."');";
	//echo $sql;
    
	if(mysqli_query($mysqli,$sql)){
		echo "<br>";
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
	//$mysqli->close();
	mysqli_close($mysqli);
}
?>
</body>
 </html>