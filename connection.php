<?php
$servername="localhost";
$username="root";
$password="";
$dbname="del";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "";
}
else
{
	echo "Connection Failed ".mysqli_connect_error;
}

?>