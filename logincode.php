<?php include('config.php'); ?>
<?php
$usrnm=$_POST['usrnm'];
$pwd=$_POST['pwd'];

$src="SELECT * FROM `admin` WHERE `username`='$usrnm' AND `password`='$pwd'";
$rs=mysql_query($src);
if(mysql_num_rows($rs)>0)
{
	$row=mysql_fetch_array($rs);
	$_SESSION['info']=$row;
	header('location:adminprofile.php?status=login sucessfully.....');
	exit;
}
else
{
	header('location:adminlogin.php?err=Invalid email or password');
	exit;
}
?>