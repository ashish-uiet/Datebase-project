<html>
<head><title>New Registration</title>
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
		 <table style="padding: 20px;width:1000px;border-spacing:15px;">
			<tr>
				<td>FIRST NAME</td>
				<td><input type="text" name="fname"></td>
				<td>LAST NAME</td>
			        <td><input type="text" name="lname"></td>
			</tr>
			<tr>
				<td>FATHER'S NAME</td>
				<td><input type="text" name="fathername"></td>
			</tr>
			<tr>
				<td>DATE OF BIRTH</td>
				<td><input type="date" name="dob"></td>
			</tr>
			<tr>
				<td>GENDER</td>
				<td><input type="radio" name="sex" value="male" checked>Male 
 				<input type="radio" name="sex" value="female"> Female</td>
			</tr>
			<tr>
				<td>CATEGORY</td>
				<td><input type="radio" name="sex" value="general" checked>General 
 				<input type="radio" name="sex" value="obc"> OBC
				<input type="radio" name="sex" value="sc" >SC 
 				<input type="radio" name="sex" value="st"> ST</td>
			</tr>
			<tr>
				<td>ROLL NO</td>
				<td><input type="text" name="roll no"></td>
			</tr>
			<tr>
				<td>COURSE</td>
				<td><input type="text" name="course"></td></tr>
			<tr>
				<td>BRANCH</td>
				<td><input type="text" name="branch">
				<select name="BRANCH">
						  <option value="CSE">CSE</option>
						  <option value="CSE">ECE</option>
						  <option value="CHE">CHE</option>
						  <option value="MEE">MEE</option>
						  <option value="IT">IT</option>
						  <option value="MSME">MSME</option>
				</select></td>
			</tr>
			<tr>
				<td>SEMESTER</td>
				<td><input type="number" name="semester" min="1" max="8"></td>
			</tr>
			<tr>
				<td>YEAR</td>
				<td><input type="number" name="year" max="4" min="1"></td>
				</tr>
			<tr>
				<td>E-MAIL</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>MOBILE NO</td>
				<td><input type="tel" name="mobno"></td></tr>
			<tr>
				<td>ADDRESS</td>
				<td><textarea name="message" rows="3" cols="35"></textarea></td>
			</tr>
				<td></td><td></td><td></td><td><input type="submit" value ="  Submit  "></td>
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
