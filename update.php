<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-image: url('quiz2.jpg');
            background-size: cover;          
        }
        
    </style>
    <title>Update question</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container2">
        <h2>Update question</h2>
        <form class="form-horizontal" method="post" action="update_ori.php" onsubmit= "return formvalidation();">
        <?php
            $conn=new mysqli('localhost','root','','final');
           if($conn->connect_error)
          {
             die('Connection Failed...'.$conn->connect_error);
          }
          else
          {
            $question_id = $_GET['id'];
            $query="select * from question where qid='$question_id'";
            $res=mysqli_query($conn,$query);
            $data=mysqli_fetch_array($res);
           }    
            ?>
            <input type = "hidden" name = "question_id" value= "<?php echo $question_id; ?>">


            <label for="Question name">Question:</label>
            <input type="text" name="question_name" value="<?php echo $data['qname'] ?>" required>

            <label for="option1">Option1:</label>
            <input type="text" name="option1" value="<?php echo $data['op1'] ?>" required>

            <label for="option2">Option2:</label>
            <input type="text" name="option2"value="<?php echo $data['op2'] ?>" required>

            <label for="option3">Option3:</label>
            <input type="text" name="option3" value="<?php echo $data['op3'] ?>" required>

            <label for="option4">Option4:</label>
            <input type="text" name="option4"  value="<?php echo $data['op4'] ?>"required>

            <label for="answer">Answer:</label>
            <input type="text" name="answer" value="<?php echo $data['ans'] ?>" required>

            <input type="submit" name="ADD" value="UPDATE QUESTION">
            
        </form>
         <a href="home.html"> Back to home page</a>
        
    </div>
</body>
</html>