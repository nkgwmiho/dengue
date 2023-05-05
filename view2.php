<?php 
include "functions.php";
if(!isset($_SESSION['success']) ){
    header("Location: homePage.php");
 }
include "dbcon.php";


$sql = "SELECT * FROM cases";

$result = $con->query($sql);

?>

<!DOCTYPE html>

<html>


<head>
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/r-2.3.0/datatables.min.js"></script>
    
    <script src= "https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src= "https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src= "https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    
    
    <script>
  $(document).ready( function() {
  $('#table3').dataTable( {
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
                        <a href="view4.php" class="nav-link px-0 align-middle">
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
        <div class="col py-3">
        <div class="container">

<h2>Cases</h2>
<button onclick="window.location.href= 'create2.php';" type="button" class="btn btn-primary btn-lg">Create new type of Case</button>



<table class="table table-bordered" id="table3">

<thead class="thead-dark">
<tr>
<th>id</th>
<th>date of case</th>
<th>number of cases</th>
<th>subzoneID</th>
<th>Options</th>

</tr>







</thead>

<tbody> 

<?php

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

?>

            <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['dateOfCase']; ?></td>
            <td><?php echo $row['caseNum']; ?></td>

            <td><?php echo $row['subzoneID']; ?></td>

            

            

            <td><a class="btn btn-info" href="update2.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete2.php?id=<?php echo $row['id']; ?>">Delete</a></td>

            </tr>                       

<?php       }

    }

?>                

</tbody>

</table>

</div> 

        </div>
    </div>
   
</body>

  



</html>

