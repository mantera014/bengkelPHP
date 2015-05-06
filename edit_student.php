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
	
	$sql_pelajar = "SELECT * FROM pelajar WHERE pel_id = ".$_GET['id']."";
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
	
	if(isset($_POST['edit']))
	$name=$_POST['name'];
	$notel=$_POST['notel'];
	
	$sql_edit_pelajar = "SELECT * FROM pelajar WHERE pel_id != '".$_GET['id']."' AND pel_nama = '".$name."'";
	if($result_edit_pelajar = $connect->query($sql_edit_pelajar))
	{
		if($total_edit_pelajar = $result_edit_pelajar->num_rows)
	{
	echo "<script language=javascript>window.location='edit-student.php?id=".$_GET['id']."';</script>";
		}
		else
			{
				$sql_edit_pelajar = "UPDATE pelajar SET pelajar_nama = '".$nama."' WHERE pel_id = '".$_GET['id']."'";
				if($result_edit_pelajar = $connect->query($sql_edit_pelajar))
				{
					echo "<script language=javascript>window.location='edit-student.php?id=".$_GET['id']."';</script>";
				}
				else
					{
						echo "<script language=javascript>window.location='edit-student.php?id=".$_GET['id']."';</script>";
					}
			}
}



?>

<html>
<body>
<h1>maklumat pelajar</h1><hr/>
	<form method="post">
		nama : <input type = "text" name = "nama" value = "<?php echo $rows_pelajar['pel_nama'];?>"/> <br/>
		email :<input type = "text" name = "email" value = "<?php echo $rows_pelajar['pel_email'];?>"/> <br/>
		notel : <input type = "text" name = "notel" value = "<?php echo $rows_pelajar['pel_notel'];?>"/> <br/>
		alamat :<input type = "text" name = "alamat" value = "<?php echo $rows_pelajar['pel_alamat'];?>"/> <br/>
		poskod : <input type = "text" name = "poskod" value = "<?php echo $rows_pelajar['pel_poskod'];?>"/> <br/>
		daerah : <input type = "text" name = "daerah" value = "<?php echo $rows_pelajar['pel_daerah'];?>"/> <br/>
		negeri : <input type = "text" name = "negeri" value = "<?php echo $rows_pelajar['pel_negeri'];?>"/> <br/>	
		username : <input type = "text" name = "username" value = "<?php echo $rows_pelajar['pel_username'];?>"/> <br/>	
		password : <input type = "text" name = "password" value = "<?php echo $rows_pelajar['pel_password'];?>"/> <br/>
		gambar : <input type = "text" name = "gambar" value = ""/> <br/>	
		<input type = "submit" name = "edit" value = "edit"/>
		<input type = "reset" name = "reset" value = "padam"/>
	</form>	

</body>
</html>