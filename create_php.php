<?php

$qname = $_POST['question_name'];
$op1 =$_POST['option1'];
$op2= $_POST['option2'];
$op3= $_POST['option3'];
$op4 =$_POST['option4'];
$ans = $_POST['answer'];


$conn=new mysqli('localhost','root','','final');
if($conn->connect_error)
{
	die('Connection Failed...'.$conn->connect_error);
}
else
 {
    $stmt=$conn->prepare("insert into question (qname,op1,op2,op3,op4,ans)values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$qname,$op1,$op2,$op3,$op4,$ans);
    $stmt->execute();
    header('location:create.html');
    $stmt->close();
    $conn->close();

 }

?>
