<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pizzbox";
$conn = new mysqli($servername,$username,$password);

if ($conn -> connect_error){
	die("Connection failed : " . $conn -> connect_error);
}else{
	echo "Connected successfully";
}
echo "<br>";
?>
