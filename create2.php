<?php 

include "dbcon.php";

  if (isset($_POST['submit'])) {

    $numberOfCase = $_POST['caseNum'];

    $dateOfCase = $_POST['dateOfCase'];

    $subzoneID = $_POST['subzonerID'];

    

   // $sql = "INSERT INTO `cases`(`dateOfCase`, `caseNum', `subzoneID`) VALUES ('".$dateOfCase."','".$numberOfCase."','".$subzoneID."')";
    $sql =  "INSERT INTO cases (dateOfCase, caseNum, subzoneID)\n" . "VALUES  (\"$dateOfCase\", \"$numberOfCase\" , \"$subzoneID\");";
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



   

    Date of case (YYYY-MM-DD):<br>

    <input type="text" name="dateOfCase">

    <br>

    Number of cases : <br>

    <input type="text" name="caseNum">

    <br>

    SubzoneID:<br>

    <input type="text" name="subzonerID">

    <br>


    <input type="submit" name="submit" value="Submit">
    <a href="view2.php" class="card-link">Back to table</a>

  

</form>
</div>
</div>

</body>

</html>