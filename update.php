<?php include("config.php") ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<?php
$id=$_SESSION['info']['vid'];
$scr="SELECT * FROM `voter` WHERE `vid`=$id";
$rs=mysql_query($scr);
$row=mysql_fetch_array($rs);
$dob=explode("-",$row['dob']);
?>

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
<li><a href="about.php">About Us</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
</nav>
</div>
</header>

<div id="banner3">
<div class="txt1">
    	<h1>Welcome <?php echo $_SESSION['info']['fname'] ?></h1>
</div>


<div id="pic">
<img src="<?php echo $row['pth'] ?>" height="155" width="170">
</div>
<div style="margin-right:20px" id="option">
<ul>
<li><a href="logout_code2.php">Logout</a></li>
        
<li><a href="profile.php">Profile</a> </li>       
</ul>
</div>




<div class="txt2">
       
</div>
</div>
</div>
<div style="height:610px"
 id="banner4">
<h1>Update Information</h1>
<form name="frm" method="post" action="update_code.php">
<table cellpadding="7" cellspacing="7">
<tr>
	<td>First name</td>
    <td><input type="text" name="fname" required value="<?php echo $row['fname'] ?>"></td>
</tr>
<tr>
	<td>Middle name</td>
    <td><input type="text" name="mname" value="<?php echo $row['mname'] ?>"></td>
</tr>
<tr>
	<td>Last name</td>
    <td><input type="text" name="lname" required value="<?php echo $row['lname'] ?>"></td>
</tr>
<tr>
	<td>Email</td>
    <td><input type="email" name="email" required value="<?php echo $row['email'] ?>"></td>
</tr>
<tr>
	<td>Password</td>
    <td><input type="password" name="pwd" required value="<?php echo $row['password'] ?>"></td>
</tr>
<tr>
	<td>Date of Birth</td>
    <td><select name="day">
    	<option value="<?php echo $dob[2]?>"><?php echo $dob[2]?></option>
        <?php
		for($d=1;$d<=31;$d++)
		{
			?>
            	<option value="<?php echo $d ?>"><?php echo $d ?></option>
			<?php
		}
		?>
        </select>
       <select name="month">
    	<option value="<?php echo $dob[1]?>"><?php echo $dob[1]?></option>
        <?php
		for($m=1;$m<=12;$m++)
		{
			?>
            	<option value="<?php echo $m ?>"><?php echo $m ?></option>
			<?php
		}
		?>
        </select>
        <select name="year">
    	<option value="<?php echo $dob[0]?>"><?php echo $dob[0]?></option>
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
    <td><input type="radio" name="gender" value="Male"
    <?php
	if($row['gender']=="Male")
	{
		?>
        checked
		<?php
	}
	?>
    
    >Male
    	<input type="radio" name="gender" value="Female"
        <?php
	if($row['gender']=="Female")
	{
		?>
        checked
		<?php
	}
	?>
        >Female
    </td>
</tr>
<tr>
    <td>Address</td> 
    <td><input type="text" name="add" id="add" value="<?php echo $row['address']?>"></td>
</tr>
<tr>
    <td>Age</td>
    <td><input type="text" name="age" id="age"  value="<?php echo $row['age']?>"></td>
</tr>
<tr>
    <td>Contact numbaer</td>
    <td><input type="text" name="no" id="no" value="<?php echo $row['contact']?>"></td>
</tr>
<tr>
    <td>City</td>
    <td><input type="text" name="city" id="city" value="<?php echo $row['city']?>"></td>
</tr>
<tr>
    <td>State</td>
    <td><input type="text" name="state" id="state" value="<?php echo $row['state']?>"></td>
</tr>
<tr>
	<td><input type="hidden" name="id" value="<?php echo $_SESSION['info']['vid']; ?>"><input type="submit" name="ok" value="Save Changes"></td>
</tr>
</table>
</form>
</div>
<div style="width:1280px; height:20px; background:#EBE1EC">
</div>
<footer><p>All Rights Reserve &amp; &copy EVS,2015 &nbsp;&nbsp;&nbsp;&nbsp||&nbsp;&nbsp;&nbsp;&nbsp Designed By:NCDS</p></footer>
</body>
</html>