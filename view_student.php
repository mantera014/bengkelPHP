 <?php
 //start seccion
session_start() ;

//connection to databased
include('../config.php');

//secure page
if(!$_SESSION['pel_id'])
{
	echo "<script language=javascript>alert('sila daftar semula.'); window.location='../login.php';</script>";
}

////logout
if($_GET['action']=="logout")
	
	{
		unset($_SESSION['pel_id']);
		echo "<script language=javascript>alert('sila daftar semula.'); window.location='../login.php';</script>";
	}	
	
	
	//retrieve administrator record when login
	$sql_pelajar = "SELECT * FROM pelajar WHERE pel_id = '".$_SESSION['pel_id']."'";
	if($result_pelajar = $connect->query($sql_pelajar))
	
	{
		$rows_pelajar = $result_pelajar->fetch_array();
		$total_pelajar = $result_pelajar->num_rows;
	}
	
	$sql_pelajar = "SELECT * FROM pelajar WHERE pelajar_id = ".$_GET['id']."";
	if($result_pelajar = $connect->query($sql_pelajar))
	{
		
	$rows_pelajar = $result_pelajar->fetch_array();
	if(!$total_pelajar = $result_pelajar->num_rows)
		{
			echo "<script language=javascript>window.location='index.php';</script>";
		}
		else
		{
			echo "<script language=javascript window.location='index.php';</script>";
		}
	}
?>

<html>
<body>
<h1>maklumat pelajar</h1><hr/>
	
		nama : <?php echo $rows_pelajar['pel_nama'];?> <br/>
		email :<?php echo $rows_pelajar['pel_email'];?> <br/> <br/>	
		notel : <br/>
		alamat : <br/>
		poskod : <br/>
		daerah : <br/>
		negeri : <br/>	
		username : <br/>	
		password : <br/>	
		gambar : <br/>	
		

</body>
</html>