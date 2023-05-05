<?php 

include "dbcon.php";
$name = $year = $type = $number = $id = "";

    if (isset($_POST['submit']) && !empty($_POST["submit"]))
    {
       

        $year = $_POST['Year'];
      

        $week = $_POST['Week'];

        $type = $_POST['Type'];

        $number = $_POST['Number'];

        $id = $_POST['id'];

        
       

        $sql = "UPDATE typeofcase \n" . "SET yearOfCase = \"$year\", weekOfCase = \"$week\", numberOfCase = \"$number\",  type= \"$type\"\n" . "WHERE typeID = \"$id\";"; 

        $result = $con->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $con->error;

        }

    } 



if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `typeofcase` WHERE `typeID`='$id'";

    $result = $con->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $year = $row ['yearOfCase'];

            $week = $row['weekOfCase'];
    
            $type = $row['type'];
    
            $number = $row['numberOfCase'];
    
            $id = $row['typeID'];

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
        <h2>Case Update Form</h2>

        <form action="" method="post">

          

            

            Year:<br>

            <input type="text" name="Year" value="<?php echo $year; ?>">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <br>

            Week:<br>

            <input type="text" name="Week" value="<?php echo $week; ?>">

            <br>

           Type:<br>

            <input type="text" name="Type" value="<?php echo $type; ?>">

            <br>

            Number:<br>

            <input type="text" name="Number" value="<?php echo $number; ?>">

            <br>

            
            <input type="submit" value="update" name="submit" >
            <a href="view.php" class="card-link">Back to table</a>

          

        </form> 
        </div>
    </div>
        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 