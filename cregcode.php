<?php include("config.php"); ?>
<?php
$name=$_POST['fname'];
$mname=$_POST['mname'];
$fname=$_FILES['f']['name'];
$ftype=$_FILES['f']['type'];
$fsize=$_FILES['f']['size'];
$fpath="user_files/".rand(000000,999999)."_".$fname;
$up=move_uploaded_file($_FILES['f']['tmp_name'],$fpath);
$sql="INSERT INTO `cnddat`(`name`,`party`,`fname`,`fsize`,`ftype`,`path`)VALUES('$name','$mname','$fname','$fsize','$ftype','$fpath')";
$res=mysql_query($sql);
if($res==1)
{
	
	header('location:adminprofile.php?msg=Registration sucessfull');
	exit;
}
else
{
	header('location:adminprofile.php?err=Registration unsucessfull');
	exit;
}
?>