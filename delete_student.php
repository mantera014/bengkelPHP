 <?php
 //start seccion
session_start() ;

//connection to databased
include('../config.php');

$sql_pelajar = "DELETE FROM pelajar WHERE pel_id = ".$_GET['id']."";
	if($result_padam_pelajar = $connect->query($sql_pelajar))
	
		{
			echo "<script language=javascript>alert('makluamat dipadam.');window.location='index.php';</script>";
		}
		else
		{
			echo "<script language=javascript>alert('makluamat dipadam.');window.location='index.php';</script>";
		}
?>