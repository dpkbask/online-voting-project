<?php include("config.php"); ?>
<?php
$id=$_SESSION['info']['eid'];
$pwd=$_POST['pwd'];
$upd="UPDATE `admin` SET `password`='$pwd' WHERE `eid`='$id'";
$res=mysql_query($upd) or die(mysql_error());
if($res==1)
{
	header('location:adminprofile.php?msg=Update sucessfully');
	exit;
}
else
{
	header('location:adminprofile.php?err=Update unsucessfull');
	exit;
}