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
<?php
echo "hello world";
?>
<form action ="action_page.php" method="post">
	   <fieldset>
   		 <legend><h2><mark style="background:black;color:white"><i>Student Detail:<i></mark></h2></legend>
		 <strong><em> <table><tr><td>FIRST NAME</td>	<td><input type="text" name="FIRST NAME" size="10"></td></tr>
			LAST NAME<input type="text" name="LAST NAME" size="10"><br><br>
			DATE OF BIRTH		<input type="date" name="bday"><br><br> 
			FATHER'S NAME		<input type="text" name="father's name"><br><br>
			ADDRESS		<textarea name="message" rows="3" cols="35">
			       </textarea><br><br>
						
					COURSE<input type="text" name="course"><br><br>
										
			BRANCH		<input type="text" name="branch">
			<select name="BRANCH">
						  <option value="CSE">CSE</option>
						  <option value="CSE">ECE</option>
						  <option value="CHE">CHE</option>
						  <option value="MEE">MEE</option>
						  <option value="IT">IT</option>
						  <option value="MSME">MSME</option>
			</select><br><br>
			ROLL NO		<input type="text" name="roll no"><br><br>
			CPI		<input type="number"name="cpi"><br><br>
			SEMESTER	<input type="number" name="semester" min="1" max="8"><br><br>
			YEAR		<input type="number" name="year" max="4" min="1"><br><br>
			E-MAIL		<input type="email" name="E-MAIL"><br><br>
			 
 			TELEPHONE	        <input type="tel" name="usrtel"><br><br>
			GENDER		<input type="radio" name="sex" value="male" checked>Male  
 			<input type="radio" name="sex" value="female"> Female<br><br>
			AMOUNT		<input type="text" name="amount"><br><br></table>
			<input type="submit" value ="submit">
		</em></strong>
	    </fieldset>		
			
	</form>
</div>
<div id="footer">
<h3>Designed by - Vikash Kumar chaurasia</h3>
</div>
</body>
</html>
