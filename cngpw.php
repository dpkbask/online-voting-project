
<?php include('config.php');?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<?php
$id=$_SESSION['info']['eid'];
$scr="SELECT * FROM `admin` WHERE `eid`=$id";
$rs=mysql_query($scr);
$row=mysql_fetch_array($rs);
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
<div class="banner1">
</div>

<div id="banner3">
<div class="txt1">
<h1>Update Information</h1>
  <button><a href="logout_code.php">Logout</a></button>
  <button><a href="adminprofile.php">Profile</a></button>
</div>
<div class="txt2">
</div>
</div>
<div id="banner4">

<form name="frm" id="frm" method="post" action="pchg.php">
<table cellpadding="7" cellspacing="7">
<tr>
	<td>New Password</td>
    <td><input type="password" name="pwd"  id="pwd"></td>
</tr>

<tr>
	<td><input type="hidden" name="id" value="<?php echo $_SESSION['info']['eid']; ?>"><input type="submit" name="ok" value="Save Changes"></td>
</tr>
</table>
</form>
</div>
<footer><p>All Rights Reserve &amp; &copy EVS,2015 &nbsp;&nbsp;&nbsp;&nbsp||&nbsp;&nbsp;&nbsp;&nbsp Designed By:NCDS</p></footer>
</body>
</html>