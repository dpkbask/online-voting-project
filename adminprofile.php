<?php include('config.php'); include('session.php');?>
<!doctype html>
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
<div id="banner2">
</div>
<div id="banner3">
<div class="txt1">
<h1>Welcome <?php echo $_SESSION['info']['name'] ?></h1>
        <button><a href="logout_code.php">Logout</a></button>
        
       
        <button><a href="cngpw.php">Change password</a></button>
        
         
        <button><a href="view.php">View Cadidate List</a></button>
        
       
        <button><a href="view2.php">Update Voter Status</a></button>
       
        
        <button><a href="creg.php">Add Candidate</a></button>
        <button><a href="set.php">Display Result</a></button>
       
        
        <button><a href="unset.php">Disable Result</a></button>
        
</div>
<div id="banner4">
<div class="txt2">
<table cellpadding="7" cellspacing="7">

<tr>
	<td>Name</td>
    <td><?php echo $row['name'] ?></td>
</tr>
<tr>
	<td>User name</td>
    <td><?php echo $row['username'] ?></td>
</tr>


</table>
<?php
if(isset($_GET['msg']))
{
	echo $_GET['msg'];
}
else
{
	if(isset($_GET['err']))
	{
		echo $_GET['err'];
	}
}
?>
</div>
</div>
<footer><p>All Rights Reserve &amp; &copy EVS,2015 &nbsp;&nbsp;&nbsp;&nbsp||&nbsp;&nbsp;&nbsp;&nbsp Designed By:NCDS</p></footer>
</body>
</html>