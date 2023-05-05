
<?php global $adminEmail, $adminPassword; ?>
<html>
<?php include('functions.php') ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="subscribeCss.scss">
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
             <li><a href="contactsus.php">Contact Us</a></li>
             
             <li id="loginBtn"><button type="button"  class="btn btn-Danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Admin Login
      </button></a></li>
            
            </ul>
           
        </nav>
        <?php 
include "dbcon.php";
// Ensure post variable exists
if (isset($_POST['email'])) {
    // Validate email address
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        /*exit('Please provide a valid email address!');*/
        $message = 'Please provide a valid email address!';
        
    }
    // Check if email exists in the database
    
    $select = mysqli_query($con, "SELECT `email` FROM `subscribers` WHERE `email` = '".$_POST['email']."'");
    
    if(mysqli_num_rows($select)) {
      
        $message = 'You\'re already a subscriber!';
        $message2 = "Hey! It looks like you're already subscribed. You should have
        received the newsletter in your email previosly. Thanks for joining
        our newsletter!";
    } else{
    // Insert email address into the database
    $stmt = $con->prepare('INSERT INTO subscribers (email) VALUES (?)');
    $stmt->execute([ $_POST['email'] ]);
    // Output success response
   // exit('Thank you for subscribing!');
    $message = 'Thank you for subscribing!';
    $message2 = "This is your official confirmation. Thanks for
    joining our newsletter. You should receive the newsletter in your email soon!" ;
    //mail($_POST['email'], "Dengue Newsletter", "Hello, This is your confirmation email
   //for the Dengue newsletter");
    }
    
} else {
    // No post data specified
   //exit('Please provide a valid email address!');
    $message = 'No data!';
    
}
?>

  <div class = "container1">
    <h1><?php echo $message?></h1>
    <p id = "wel"><?php echo $message2?></p>
    <div class ="imageCon">
        <img class="welImg" src = "welcome.jpg">
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
                        <li class="linkFooterItem">Home</li>
                        <li class="linkFooterItem">Dengue statistics</li>
                        <li class="linkFooterItem">Dengue Info</li>
                        <li class="linkFooterItem">Contacts</li>
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
        </body>
<!-- Modal -->



<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="connn.php">
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
        
      
	