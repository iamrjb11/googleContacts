<?php
$servername = "localhost";
$username="root";
$password="";
$db_name = "test";
$conn = mysqli_connect($servername, $username, $password, $db_name, 3306);
if(! $conn){
	die("Sry");

}
else{
	echo "DBMS Success";
}
?>