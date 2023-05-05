<?php global $adminEmail, $adminPassword; ?>
<html>
<?php include('functions.php') ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="dengueStatsCss.scss">
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'> <!--for font -->
<!-- bootstrap scripts -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!--navbar-->
<meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript">
        $(window).on('scroll',function(){
            if($(window).scrollTop()){
                $('nav').addClass('black');
            }
            else{
                $('nav').removeClass('black');
            }
        })
  /*menu button onclick function*/         $(document).ready(function(){
                $('.menu h4').click(function(){
                    $("nav ul").toggleClass("active")
            })
            })
        </script>
    <!--navbar-->
    <!-- modal -->
    <script>
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')

      myModal.addEventListener('shown.bs.modal', function () {
      myInput.focus()
      })

    </script>
    <!-- modal -->

    <!-- table -->
    <script src= "https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src= "https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src= "https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
    $(document).ready( function() {
    $('#example').dataTable( {
        "fnDrawCallback": function( oSettings ) {
        
        }
    } );
    } );
    </script>
    <!-- table -->

    
</head>
<header>
<div class="responsive-bar">
        <div class="logo">
            <img src="logo.png" alt="logo"/>
            </div>
            <div class="menu">
            <h4>Menu</h4>
            </div>
        </div>
		<nav>
            <div class="logo">
            <img src="logo.png" alt="logo"/>
            </div>
         <ul>
            <li><a href="homePage.php">Home</a></li>
             <li><a href="dengueStats.php">Dengue Stats</a></li>
             <li><a href="dengueInfo.php">Dengue Info</a></li>
             <li><a href="contactus.php">Contact Us</a></li>
             
             <li id="loginBtn"><button type="button"  class="btn btn-Danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Admin Login
      </button></a></li>
            
            </ul>
           
        </nav>
        
        <div class ="section1">
            <p class = "section1Title">
                Dengue Stats
            </p>
            <p class ="section1Para">In this page, you can find 
                and search for Dengue statistics
            </p>
        </div>
        <div class="section2">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search the number of cases by date and area</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Enter 'central' or 'north-east' or 'south-east' or 'south-west' " >
                                       
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Total number of cases in an area in a week by chosen date</th>
                                <th>Week of the year</th>
                            </tr>
                            </thead>
                            
                            
                            
                                <?php 
                                    include "dbcon.php";
                                    $subzoneID = '';
                                    $area = '';
                                    if(isset($_GET['search']) && isset($_GET['to_date']))
                                    {
                                        $subzoneID = $_GET['search'];
                                        if($subzoneID == 'central'){
                                            $area = '1';
                                            
                                        }
                                        if($subzoneID == 'north-east'){
                                            $area = '2';
                                        }
                                        if($subzoneID =='south-east'){
                                            $area = '3';
                                        }
                                        if($subzoneID == 'south-west'){
                                            $area = '4';
                                           
                                        }
                                        
                                        
                                        
                                        $dateOfCase = $_GET['to_date'];
                                        $query = "SELECT caseNum FROM cases WHERE dateOfCase = '$dateOfCase' AND subzoneID = $area";
                                        $query2 = "SELECT WeekOfTheYear , totalNumOfCases,subzoneID 
                                        FROM (
                                        SELECT weekofyear(dateOfCase) as WeekOfTheYear, SUM(caseNum) as totalNumOfCases, subzoneID
                                        FROM cases
                                        WHERE weekofyear(dateOfCase) = weekofyear('$dateOfCase') AND  subzoneID = $area
                                        GROUP BY weekofyear(dateOfCase), subzoneID
                                        )
                                        
                                        as total;";
                                        
                                        $query_run = mysqli_query($con, $query);
                                        $query_run2 = mysqli_query($con, $query2);

                                        
                                        
                                        
                                        if(mysqli_num_rows($query_run2) > 0)
                                        {
                                            while(($items2 = mysqli_fetch_assoc($query_run2)))
                                          
                                            {   
                                                echo "<tr><td>" .  $items2["totalNumOfCases"].  "</td><td>" . $items2["WeekOfTheYear"].  "<br>";
                                                ?>
                                                
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No cases found for this date</td>
                                                </tr>
                                            <?php
                                        }
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            
                                            while(($items = mysqli_fetch_assoc($query_run)))
                                            {
                                                ?>
                                                
                                            
                                                            <tr>
                                                                <th>Total Number of cases from chosen date</th> </tr>
                                                            <td><?= $items['caseNum']; ?></td>
                                                    
                                                    
                                                    
                                                            
                                                            
                                                        </tr>
                                                    
                                                
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No cases found for this date</td>
                                                </tr>
                                                
                                        
                                            <?php

                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


<div class="table-DengueCases">
    <div class="header"></div>
    <h3>Type Of Dengue Cases Table</h3>
<table class="table table-bordered" id= "example">

<thead class="thead-dark">
  <tr>
    
    <th>Year</th>
    <th>Week</th>
    <th>Type</th>
    <th>Number of cases </th>
  </tr>
</thead>
        
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dengue";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `typeofcase`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row1 = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row1["yearOfCase"]. "</td><td>" . $row1["weekOfCase"]. "</td><td>" . $row1["type"]. "</td><td>". $row1["numberOfCase"] . "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</table>


</div>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Find Max and Min cases from a date range</h4>
                    </div>
                    <div class="card-body">
                    
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <input type="date" name="from_date1" value="<?php if(isset($_GET['from_date1'])){ echo $_GET['from_date1']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" name="to_date1" value="<?php if(isset($_GET['to_date1'])){ echo $_GET['to_date1']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Case Type</label>
                                        <input type="text" name="caseType" required value="<?php if(isset($_GET['caseType'])){echo $_GET['caseType']; } ?>" class="form-control" placeholder="Enter 'Dengue' or 'DHF' " >
                                       
                                    </div>
                                    </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    
                                        <label>Click to Search</label> <br>
                                      <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-borderd">
                            <thead>
                                <tr>
                                    <th>The highest number of cases between 2 selected dates</th>
                                    <th>Case Type </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                           
                            <?php 
                                include "dbcon.php";

                                if(isset($_GET['from_date1']) && isset($_GET['to_date1']) && isset($_GET['caseType']))
                                {
                                    $from_date1 = $_GET['from_date1'];
                                    

                                    $to_date1 = $_GET['to_date1'];
                                   
                                    $caseType = $_GET['caseType'];
                                    
                                   
                                    $query4 = "SELECT (MIN(numberOfCase)) as MinNumberOfSelectedCase, type as CaseType, weekOfCase
                                    FROM typeofcase 
                                    WHERE yearOfCase = (SELECT DISTINCT yearOfCase FROM typeOfCase WHERE yearOfCase = year('$from_date1')) 
                                    AND weekOfCase IN (
                                        SELECT DISTINCT weekOfCase
                                      FROM typeOfCase
                                      WHERE weekOfCase IN (
                                            SELECT DISTINCT weekOfCase
                                        FROM typeOfCase
                                        WHERE weekOfCase >= weekofyear('$from_date1')
                                          )
                                        AND weekOfCase IN (
                                            SELECT DISTINCT weekOfCase
                                        FROM typeOfCase
                                        WHERE weekOfCase <= weekofyear('$to_date1')
                                            )
                                        )
                                    AND type = '$caseType ' ";
                                      

                                      

                                     

                                     

                                      

                                      

                                     

                                      

                                      
                                    $query_run4 = mysqli_query($con, $query4);

                                    $query5 = "SELECT (MAX(numberOfCase)) as MaxNumberOfSelectedCase, type as CaseType, weekOfCase
                                    FROM typeofcase 
                                    WHERE yearOfCase = (SELECT DISTINCT yearOfCase FROM typeOfCase WHERE yearOfCase = year('$from_date1')) 
                                    AND weekOfCase IN (
                                        SELECT DISTINCT weekOfCase
                                      FROM typeOfCase
                                      WHERE weekOfCase IN (
                                            SELECT DISTINCT weekOfCase
                                        FROM typeOfCase
                                        WHERE weekOfCase >= weekofyear('$from_date1')
                                          )
                                        AND weekOfCase IN (
                                            SELECT DISTINCT weekOfCase
                                        FROM typeOfCase
                                        WHERE weekOfCase <= weekofyear('$to_date1')
                                            )
                                        )
                                    AND type = '$caseType ' ";
                                      

                                      
                                    $query_run5= mysqli_query($con, $query5);

                                    if(mysqli_num_rows($query_run5) > 0)
                                    {   
                                       
                                        foreach($query_run5 as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['MaxNumberOfSelectedCase']; ?></td>
                                                <td><?= $row['CaseType']; ?></td>
                                                
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Record Found";
                                    }

                                    if(mysqli_num_rows($query_run4) > 0)
                                    {   
                                       
                                        foreach($query_run4 as $row)
                                        {
                                            ?>
                                            <tr>
                                                <th>The lowest number of cases between 2 selected dates</th>
                                                <th>Case type</th></tr>
                                                <td><?= $row['MinNumberOfSelectedCase']; ?></td>
                                                <td><?= $row['CaseType']; ?></td>
                                                
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Record Found";
                                    }
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

   







        </div>
        
    
        <footer>
            <div id ="footerContainer">
            <div class='row'>
                <div id ="about"> <span class="boldFooter">About the team</span><p>We're a group of year 2 SIT computer engineering student's
                 who are trying to make information and statistics on Dengue easy and intuitive to access.</p>
                 <form id ="mail" action="subscribe.php"  method="post">
                    
                    <div class="containerMail">
                    <span class="boldFooter">Sign up for our News Letters</span>
                    </div>
                   
                    <div class="containerMail" >
                        
                        <input type="email" placeholder="Enter Email address" name="email" required>
                        
                    </div>

                    <div class="containerMail">
                        <input type="submit" value="Subscribe to Our NewsLetter" name="ltrBtn">
                    </div>
                </form>
  
                    
                </div>

                          
                 <div id = "Links">
                
                    <ul id ="linksFooter">
                    <span class="boldFooter">Links</span>
                        <li class="linkFooterItem"><a href="homePage.php" style = "text-decoration: none; color: inherit;">Home</li></a>
                        <li class="linkFooterItem"><a href="dengueStats.php" style = "text-decoration: none; color: inherit;">Dengue statistics</li></a>
                        <li class="linkFooterItem"><a href="dengueInfo.php" style = "text-decoration: none; color: inherit;">Dengue Info</li></a>
                        <li class="linkFooterItem"><a href="contactus.php" style = "text-decoration: none; color: inherit;">Contact us</li></a>
                    </ul>
                 </div>
                 <div id="keepConnected">
                 <span class="boldFooter">Keep Connected</span>
                    <div id="kcContainer">
                        
                        <div class="logoImg1"><img src="igIcon.png"></div>
                        <div class="logoImg2"><img src="facebookIcon.png"></div>
                        <div class="logoImg3"><img src="twiterIcon.png"></div>
                        <div class="logoImg4"><img src="waIcon.png"></div>
                        <div class="logoImg5"><img src="youtubeIcon.png"></div>
                        <div class="logoImg6"><img src="snapchatIcon.png"></div>
                        <div class="logoImg7"><img src="waIcon.png"></div>
                        <div class="logoImg8"><img src="linkedInIcon.png"></div>
                        <div class="logoImg9"><img src="telegramIcon.png"></div>
                    </div>
                </div>
        </div>
        </div>
        
<!-- Modal -->



<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="dengueStats.php">
        <?php echo display_error(); ?>
        <script>
          if(!empty($display_eror)) {
            echo "Help";
            $('#myModal').modal('show');
          }
          </script>
        
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" name= "username" placeholder="Enter Email address" required>
          <label class="form-label" for="form2Example1"></label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" name= "password" placeholder="Enter Password" required >
          <label class="form-label" for="form2Example2"></label>
        </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-danger" name="login_btn">Login</button>
        </div>
        
        <!-- Modal -->
        
      
	</body>
