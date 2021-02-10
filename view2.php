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
<?php
$src="SELECT * FROM `voter`";
$rs=mysql_query($src);
if(mysql_num_rows($rs)>0)
{
	
	?>
   <table id="tab1" cellspacing="10">
   <thead>
   	<tr>
    	<th>SL No</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Check</th>
    </tr>
   </thead>
   <tbody>
   <?php
   $sl=1;
	while($row=mysql_fetch_array($rs))
	{
		
		if($sl%2==0)
		{
			?><tr id="bg_col1"><?php
		}
		else
		{
			?><tr id="bg_col2"><?php
		}
		?>
        	<td><?php echo $sl ?></td>
            <td><?php echo $row['fname'] ?></td>
            <td><?php echo $row['mname'] ?></td>
            <td><?php echo $row['lname'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><?php echo $row['dob'] ?></td>
            <td><?php echo $row['gender'] ?></td>
             <td><?php echo $row['chek'] ?></td>
        </tr>
		<?php
		$sl++;
	}
	?>
    </tbody>
    </table>
    <button><a href="satus.php?id=<?php echo $row['vid'] ?>"><img src="images/edit.png">Change Check</a></button>

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