 <?php
session_start() ;			//start seccion
include('../config.php');	//connection to databased

if(!$_SESSION['pel_id'])	//secure page
	{echo "<script language=javascript>alert('sila daftar semula.'); window.location='../login.php';</script>";}
	
if($_GET['action']=="logout")	//logout
	
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
	
if (isset($_POST['add']))

{
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$nombor = $_POST['notal'];
		$alamat = $_POST['alamat'];
		$daerah = $_POST['daerah'];
		$poskod = $_POST['poskod'];
		$negeri = $_POST['negeri'];
		
		
		$sql_tambah_pelajar = "INSERT INTO pelajar (pel_nama, pel_email, pel_notel, pel_alamat, pel_daerah, pel_poskod, pel_negeri) VALUES ('".$nama."', '".$email."', '".$nombor."', '".$alamat."', '".$daerah."', '".$poskod."', '".$negeri."')"; 
		if($result_tambah_pelajar = $connect->query($sql_tambah_pelajar))
		{
		echo "<script language=javascript>alert('bejaya.'); window.location='index.php';</script>";
		}
		{
		echo "<script language=javascript>alert('tidak bejaya.'); window.location='add_student.php';</script>";
		}
}
 ?>


<html>
<body>
<h1>tambah pelajar</h1><hr/>
<form method = "post">
nama pelajar : <input type = "text" name = "nama" /></br>
email        : <input type = "text" name = "email" /></br></br>
nama pelajar : <input type = "text" name = "notal" /></br>
email        : <input type = "text" name = "alamat" /></br></br>
nama pelajar : <input type = "text" name = "daerah" /></br>
email        : <input type = "text" name = "poskod" /></br></br>
nama pelajar : <input type = "text" name = "negeri" /></br>

<input type = "submit" name = "add" value = "tambah" />
<input type = "reset" name = "reset" value = "padam"/>
</form>
</body>
</html>