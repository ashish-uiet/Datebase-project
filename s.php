<?php
	session_start();
	if(isset($_POST["login"]))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
	if($username||$password)
	{
		$connect=mysql_connect("127.0.0.1","root","");
		mysql_select_db(std_detail);
		$login=mysql_query("SELECT * FROM login WHERE username='$username'");
		while($log=mysql_fetch_assoc($login))
		{
			$dbusername=$log('username');
			$dbpassword=$log('password');
			echo "$dbpassword";
			if($dbusername=$username&&$dbpassword=$password)
			{
				header("location:snpg.php");
			}
			else
			{
				header("location:f.php");
				echo "invalid username or password";
			}
		}
	}
	else
	{
		header("location:f.php?notify=all fields are required");
		echo "invalid username or password";
	}
	}
?>
