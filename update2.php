<?php include("config.php") ?>
<!doctype html>
<html>
<head>
<?php
$id=$_GET['id'];
$scr="SELECT * FROM `cnddat` WHERE `id`=$id";
$rs=mysql_query($scr);
$row=mysql_fetch_array($rs);
?>
<meta charset="utf-8">
<title>Home</title>
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
<div id="log">
<a href="loginpage.php">Login</a>
</div>
<a style="font-weight:bold; color:#FFF; float:right; margin-top:-85px; margin-right:250px">or</a>
<div id="reg">
<a href="reg.php">Register</a>
</div>
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
<div id="banner2">
</div>
<div id="banner3">
<div class="txt1">
<h1>Welcome <?php echo $_SESSION['info']['name'] ?></h1>
        
        
<div class="txt2">
<button><a href="logout_code.php">Logout</a></button>
        <button><a href="adminprofile.php">Profile</a></button>
</div>
</div>
<div id="banner4">
<h1>Update Information</h1>
<form name="frm" id="frm" method="post" action="update_code2.php">
<table cellpadding="7" cellspacing="7">
<tr>
	<td>Name</td>
    <td><input type="text" name="cname"  id="cname" value="<?php echo $row['name'] ?>"></td>
</tr>
<tr>
	<td>Party</td>
    <td><input type="text" name="party"  id="party" value="<?php echo $row['party'] ?>"></td>
</tr>
<tr>
	<td>Total Vote</td>
    <td><input type="text" name="count"  id="count" value="<?php echo $row['count'] ?>"></td>
</tr>
<tr>
	<td><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="submit" name="ok" value="Save Changes"></td>
</tr>
</table>
</form>
<ul1>

</ul1>
</div>
<footer><p>All Rights Reserve &amp; &copy EVS,2015 &nbsp;&nbsp;&nbsp;&nbsp||&nbsp;&nbsp;&nbsp;&nbsp Designed By:NCDS</p></footer>
</body>
</html>