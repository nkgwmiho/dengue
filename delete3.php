<?php 

include "dbcon.php"; 

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `subscribers` WHERE `id`='$id'";

     $result = $con->query($sql);

     if ($result == TRUE) {

        echo "user unsubscribed successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $con->error;

    }

} 

?>

<html>
    <body>
    <a href="view3.php" class="card-link">Back to table</a>
</body>