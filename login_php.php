<?php
session_start();
$conn = new mysqli('localhost','root','','final');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else 
 {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query="select * from registration_form where username ='$username' and password='$password'";
  $result=$conn->query($query);

  if($result->num_rows == 1)
  {
     $_SESSION['username']=$username;
     header("Location: home.html");
     exit; 
  }
  else
  {
     echo"<h3>Invalid username or password</h3><a href='login.html'>Try again</a>";
  }
}

?>