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
<div class="txt1"><h1>Welcome <?php echo $_SESSION['info']['name'] ?></h1>
</div>
<div class="txt2">
<button><a href="logout_code.php">Logout</a></button>
   <button><a href="adminprofile.php">Profile</a></button>

</div>
</div>
<div id="banner4">
<?php
$src="SELECT * FROM `cnddat`";
$rs=mysql_query($src);
if(mysql_num_rows($rs)>0)
{

	?>
   <table id="tab1" cellspacing="10">
   <thead>
   	<tr>
    	<th>SL No</th>
        <th>Name</th>
        <th>Party Name</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
   </thead>
   <tbody>
   <?php
   $sl=1;
	while($row=mysql_fetch_array($rs))
	{
?>
		<tr id="bg_col1"><?php
		
		
		?>
        	<td><?php echo $sl ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['party'] ?></td>
            <td align="center"><a href="delete.php?id=<?php echo $row['id'] ?>" onClick="return confirm('Do you want to delete?')"><img src="images/delete.png"></a></td>
            <td align="center"><a href="update2.php?id=<?php echo $row['id']?>"><img src="images/edit.png"></a></td>
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