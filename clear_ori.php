<?php
session_start();


$id = $_POST['question_id'];

$conn=new mysqli('localhost','root','','final');
if($conn->connect_error)
{
	die('Connection Failed...'.$conn->connect_error);
}
else
 {
    $query = "delete from question where qid = '$id'";
    $res = mysqli_query($conn,$query);
    if($res)
    {
    	$_SESSION['SUCCESS']='Data Deleted Successfully!';
      header('Location:delete.php');
    }
    else 
    {
    	echo"Data not deleted,please try again !";

    }
    $stmt->close();
    $conn->close();

 }

?>