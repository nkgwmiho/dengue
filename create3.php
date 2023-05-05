<?php 

include "dbcon.php";

  if (isset($_POST['submit'])) {

    $email = $_POST['email'];

  

    

    $sql =  "INSERT INTO subscribers (email)\n" . "VALUES  (\"$email\");";

    $result = $con->query($sql);

    if ($result == TRUE) {
      echo '<script>alert("New subscriber created successfully.")</script>';
     
      

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
<h2>Create new subscriber</h2>
<form action="" method="POST">
    Email:<br>
    <input type="email" name="email" required>
    <br>
    <input type="submit" name="submit" value="Submit">
    <a href="view3.php" class="card-link">Back to table</a>
 

</form>
</div>
</div>

</body>

</html>