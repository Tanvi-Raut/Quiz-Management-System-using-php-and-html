<?php

$qname = $_POST['question_name'];
$op1 =$_POST['option1'];
$op2= $_POST['option2'];
$op3= $_POST['option3'];
$op4 =$_POST['option4'];
$ans = $_POST['answer'];
$id = $_POST['question_id'];

$conn=new mysqli('localhost','root','','final');
if($conn->connect_error)
{
	die('Connection Failed...'.$conn->connect_error);
}
else
 {
    $query = "update question set qname='$qname',op1='$op1',op2='$op2',op3='$op3',op4='$op4',ans='$ans' where qid = '$id'";
    $res = mysqli_query($conn,$query);
    if($res)
    {
    	$_SESSION['SUCCESS']='Data Updated Successfully!';
      header('Location:delete.php');
    }
    else 
    {
    	echo"Data not updated,please try again !";

    }
    $stmt->close();
    $conn->close();

 }

?>