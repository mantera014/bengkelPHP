<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "bengkel";
$connect = new mysqli($host, $username, $password, $db_name);
if($connect->connect_errno)
{
echo "Failed to connect to MySQL : ".$connect->error;
}
?>