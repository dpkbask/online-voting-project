<?php include('config.php'); include('session.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<?php
$id=$_SESSION['info']['vid'];
$scr="SELECT * FROM `voter` WHERE `vid`=$id";
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
<h1>Welcome <?php echo $_SESSION['info']['fname'] ?></h1>
<div id="pic">
<img src="<?php echo $row['pth'] ?>" height="155" width="170">
</div>
<div style="margin-right:20px" id="option">
<ul>
<li><a href="logout_code2.php">Logout</a></li>
        
<li><a href="profile.php">Profile</a> </li>       
</ul>
</div>
    <div class="dv4">  
</div>
<div  class="txt2"> 
 </div>
</div>
<div id="content">
<div  id="info">
<form name="frm" method="post" action="ucode.php" enctype="multipart/form-data">    
<table cellpadding="7" cellspacing="7" align="center">
<tr>
	<td>Select picture</td>
    <td><input type="file" name="f" required></td>
    <td><input type="submit" name="ok" id="ok"></td>
</tr>
</table>
</form>
</div>
</div>
<div style="width:1280px; height:20px; background:#EBE1EC">
</div>
<footer><p>All Rights Reserve &amp; &copy EVS,2015 &nbsp;&nbsp;&nbsp;&nbsp||&nbsp;&nbsp;&nbsp;&nbsp Designed By:NCDS</p></footer>
</body>
</html>