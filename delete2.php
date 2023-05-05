<?php 

include "dbcon.php"; 

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `cases` WHERE `id`='$id'";

     $result = $con->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $con->error;

    }

} 

?>

<html>
    <body>
    <a href="view2.php" class="card-link">Back to table</a>
</body>