<?php
if(empty($_SESSION['info']))
{
	header('location:login?err=please login');
	exit;
}
?>