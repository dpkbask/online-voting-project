<?php include('config.php'); ?>
<?php
$email=$_POST['email'];
$pwd=$_POST['pwd'];

$src="SELECT * FROM `voter` WHERE `email`='$email' AND `password`='$pwd'";
$rs=mysql_query($src);
if(mysql_num_rows($rs)>0)
{
	$row=mysql_fetch_array($rs);
	$_SESSION['info']=$row;
	header('location:profile.php?status=login sucessfully.....');
	exit;
}
else
{
	header('location:login.php?err=Invalid email or password');
	exit;
}
?>