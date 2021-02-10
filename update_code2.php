<?php include("config.php"); ?>
<?php
$id=$_POST['id'];
$fname=$_POST['cname'];
$mname=$_POST['party'];
$lname=$_POST['count'];
$upd="UPDATE `cnddat` SET `name`='$fname',`party`='$mname',`count`='$lname' WHERE `id`=$id";
$res=mysql_query($upd) or die(mysql_error());
if($res==1)
{
	header('location:view.php?msg=Update sucessfully');
	exit;
}
else
{
	header('location:view.php?err=Update unsucessfull');
	exit;
}