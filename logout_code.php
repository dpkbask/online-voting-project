<?php include('config.php'); ?>
<?php
session_destroy();
header('location:adminlogin.php');
exit;
?>