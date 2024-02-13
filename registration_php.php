<?php
$firstName = $_POST['first_name'];
$LastName =$_POST['last_name'];
$Email= $_POST['email'];
$username= $_POST['username'];
$password = $_POST['password'];


$conn = new mysqli('localhost','root','','final');
if($conn->connect_error)
{
	die('Connection Failed...'.$conn->connect_error);
}
else
{
	$stmt=$conn->prepare("insert into registration_form(firstname,lastname,email,username,password)values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstName,$LastName,$Email,$username,$password);
    $stmt->execute();
    echo"Registration successfully....";
    

    $stmt->close();
    $conn->close();
}

?>