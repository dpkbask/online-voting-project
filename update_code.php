<?php include("config.php"); ?>
<?php
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$dob=date("Y-m-d",strtotime($_POST['day']."-".$_POST['month']."-".$_POST['year']));
$gender=$_POST['gender'];
$id=$_SESSION['info']['vid'];
$add=$_POST['add'];
$age=$_POST['age'];
$no=$_POST['no'];
$city=$_POST['city'];
$state=$_POST['state'];
$upd="UPDATE `voter` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`email`='$email',`password`='$pwd',`dob`='$dob',`gender`='$gender',`address`='$add',`age`='$age',`contact`='$no',`city`='$city',`state`='$state'  WHERE `vid`=$id";
$res=mysql_query($upd) or die(mysql_error());
if($res==1)
{
	header('location:profile.php?msg=Update sucessfully');
	exit;
}
else
{
	header('location:profile.php?err=Update unsucessfull');
	exit;
}