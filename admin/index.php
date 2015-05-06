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
	
// retrieve all data record from databased
	$sql_pelajar = "SELECT * FROM pelajar";
		if($result_pelajar = $connect->query($sql_pelajar))
	{
		$rows_pelajar = $result_pelajar->fetch_array();
		$total_pelajar = $result_pelajar->num_rows;
		$num_pelajar = 0;
	}
?>

<html>

<body>
Log masuk : <?php echo $rows_pelajar['pel_nama'];?><br/>
<a href="index.php?action=logout">log keluar </a> 
<hr>
<a href="add_student.php"> <button>tambah pelajar</button></a>
<table border="1">
	<tr>
		<td>bil</td>
		<td>nama pelajar</td>
		<td>alamat email</td>
		<td>notal</td>
		<td>alamat</td>
		<td>daerah</td>
		<td>poskod</td>
		<td>negeri</td>
		<td>action</td>
		
	</tr>
	<!-----looping student record---------->
	<?php do { ?>
	<tr>
		<td><?php echo ++$num_pelajar;?></td>
		<td><?php echo $rows_pelajar['pel_nama'];?></td>
		<td><?php echo $rows_pelajar['pel_email'];?></td>
		<td><?php echo $rows_pelajar['pel_notel'];?></td>
		<td><?php echo $rows_pelajar['pel_alamat'];?></td>
		<td><?php echo $rows_pelajar['pel_daerah'];?></td>
		<td><?php echo $rows_pelajar['pel_poskod'];?></td>
		<td><?php echo $rows_pelajar['pel_negeri'];?></td>
		<td>
			<a href="view_student.php?id=<?php echo $rows_pelajar['pel_id'];?>"><button>view</button></a>
			<a href="delete_student.php?id=<?php echo $rows_pelajar['pel_id'];?>"><button>delete</button></a>
			<a href="edit_student.php?id=<?php echo $rows_pelajar['pel_id'];?>"><button>edit</button></a>
		</td><
	</tr>
	<?php } while($rows_pelajar = $result_pelajar->fetch_array()); ?> 
</table> 
		rekod pelajar sebanyak <?php echo $total_pelajar;?>
</body>
</html>
