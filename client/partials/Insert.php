<html>

<body>


<?php

 $host = "localhost";
    $db_name = "pizzaBox";
    $username = "root";
    $password = "root";
 
  $conn = null;
 
        try{
            $conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
            $conn->exec("set names utf8");
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

if ($conn -> connect_error){
	die("Connection failed : " . $conn -> connect_error);
}else{
	echo "Connected successfully";
}
echo "<br>";

$isAdmin = "No";
if (isset($_POST[admin])) {
	$isAdmin = "Yes";
}else{
	$isAdmin = "No";
}
	

 $table_name = "personalinfo";
	
 $table_name = "users";
 

 $query = "INSERT INTO personalinfo (FirstName,LastName,Phone,Email,Password) VALUES ('".$_POST[fname]."','".$_POST[lname]."','".$_POST[phone]."','".$_POST[email]."','".$_POST[password]."')";
	
 $query1 = "INSERT INTO users (IsAdmin ) VALUES ('".$isAdmin."')";
	

	$stmt = $conn->prepare($query);
	
	$stmt1 = $conn->prepare($query1);

    
    // execute query
	
	
	if(!$stmt->execute()){
		echo $stmt->error;
	}
	
	if(!$stmt1->execute()){
		echo $stmt1->error;
	}
	
	
	$conn = null


?>

</body>

</html>
