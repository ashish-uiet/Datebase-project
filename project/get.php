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
<?php
	if(isset($_POST['get']))
	{
		$rollno=$_POST['rollno'];
		$sname=$_POST['sname'];
		$fname=$_POST['fathername'];
		$connect=mysql_connect("127.0.0.1","root","");
		mysql_select_db("std_detail");
		if($rollno)
		{
			$stddata=mysql_query("SELECT * FROM student WHERE roll_no='$rollno'");
			$data=mysql_fetch_assoc($stddata);
		}
		if($sname&&$fname)
		{
			$stddata=mysql_query("SELECT * FROM student WHERE fname='$sname' AND father_name='$fname'");
			$data=mysql_fetch_assoc($stddata);
		}
	}
?>
	<fieldset>
		 <legend>
			<h3>
			<mark style="background:black;color:white"><i>Student Detail:<i></mark>
			</h3>
		</legend>	
		<table style="padding: 20px;width:800px;border-spacing:10px;">
			<tr>
				<td >ROLL NO</td>
				<td>:</td><td></td>
				<td><?php echo $data['roll_no'] ?></td>
			</tr>
			<tr>
				<td>STUDENT NAME </td>
				<td>:</td><td></td>	
				<td><?php echo $data['fname'] ?><?php echo $data['lname'] ?></td>
			</tr>
			<tr>
				<td>FATHERS NAME</td>
				<td>:</td><td></td>
				<td><?php echo $data['lname'] ?></td>
			</tr>
			<tr>
				<td>DATE OF BIRTH</td>
				<td>:</td><td></td>   
				<td><?php echo $data['dob'] ?></td>
			</tr>
			<tr>
				<td>BRANCH</td>
				<td>:</td><td></td>	
				<td><?php echo $data['branch']?></td>
			</tr>
			<tr>
				<td>SEMESTER</td>
				<td>:</td><td>    </td>
				<td><?php echo $data['sem'] ?></td>
			</tr>
			<tr>
				<td>YEAR</td>
				<td>:</td><td></td>
				<td><?php echo $data['year'] ?></td>
			</tr>
			<tr>
				<td>CPI</td>
				<td>:</td><td></td>	
				<td><?php echo $data['CPI'] ?></td>
			</tr>
			<tr>
				<td>MOBIL NO</td>
				<td>:</td><td></td>
				<td><?php echo $data['contact_no'] ?></td>
			</tr>
			<tr>
				<td>ADDRESS</td>
				<td>:</td><td></td>
				<td><?php echo $data['address'] ?></td>
			</tr>
		</table>
	    </fieldset>		
	<form action ="action_page.php" method="post">
	   <fieldset>
   		 <legend>
			<h3>
			<mark style="background:black;color:white"><i>Update Details :<i></mark>
			</h3>
		</legend>
		 <table style="padding: 20px;width:800px;border-spacing:10px;">
			<tr>
				<td>FEE RECEIPT NO.</td>
				<td><input type="number" name="roll no"></td>
			</tr>
			<tr>
				<td>FEE AMOUNT</td>
				<td><input type="number" name="ftname"></td>
			</tr>
			<tr>
				<td>DATE OF FEE SUBMITION</td> 
			  	<td><input type="date" name="bos"></td>
			</tr>
			<tr>
				<td>BRANCH</td>
				<td><input type="text" name="roll no"></td>
			</tr>
			<tr>
				<td>SEMESTER</td>
				<td><input type="number" name="roll no"></td>
			</tr>
			<tr>
				<td>YEAR</td>
				<td><input type="number" name="ftname"></td>
			</tr>
			<tr>
				<td></td><td></td><td></td>
				<td><input type="submit" value ="  Update  "></td>
			</tr>
		</table>
	    </fieldset>		
	</form>
</div>
<div id="footer">
<h3>Designed by - Vikash Kumar chaurasia</h3>
</div>
</body>
</html>
