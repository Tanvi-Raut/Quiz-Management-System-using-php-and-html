<html>
<head>
  <style>
        body{
            background-image: url('quiz2.jpg');
            background-size: cover;          
        }
        
    </style>
    <title>Dashboard question</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<div class="container">
  <h1><center>Questions Record</center></h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Question ID</th>
      <th>Question Name</th>
      <th>Option1</th>
      <th>Option2</th>
      <th>Option3</th>
      <th>Option4</th>
      <th>Answer</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $conn=new mysqli('localhost','root','','final');
     if($conn->connect_error)
    {
        die('Connection Failed...'.$conn->connect_error);
   }

   $query="select * from question";
   $res=mysqli_query($conn,$query);
   $count=mysqli_num_rows($res);
   if($count>0)
   {
      while($row=mysqli_fetch_array($res)){

    ?>
    <tr>

      <td><?php echo $row['qid'];?></td>
      <td><?php echo $row['qname'];?></td>
      <td><?php echo $row['op1'];?></td>
      <td><?php echo $row['op2'];?></td>
      <td><?php echo $row['op3'];?></td>
      <td><?php echo $row['op4'];?></td>
      <td><?php echo $row['ans'];?></td>
      <td><a href="update.php ?id=<?php echo $row['qid']; ?>">Edit </a>|<a href="clear.php ?id=<?php echo $row['qid']; ?>"> Delete</a></td>
    </tr>
    <?php 
    } }
    else 
    {
      echo "No Record Found";
    }
    ?>

   
 </tbody>

</table>
</div>
</html>