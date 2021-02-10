<?php include('config.php')?>
<?php
$id=$_SESSION['info']['vid'];
$sql="SELECT * FROM `result`";
$rs=mysql_query($sql);
if(mysql_num_rows($rs)>0)
{
	while($row=mysql_fetch_array($rs))
	{
		if($row['show']==0)
		{
			header('location:view3.php');
			exit;
		}
		else
		{
			header('location:profile.php?msg=Result not Uploaded');
			exit;
		}
	}
}
else
{
	header('location:profile.php?msg=Result not Uploaded');
			exit;
}
?>