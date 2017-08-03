<html>
<head><title>Registration portal</title>
</head>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<div id="header">
<h1>CSJM UIET KANPUR UNIVERSITY</h1><br>
</div>
<div id="headers">
<img src="images.jpg" style="width:219px;height:203px">
</div>
<div id="nav"></div>
<div id="section">
<h1 style="text-align:center;size:40px;color:#483D8B">Welcome!</h1><hr>
<center><img src="i1.jpg" width="1000" height="300"></center><hr>
<h1 style="color:#483D8B;text-align:center">Registration Portal</h1>
<form action="" method="post">
  <fieldset>
    <legend><h2><mark style="background:#483D8B;color:white"> Loging Information: </mark></h2></legend>
    <h3 style="color:#9370DB">Username<input type="text" name="username"><br>
    <br>Password <input type="password" name="password"></h3><br>
    <input type="Submit" name="login" value="    Log In    ">
  </fieldset>
<?php
	session_start();
	if(isset($_POST["login"]))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		if($username&&$password)
		{
			$connect=mysql_connect("127.0.0.1","root","");
			mysql_select_db("std_detail");
			$login=mysql_query("SELECT * FROM login WHERE username='$username'");
			$nrow=mysql_num_rows($login);
			if($nrow!=0)
			{
			while($log=mysql_fetch_assoc($login))
			{
				$dbusername=$log['username'];
					$dbpassword=$log['password'];
				if($dbusername==$username&&$dbpassword==$password)
				{
						header("location:sdpg.php");
				}
				else
				{
						header("location:f.php");
				}
			}
			}
			else
			{
				header("location:f.php");
			}
		}
		else
		{
			header("location:f.php?notify=all fields are required");
			echo "invalid username or password";
		}
	}
?>
</form>
</div>
<div id="footer">
<h3>Designed by - Vikash Kumar chaurasia</h3>
</div>
</body>
</html>
