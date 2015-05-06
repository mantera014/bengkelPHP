
<?php
session_start();
include('config.php');

if($_SESSION['pen_id'])
{
	echo "";
}

if(isset($_POST['login']))
{
//field variable declaration
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//code for login
	$sql_login_pentadbir = "SELECT * FROM pentadbir WHERE pen_username = '".$username."' AND pen_password = '".$password."'";
	if ($result_login_pentadbir = $connect->query($sql_login_pentadbir))
	{
		$row_login_pentadbir = $result_login_pentadbir->fetch_array();
		if($total_login_pentadbir = $result_login_pentadbir->num_rows)
			
		{
			//if success
				$_SESSION['pen_id'] = $row_login_pentadbir['pen_id'];
				echo "";
			
		}
		
		
		else	
			

		{
			
			//code for login
			$sql_login_pelajar = "SELECT * FROM pelajar WHERE pel_username = '".$username."' AND pel_password = '".$password."'";
			if ($result_login_pelajar = $connect->query($sql_login_pelajar))
			{
				$row_login_pelajar = $result_login_pelajar->fetch_array();
				if($total_login_pelajar = $result_login_pelajar->num_rows)
					
				{
					//if success
						$_SESSION['pel_id'] = $row_login_pelajar['pel_id'];
						echo "";
					
				}
			}
		}
	}

}

?>
<html>
<body>

<form method="post" action="">
<h2> Login </h2>
username : <input type ="text" name = "username"/><br/><br/>
password  : <input type ="text" name = "password"/>
<br/><br/>
<input type ="submit" name="login" value ="login"/>

</form>
</body>
</html>


