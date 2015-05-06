
<?php
session_start();
include('config.php');

if(isset($_post['login']))

$sql_login_pentadbir="SELECT * FROM pentadbir WHERE pen_username = '".$username."' AND pen_password = '".$password."'";
if($result_login_pentadbir = $connect->query($sql_login_pentadbir))
{
	$row_login_pentadbir = $result_login_pentadbir->fetch_array();
	if($total_login_pentadbir = $result_login_pentadbir->num_rows)
	{
		$session['pen_id'] = $row_login_pentadbir['pen_id'];
		echo"<script language = javascript>window.location = 'admin/index.php';</script>";
		
	}
	else
	{
		echo"<script language=javascript>alert('tidak berjaya');window.location='login.php'</script>";
	}
	
}


?>
