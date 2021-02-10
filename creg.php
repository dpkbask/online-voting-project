<?php include('config.php')?>
<!doctype html>
<html>
<head>
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
<h1>Welcome <?php echo $_SESSION['info']['name'] ?></h1>
</div>
<div class="txt2">
<button><a href="logout_code.php">Logout</a></button>
   <button><a href="adminprofile.php">Profile</a></button>
</div>
</div>
<div id="banner4">
<form name="frm" method="post" action="cregcode.php" enctype="multipart/form-data">
<table cellpadding="7" cellspacing="7">
<tr>
	<td>Name</td>
    <td><input type="text" name="fname" id="fname" ></td>
</tr>
<tr>
	<td>Party name</td>
    <td><input type="text" name="mname" id="mname"></td>
</tr>
<tr>
<td>Logo</td>
    <td><input type="file" name="f" id="f"></td>
</tr>
	<td><input type="submit" name="ok" value="Register"></td>
</tr>
</table>
</form>
</div>
<footer><p>All Rights Reserve &amp; &copy EVS,2015 &nbsp;&nbsp;&nbsp;&nbsp||&nbsp;&nbsp;&nbsp;&nbsp Designed By:NCDS</p></footer>
</body>
</html>