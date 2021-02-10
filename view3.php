<?php include('config.php')?>
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
<div id="banner4">
<?php
$src="SELECT * FROM `cnddat`";
$rs=mysql_query($src);
if(mysql_num_rows($rs)>0)
{

	?>
   <table style="margin-left:400px; font-size:18px" id="tab1" cellspacing="25">
   <thead>
   	<tr>
    	<th>SL No</th>
        <th>Name</th>
        <th>Party Name</th>
        <th>Vote Count</th>
        
    </tr>
   </thead>
   <tbody>
   <?php
   $sl=1;
	while($row=mysql_fetch_array($rs))
	{

		
			?><tr>
		
        	<td><?php echo $sl ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['party'] ?></td>
            <td><?php echo $row['count'] ?></td>
        </tr>
		<?php
		$sl++;
	}
	?>
    </tbody>
    </table>
 <?php
	
}
else
{
	echo "No record found";
}
?>
</div>
<footer><p>All Rights Reserve &amp; &copy EVS,2015 &nbsp;&nbsp;&nbsp;&nbsp||&nbsp;&nbsp;&nbsp;&nbsp Designed By:NCDS</p></footer>
</body>
</html>