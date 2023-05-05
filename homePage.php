<?php global $adminEmail, $adminPassword; ?>

<html>
<?php include('functions.php') ?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="homePageCss.scss">
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'> <!--for font -->
<!-- bootstrap scripts -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/r-2.3.0/datatables.min.js"></script>
 
<script src= "https://code.jquery.com/jquery-3.5.1.js"></script>
<script src= "https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src= "https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
 $(document).ready( function() {
  $('#example').dataTable( {
    "fnDrawCallback": function( oSettings ) {
      
    }
  } );
} ); -->
</script>


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
        
        <!-- <section class="sec1"></section> -->
        <div class="landingPhotoContainer"> 
            <div class="logoContainer">
                <img class="antimos" src="antiMos.png">
            </div>
            <div class ="wordsContainer">
                <div class="wC1"> 
                <p class="p1"><span class="red-text">STOP</span> the Spread</p>
                <p class="p1">of Dengue <span class="red-text">Today</span> </p>
                    <div class="wC2"> 
                        <p class="p2">Despite intensive vector control, 
                        there has been a significant increase in the number 
                        of dengue cases in recent years. <u>In fact, in 2020, 
                        a resurgence</u> of epidemic dengue was observed during 
                        the COVID-19 pandemic with the highest ever annual 
                        incidence reported in Singapore. 
                        </p>

                    </div>
                        <div class="buttonContainer">
                            <div id ="slide"></div>
                            <button class="learnMoreButton" type="button"> <a href = "dengueInfo.php" style = "text-decoration: none; color: inherit;">Learn More</button></a>
                        </div>
                </div>
            </div>
            
          
        </div>
        </header>

<body>
    <div class="sec2"> 
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="banner3.jpg" alt="First slide">
            
        </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="banner2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="banner1.png" alt="Third slide">
            </div>
    </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
        </div>
    
    <div class="flex-container1">
        <div>
            <div class="ccc1">
                <div class="circle-container">
                    <div class="res-circle">
                        <div class="circleTextContainer">
                            <div class="circle-txt">
                                <p>Dengue</p>
                                <p>Fever</p>
                                <p>Symptoms</p>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="textContainer">
            <p>Symptoms usually appear 4 
                to 7 days after being bitten (ranges from 3 to 14 days).</p>
                <ul>
                    <li>Sudden onset of fever for 2 to 7 days</li>
                    <li>Severe headache with pain behind the eyes</li>
                    <li>Joint and muscle pain</li>
                    <li>Skin rashes</li>
                    <li>Nausea and vomiting</li>
                    <li>Mild bleeding (e.g. nose or gum bleed, or easy bruising of the skin)</li>
                </ul>
            <p>If you think you have dengue fever, seek medical attention immediately. 
                Use mosquito repellent regularly if you are diagnosed with 
                dengue or suspected to have dengue, to protect your loved ones
                 and others living around you. Repellents containing DEET 
                 (N,N-diethyl-m-toluamide), picaridin or IR3535 as the active 
                 ingredient are the most effective in repelling mosquitoes.</p>
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
                        
                        <input type="text" placeholder="Enter Email address" name="email" required>
                        
                    </div>

                    <div class="containerMail">
                        <input type="submit" value="Subscribe to Our NewsLetter">
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

<script>
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')

      myModal.addEventListener('shown.bs.modal', function () {
      myInput.focus()
      })
    </script>

<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="homePage.php">
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