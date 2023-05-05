<?php 
ini_set("display_errors",true);
include "dbcon.php";


    if (isset($_POST['submit']) && !empty($_POST["submit"]))
    {
       



    

        $numberOfCase = $_POST['numberCases'];

        $dateOfCase = $_POST['dateCase'];

        $subzoneid = $_POST['subzoneid'];

        $id = $_POST['id'];

        
       

        //$sql = "UPDATE `cases` SET `dateOfCase='$dateOfCase',`numberOfCases`='$numberOfCase',`subzoneID`='$subzoneid', WHERE `id`='$id'"; 
        $sql = "UPDATE cases \n" . "SET dateOfCase = \"$dateOfCase\", caseNum = \"$numberOfCase\", subzoneID = \"$subzoneid\"\n" . "WHERE id = \"$id\";";
        $result = $con->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $con->error;

        }

    } 



if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `cases` WHERE `id`='$id'";

    $result = $con->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $numberOfCase = $row ['caseNum'];

            $dateOfCase = $row['dateOfCase'];
    
            $subzoneid = $row['subzoneID'];
    
            
    
            $id = $row['id'];

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
        <h2>Cases Update Form</h2>

        <form action="" method="post">

        

            

            Date of case:<br>

            <input type="text" name="dateCase" placeholder = "date format is YYYY-MM-DD"value="<?php echo $dateOfCase; ?>">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <br>

            Number of cases:<br>

            <input type="text" name="numberCases" value="<?php echo $numberOfCase; ?>">

            <br>

           SubzoneID:<br>

            <input type="text" name="subzoneid" value="<?php echo $subzoneid; ?>">

            <br>

        

            
            <input type="submit" value="update" name="submit" >
            <a href="view2.php" class="card-link">Back to table</a>

        

        </form> 
        </div>
        </div>
        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view2.php');

    } 

}

?> 