
<?php

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$password= $_POST['password'];
$conn = new mysqli('localhost','root','','fuck');
if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registrationn(firstname, lastname, email, password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss",$firstname, $lastname, $email, $password);
	    $stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
