<?php include("config.php"); ?>
<?php
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$dob=date("Y-m-d",strtotime($_POST['day']."-".$_POST['month']."-".$_POST['year']));
$gender=$_POST['gender'];
$add=$_POST['add'];
$age=$_POST['age'];
$no=$_POST['no'];
$city=$_POST['city'];
$state=$_POST['state'];
$src="SELECT `email` FROM `voter` WHERE `email`='$email'";
$rs=mysql_query($src);
if(mysql_num_rows($rs)>0)
    {
	    header('location:reg.php?err=You are already registered');
	    exit;
    }
	else
	{
		if($age>=18)
	    {
$sql="INSERT INTO `voter`(`fname`,`mname`,`lname`,`email`,`password`,`dob`,`gender`,`address`,`age`,`contact`,`city`,`state`)VALUES('$fname','$mname','$lname','$email','$pwd','$dob','$gender','$add','$age','$no','$city','$state')";
$res=mysql_query($sql);
		if($res==1)
			{
	
		header('location:reg.php?msg=Registration sucessfull');
		exit;
		}
		else
		{
		header('location:reg.php?err=Registration unsucessfull');
		exit;
		}
}
else
		{
			header('location:reg.php?err=Age must be more than 18');
		exit;
		}
	}

?>