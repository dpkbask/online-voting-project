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

<div id="banner3">

<div class="txt1">
<h1>Welcome <?php echo $_SESSION['info']['fname'] ?></h1>
    <div class="dv4">  
</div>
<div id="pic">
<img src="<?php echo $row['pth'] ?>" height="155" width="170">
</div>
<div style="margin-right:20px" id="option">
<ul>
<li><a href="logout_code2.php">Logout</a></li>
        
        
        <li><a href="update.php">Update</a></li>
        
        
        <li><a href="voting.php">Vote</a></li>
                <li><a href="result.php">Election result</a></li>
                <li><a href="upo.php">Upload Profile Pic</a></li>
</ul>
</div>
<div  class="txt2"> 
 </div>
</div>

<div id="info">
       
<table cellpadding="7" cellspacing="7" align="center">
<tr>
	<td>Name</td>
    <td><?php echo $row['fname'] ?>
    	<?php echo $row['mname'] ?>
        <?php echo $row['lname'] ?></td>
</tr>
<tr>
	<td>Email</td>
    <td><?php echo $row['email'] ?></td>
</tr>
<tr>
</tr>
<tr>
	<td>Date of Birth</td>
    <td><?php echo $row['dob'] ?>
    </td>
</tr>
<tr>
	<td>Gender</td>
    <td><?php echo $row['gender'] ?></td>
	
</tr>
<tr>
    <td>Address</td> 
    <td><?php echo $row['address']?></td>
</tr>
<tr>
    <td>Age</td>
    <td><?php echo $row['age']?></td>
</tr>
<tr>
    <td>Contact numbaer</td>
    <td><?php echo $row['contact']?></td>
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

<div style="width:1280px; height:20px; background:#EBE1EC">
</div>
<footer><p>All Rights Reserve &amp; &copy EVS,2015 &nbsp;&nbsp;&nbsp;&nbsp||&nbsp;&nbsp;&nbsp;&nbsp Designed By:NCDS</p></footer>
</body>
</html>