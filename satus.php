<?php include("config.php"); ?>
<?php

$id=$_GET['eid'];
$upd="UPDATE `VOTER` SET `chek`=0";
$res=mysql_query($upd) or die(mysql_error());
if($res==1)
{
	header('location:view2.php?msg=Update sucessfully');
	exit;
}
else
{
	header('location:view2.php?err=Update unsucessfull');
	exit;
}