<!DOCTYPE html>
<html>
<head>
	<title>Activity 2</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<form action="Biodata.php" method="POST" enctype="multipart/form-data">
<h1 style="margin-left: 380px">BIODATA</style></h1>
<table>
<tr>
	<td>
		<label>Name:</label>
		<input style="margin-left: 290px;" type="text" name="name">
	</td>
</tr>	
<br>

<tr>
	<td>
		<label >Present Address:</label>
		<input style="margin-left: 218px;" type="text" name="presentad">
	</td>
</tr>

<tr>
	<td>
		<label>Permanent Address:</label>
		<input style="margin-left: 192px;" type="text" name="permanent">
	</td>
</tr>

<tr>
	<td>
		<label>Date of Birth:</label>
		<input style="margin-left: 240px;" type="text" name="birthdate">
	</td>
</tr>

<tr>
	<td>
		<label>Religion:</label>
		<input style="margin-left: 272px;" type="text" name="religion">
	</td>
</tr>

<tr>
	<td>
		<label>Civil Status:</label>
		<input style="margin-left: 248px;" type="text" name="civilstatus">
	</td>
</tr>

<tr>
	<td>
		<label>Age:</label>
		<input style="margin-left: 308px;" type="text" name="age">
	</td>
</tr>

<tr>
	<td>
		<label>Citizenship:</label>
		<input style="margin-left: 255px;" type="text" name="citizen">
	</td>
</tr>

<tr>
	<td>
		<label>Weight:</label>
		<input style="margin-left: 286px;" type="text" name="weight">
	</td>
</tr>

<tr>
	<td>
		<label>Place of Birth:</label>
		<input style="margin-left: 242px;" type="text" name="birthplace">
	</td>
</tr>

<tr>
	<td>
		<label>Height:</label>
		<input style="margin-left: 290px;" type="text" name="height">
	</td>
</tr>

<tr>
	<td>
		<label>Name of Father:</label>
		<input style="margin-left: 225px;" type="text" name="father">
	</td>
</tr>

<tr>
	<td>
		<label>Name of Mother:</label>
		<input style="margin-left: 222px;" type="text" name="mother">
	</td>
</tr>

<tr>
	<td>
		<label>Address:</label>
		<input style="margin-left: 279px;" type="text" name="address">
	</td>
</tr>

<tr>
	<td>
		<label>Languages or Dialect Spoken:</label>
		<input style="margin-left: 134px;" type="text" name="dialect">
	</td>
</tr>

<tr>
	<td>
		<label>Person to be notified In Case of Emergency:</label>
		<input style="margin-left: 40px;" type="text" name="emergency">
	</td>
</tr>

</table>
<h2>EDUCATIONAL BACKGROUND:</h2>
<table>
<tr>
	<td>
		<label>Elementary:</label>
		<input style="margin-left: 247px;" type="text" name="elementary">
	</td>
</tr>

<tr>
	<td>
		<label>Year Graduated:</label>
		<input style="margin-left: 219px;" type="text" name="YG1">
	</td>
</tr>

<tr>
	<td>
		<label>High School:</label>
		<input style="margin-left: 244px;" type="text" name="highschool">
	</td>
</tr>

<tr>
	<td>
		<label>Year Graduated:</label>
		<input style="margin-left: 220px;" type="text" name="YG2">
	</td>
</tr>

<tr>
	<td>
		<label>College:</label>
		<input style="margin-left: 277px;" type="text" name="college">
	</td>
</tr>

<tr>
	<td>
		<label>Year Graduated:</label>
		<input style="margin-left: 218px;" type="text" name="YG3">
	</td>
</tr>

<tr>
	<td>
		<label>Course:</label>
		<input style="margin-left: 284px;" type="text" name="course">
	</td>
</tr>

<tr>
	<td>
		<label>Special Skills:</label>
		<input style="margin-left: 235px;" type="text" name="skills">
	</td>
</tr>			

<tr>
	<td>
		<br>
		 <input type="submit" value="submit" name="submit">
	</td>
</tr>
</table>
</form>

</body>
</html><hr>




<?php
if (isset($_POST['submit'])) 
	{
$Name=$_POST['name'];
$Presentad=$_POST['presentad'];
$Permanentad=$_POST['permanent'];
$Bdate=$_POST['birthdate'];
$Religion=$_POST['religion'];
$Civilstatus=$_POST['civilstatus'];
$Age=$_POST['age'];
$Citizenship=$_POST['citizen'];
$Weight=$_POST['weight'];
$BirthPlace=$_POST['birthplace'];
$Height=$_POST['height'];
$Father=$_POST['father'];
$Mother=$_POST['mother'];
$Address=$_POST['address'];
$Dialect=$_POST['dialect'];
$Emergency=$_POST['emergency'];

$Elementary=$_POST['elementary'];
$YG1=$_POST['YG1'];
$HighSchool=$_POST['highschool'];
$YG2=$_POST['YG2'];
$College=$_POST['college'];
$YG3=$_POST['YG3'];
$Course=$_POST['course'];
$SpecialSkills=$_POST['skills'];


echo "<br";
echo "Name:".$Name;
echo "<br>";
echo "Present Address:".$Presentad;
echo "<br>";
echo "Permanent Address:".$Permanentad;
echo "<br>";
echo "Date of Birth:".$Bdate;
echo "<br>";
echo "Religion:".$Religion;
echo "<br>";
echo "Civil Status:".$Civilstatus;
echo "<br>";
echo "Age:".$Age;
echo "<br>";
echo "Citizenship:".$Citizenship;
echo "<br>";
echo "Weight:".$Weight;
echo "<br>";
echo "Place of Birth:".$BirthPlace;
echo "<br>";
echo "Height:".$Height;
echo "<br>";
echo "Name of Father:".$Father;
echo "<br>";
echo "Name of Mother:".$Mother;
echo "<br>";
echo "Address:".$Address;
echo "<br>";
echo "Languages or Dialect Spoken:".$Dialect;
echo "<br>";
echo "Person to be notified In Case of Emergency:".$Emergency;
echo "<br>";
echo "<br>";



echo "<label>EDUCATIONAL BACKGROUND</label>";
echo "<br>";
echo "Elementary:".$Elementary;
echo "<br>";
echo "Year Graduated:".$YG1;
echo "<br>";
echo "High School:".$HighSchool;
echo "<br>";
echo "Year Graduated:".$YG2;
echo "<br>";
echo "College:".$College;
echo "<br>";
echo "Year Graduated:".$YG3;
echo "<br>";
echo "Course:".$Course;
echo "<br>";
echo "Special Skills:".$SpecialSkills;
		

}
?>