<?php 

include "dbcon.php";

  if (isset($_POST['submit'])) {

    $year = $_POST['year'];

    $week = $_POST['week'];

    $type = $_POST['type'];

    $number = $_POST['Number'];

    

    $sql =  "INSERT INTO typeofcase (yearOfCase, weekOfCase, type, numberOfCase)\n" . "VALUES  (\"$year\", \"$week\", \"$type\" , \"$number\");";

    $result = $con->query($sql);

    if ($result == TRUE) {

    
      echo '<script>alert("New record created successfully.")</script>';

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $con->close(); 

  }

?>
<!DOCTYPE html>

<html>
<head>
 <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'> <!--for font -->
 <link rel = "stylesheet" href="createCss.css">
 
</head>
<body>
<div class = "formContainer">

<div class ="innerContainer">
<h2>Create new case entry</h2>

<form action="" method="POST">



    

    Year:<br>

    <input type="text" name="year" required>

    <br>

    Week:<br>

    <input type="text" name="week" required>

    <br>

    Type:<br>

    <input type="text" name="type" required>

    <br>

    Number:<br>

    <input type="text" name="Number" required>

    <br>



    <input type="submit" name="submit" value="Submit">
    <a href="view.php" class="card-link">Back to table</a>
 

</form>
</div>
</div>
</body>

</html>