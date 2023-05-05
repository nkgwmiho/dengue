
<?php 
include "functions.php";
if(!isset($_SESSION['success']) ){
    header("Location: homePage.php");
 }
include "dbcon.php";


?>

<!DOCTYPE html>

<html>


<head>
<style>
   .tableContainer{
 
    max-width: 75%;
    background-color: grey;
   }
    </style>
<title>Files Admin Page</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/r-2.3.0/datatables.min.js"></script>
    
    <script src= "https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src= "https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src= "https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    
    
    <script>
  $(document).ready( function() {
  $('#table4').dataTable( {
    "fnDrawCallback": function( oSettings ) {
      
    }
  } );
} );
    </script>

 <!-- font awesome -->
 <script src="https://kit.fontawesome.com/c41f2cc85b.js" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Admin Logout</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to logout? This will delete the current session.
                    </div>
                    <div class="modal-footer">
                    <a href="logout.php">Logout</a>
                    </div>
                    </div>
                </div>
                </div>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-danger">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Admin Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                    <a href="view5.php" class="nav-link align-middle px-0">
                        <i class="fa-solid fa-file-contract" style="color:white"></i> <span class="ms-1 d-none d-sm-inline text-white">Contact Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <i class="fa fa-solid fa-table" style="color:white"></i> <span class="ms-1 d-none d-sm-inline text-white">Managed Tables</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="view2.php" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Cases</span> </a>
                            </li>
                            <li>
                                <a href="view.php" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Types of Cases</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="view3.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-person" style="color:white"></i> <span class="ms-1 d-none d-sm-inline text-white">Subscribers</span></a>
                    </li>
                    
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-file" style="color:white"></i> <span class="ms-1 d-none d-sm-inline text-white">Files </span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="admin.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Admin</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#exampleModal">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
       
        <table class="table w-75">
        <thead>
            <tr>
            <th scope="col">Table</th>
            <th scope="col">Options</th>
            <th scope="col">Results</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">Subscribers</th>
            <td><form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="submit" value="View Entries">
</form></td>
<td>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $sql = "SELECT * FROM subscribers";
                    
                    $result = $con->query($sql);
                    if (mysqli_num_rows($result) > 0) {
                        // Open the output file for writing
                        $outputFile = fopen("subs.txt", "w") or die("Unable to open file!");
                        while($row = mysqli_fetch_assoc($result)) {
                            $entry = $row["email"] . "\n";
                            fwrite($outputFile, $entry);
                        }
                        // Close the output file
                        fclose($outputFile);
                    
                        // Open the output file for reading
                        $inputFile = fopen("subs.txt", "r") or die("Unable to open file! But File has been written");
                        
                         // Output each line of the input file
                         while(!feof($inputFile)) {
                            echo fgets($inputFile) . "<br>";
                        }
                    
                        // Close the input file
                        fclose($inputFile);
                    } else {
                        echo "No entries found.";
                    }
                    mysqli_close($con);
                    }
            ?>
            </td>
            
            
            </tr>
           
            
        </tbody>
        
        </table>
</div>

       
      

</body>

</html>



