<?php include('config.php') ?>
<?php
$fname=$_FILES['f']['name'];
$ftype=$_FILES['f']['type'];
$fsize=$_FILES['f']['size'];
$id=$_SESSION['info']['vid'];
$fpath="user_files/".rand(000000,999999)."_".$fname;

$up=move_uploaded_file($_FILES['f']['tmp_name'],$fpath);
if($up==1)
{
		$sql="UPDATE `voter` SET `pth`='$fpath' WHERE `vid`=$id";

	$res=mysql_query($sql)or die(mysql_error());
	if($res==1)
	{
		header('location:profile.php?msg=File upload sucessfully');
		exit;
	}
	else
	{
		header('location:profile.php?err=Unsucessfull');
		exit;
	}
}
else
{
	echo "uploading unsucessfull";
}
?>