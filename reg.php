<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>New User Registration</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<header>
<div id="page">
<h1>
<div id="title1">Electronic
</div>
<div id="title2">Voting
</div>
</h1>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="loginpage.php">Login</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
</nav>
</div>
</header>
<div class="banner1">
</div>
<div style="background:#EBE1EC; widows:1350px; height:70px"></div>
<div style="width:1350px; height:700px; background:#EBE1EC;">
<div style="font-style:italic; font-size:20px; font-weight:bold; margin-left:60px">Welcome to the Electronic Voting System</div>
<div style="margin-left:60px; font-size:16px; width:500px; margin-top:30px; color:#000040">New user must register first and then login with their username and password to vote or to view the details.</div>
   <h1 style="margin-left:300px; margin-top:60px; color:#6F6F00; font-size:50px; text-shadow:2px 2px #000;  font-family:'Arial Narrow', 'Britannic Bold'">New User Registration</h1>     	
		<div style="background:#CCC; border-color:#000; border-style:double; height:625px; width:900px; margin-left:280px; margin-top:-100px">
        <div class="txt3" style="font-size:15px">
<form name="frm" method="post" action="regcode.php">
<table cellpadding="7" cellspacing="7">
<tr>
	<td>First name</td>
    <td><input type="text" name="fname" id="fname" ></td>
</tr>
<tr>
	<td>Middle name</td>
    <td><input type="text" name="mname" id="mname"></td>
</tr>
<tr>
	<td>Last name</td>
    <td><input type="text" name="lname" id="lname"></td>
</tr>
<tr>
	<td>Email</td>
    <td><input type="email" name="email" id="email"></td>
    </tr>
<tr>
	<td>Password</td>
    <td><input type="password" name="pwd" id="pwd"></td></tr>
<tr>
	<td>Date of Birth</td>
    <td><select name="day" id="day">
    	<option selected>Day</option>
        <?php
		for($d=1;$d<=31;$d++)
		{
			?>
            	<option value="<?php echo $d ?>"><?php echo $d ?></option>
			<?php
		}
		?>
        </select>
       <select name="month" id="month">
    	<option selected>Month</option>
        <?php
		for($m=1;$m<=12;$m++)
		{
			?>
            	<option value="<?php echo $m ?>"><?php echo $m ?></option>
			<?php
		}
		?>
        </select>
        <select name="year" id="year">
    	<option selected>Year</option>
        <?php
		for($d=1900;$d<=date("Y");$d++)
		{
			?>
            	<option value="<?php echo $d ?>"><?php echo $d ?></option>
			<?php
		}
		?>
        </select>
    </td>
</tr>
<tr>
	<td>Gender</td>
    <td style="font-weight:100; font-size:16px"><input type="radio" name="gender" value="Male" id="gender">Male
    	<input type="radio" name="gender" value="Female" id="gender">Female
    </td>
</tr>
<tr>
    <td>Address</td>
    <td><input type="text" name="add" id="add"></td>
</tr>
<tr>
    <td>Age</td>
    <td><input type="text" name="age" id="age"></td>
</tr>
<tr>
    <td>Contact numbaer</td>
    <td><input type="text" name="no" id="no"></td>
</tr>
<tr>
    <td>City</td>
    <td><input type="text" name="city" id="city"></td>
</tr>
<tr>
    <td>State</td>
    <td><input type="text" name="state" id="state"></td> 
</tr>
<tr>
	<td style="float:left; padding:20px" ><input type="submit" name="ok" value="Register"></td>
     <td><button style="float:right; padding-left:5px"><a href="index.php">Back</a></button></td>
</tr>
</table>
</form>
</div>
</div>
</div>
<footer style="margin-top:100px"><p>All Rights Reserve &amp; &copy EVS,2015 &nbsp;&nbsp;&nbsp;&nbsp||&nbsp;&nbsp;&nbsp;&nbsp Designed By:NCDS</p></footer>
</body>
</html>