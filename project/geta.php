<html>
<head>
<title>Registration portal</title>
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
<div id="nav">
</div>
<div id="section">
<form action ="action_page.php" method="post">
	   <fieldset>
   		 <legend>
			<h2>
			<mark style="background:black;color:white"><i>Student Detail:<i></mark>
			</h2>
		</legend>
		 <table>
<?php
	if(isset($_POST['get']))
	{
		$rollno=$_POST['rollno'];
		$sname=$_POST['sname'];
		if($rollno&&$sname)
		{
			$connect=mysql_connect("127.0.0.1","root","");
			mysql_select_db("std_detail");
			$stddata=mysql_query("SELECT * FROM student WHERE fname='$sname' AND roll_no='$rollno'");
			$data=mysql_fetch_assoc($stddata);
		}
	}
?>
			<tr><td>FIRST NAME	</td>	<td style="text-align: center"><input type="text" name="fname" value="<?php echo $data['fname'] ?>" size="7"></td>
			<td style="text-align: center">LAST NAME	</td>   <td style="text-align:right"><input type="text" name="lname" value="<?php echo $data['lname'] ?>" size="7">
							<br><br></td></tr>
			<tr><td>FATHERS NAME	</td>	<td><input type="text" name="ftname" value="<?php echo $data['lname'] ?>" size="7">
							<br><br></td></tr>
			<tr><td>DATE OF BIRTH	</td>   <td><input type="date" name="bday" value="<?php echo $data['dob'] ?>" size="7">
							<br><br> </td></tr>
			<tr><td>ROLL NO		</td>	<td><input type="text" name="roll no" 
							value="<?php echo $data['roll_no'] ?>" size="7"><br><br></td></tr>
			<tr><td>COURSE		</td>	<td><input type="text" name="course" 
							value="B.Tech" size="8"></td>
			<td>BRANCH		</td>	<td><input type="text" name="branch"
							value="<?php echo $data['branch']?>" size="7"><br><br></td></tr>
			<tr><td>SEMESTER	</td><td><input type="number" name="sem" 								value="<?php echo $data['sem'] ?>" size="7"><br><br></td></tr>
			<tr><td>YEAR		</td>	<td><input type="number" name="year" 								value="<?php echo $data['year'] ?>" size="7"><br><br></td></tr>
			<tr><td>CPI		</td>	<td><input type="number"name="cpi" 								value="<?php echo $data['CPI'] ?>" size="7"><br><br></td></tr>
			<tr><td>MOBIL NO	</td>	<td><input type="tel" name="usrtel" 								value="<?php echo $data['contact_no'] ?>" size="7"><br><br></td></tr>
			<tr><td>ADDRESS		</td>	<td><input type="text" name="address" 								value="<?php echo $data['address'] ?>" size="7"><br><br></td></tr>
							<td><input type="submit" value ="  Submit  "></td></tr>
		</table>
	    </fieldset>		
	</form>
</div>
<div id="footer">
<h3>Designed by - Vikash Kumar chaurasia</h3>
</div>
</body>
</html>
