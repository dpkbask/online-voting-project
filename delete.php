<?php include("config.php") ?>
<?php
$id=$_GET['id'];
$del="DELETE FROM `cnddat` WHERE `id`=$id";
$res=mysql_query($del);
if($res==1)
{
	//echo "Record delete";
	header('location:view.php?msg=Selected data has been delete');
	exit;
}
else
{
	header('location:view.php?err=Unsucessfull to delete');
	exit;
}
?>