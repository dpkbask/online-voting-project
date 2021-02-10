<?php include('config.php'); include('session.php');?>
<?php
$sql="UPDATE `result` SET `show`=1";
$rs=mysql_query($sql);
if($rs==1)
{
	header('location:adminprofile.php?msg=Page Disabled');
			exit;
}
else
{
	header('location:profile.php?msg=Page Disable failed');
			exit;
}
?>