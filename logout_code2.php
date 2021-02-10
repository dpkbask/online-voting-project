<?php include('config.php'); ?>
<?php
session_destroy();
header('location:loginpage.php');
exit;
?>