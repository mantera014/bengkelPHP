<?php
session_start() ;
include('../config.php');
if(!$_SESSION['pen_id'])
{
	echo "<script language=javascript>alert('sila daftar semula.'); window.location='../login.php';</script>";
}


if($_GET['action']=="logout")
{
	unset($_SESSION['pen_id']);
	echo "<script language=javascript>alert('sila daftar semula.'); window.location='../login.php';</script>";
}
?>
<html>
<body>
Log masuk : nama pentadbir <br/>
<a href="index.php?action=logout">log keluar </a> 
</body>
</html>
