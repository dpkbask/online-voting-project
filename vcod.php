<?php include('config.php') ?>
<?php
$vid=$_SESSION['info']['vid'];
$i="SELECT * FROM `voter` WHERE `vid`=$vid";
$r=mysql_query($i);
$t=mysql_fetch_array($r);
if($t['chek']==0)
{
$id=$_GET['id'];
$vid=$_SESSION['info']['vid'];
$c="SELECT * FROM `cnddat`";
mysql_query($c);
$g="UPDATE `cnddat` SET `count`=`count`+1 WHERE `id`=$id";
mysql_query($g);
$e="UPDATE `voter` SET `chek`=1 WHERE `vid`=$vid";
$u=mysql_query($e);
	if($u==1)
	{
		header('location:profile.php?msg=Voted sucessfully');
		exit;
	}
	else
	{
		header('location:profile.php?err=Voted Unsucessfully');
		exit;
	}
}
else
{
	header('location:profile.php?err=ALREADY VOTED');
		exit;
}
?>
