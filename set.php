<?php include('config.php'); include('session.php');?>
<?php
$sql="UPDATE `result` SET `show`=0";
$rs=mysql_query($sql);
if($rs==1)
{
	header('location:adminprofile.php?msg=Page Enabled');
			exit;
}
else
{
	header('location:profile.php?msg=Page Enable failed');
			exit;
}
?>