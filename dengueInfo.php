<?php global $adminEmail, $adminPassword; ?>
<html>
<?php include('functions.php') ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="dengueInfo.scss">
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
             <li><a href="contactus.php">Contact Us</a></li>
             
             <li id="loginBtn"><button type="button"  class="btn btn-Danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Admin Login
      </button></a></li>     
            </ul>
        </nav>
    </header>
    
    <body>
    
     <div class="header">
    <p id="headerH1">Dengue Info</p>
    <p id="headerH6">Dengue Viruses are spread to people through the bite of an infected Aedes species</p>
</div>

<div class="flex-container">
    <div id= "linksCon">
    <div id="links-to-page">
        <ul>
            <li class="navbar1"><a class="black-links" href="#what-is-dengue">What is Dengue Fever?</a></li>
            <li class="navbar1"><a class="black-links" href="#how-is-dengue-transmitted">How is Dengue Transmitted?</a></li>
            <li class="navbar1"><a class="black-links" href="#how-to-protect-against-dengue">How to protect yourself against Dengue?</a></li>
            <li class="navbar1"><a class="black-links" href="#symptoms-of-dengue">Symptoms of Dengue</a></li>
            <li class="navbar1"><a class="black-links" href="#how-is-dengue-treated">How is Dengue Treated?</a></li>
            <li class="navbar1"><a class="black-links" href="#references">References</a></li>  
        </ul>
    </div>
    </div>
    
    <div class="flex2">
        <div class="column">
            <img src="mosInfo.jpg" alt="iamge1" id="mosInfo">
        </div>
    
        <div class="flex3">
            <div id="what-is-dengue">
                <h5><b>What is Dengue Fever?</b></h5>
                <p>Dengue fever is a viral infection that is spread to humans through the bite of infected Aedes mosquitoes. The symptoms of dengue fever include high fever, severe headache, joint and muscle pain, rash, and nausea.</p>
            </div>
           
            <div class="flex4">
                <div id="how-is-dengue-transmitted">
                    <h5><b>How is Dengue Transmitted?</b></h5>
                    <p>Dengue is primarily transmitted through the bite of infected Aedes mosquitoes, which are most active during the daytime. The mosquitoes become infected when they feed on a person with dengue virus in their blood, and can then transmit the virus to other people they bite.</p>
                </div>       
            </div>
               
            <div class="flex5">
                <div id="how-to-protect-against-dengue">
                    <h5><b>How to protect yourself against Dengue?</b></h5>
                    <p>There are several ways to protect yourself against dengue, including:</p>
                    <p>1. Using mosquito repellent on exposed skin</p>
                    <p>2. Wearing long-sleeved shirts and pants to cover exposed skin</p>
                    <p>3. Sleeping under a mosquito net </p>
                    <p>4. Using screens on windows and doors to keep mosquitoes out</p>
                    <p>5. Removing standing water from your surroundings to eliminate breeding sites for mosquitoes</p>
                </div>            
            </div>
                   
            <div class="flex6">
                <div id="symptoms-of-dengue">
                    <h5><b>Symptoms of Dengue</b></h5>
                    <p>The symptoms of dengue fever can vary from person to person, but often include high fever, severe headache, joint and muscle pain, rash, and nausea. In some cases, dengue fever can progress to a more severe form called dengue hemorrhagic fever, which can be life-threatening.</p>
                </div>            
            </div>
               
            <div class="flex7">
                <div id="how-is-dengue-treated">
                    <h5><b>How is Dengue Treated?</b></h5>
                    <p>There is no specific treatment for dengue fever, but it is important to stay hydrated and manage the symptoms with pain relievers and fever reducers. In severe cases, hospitalization may be required to manage complications and provide supportive care.</p>
                </div>       
            </div>
                           
            <div class="flex8">
                <div id="references">
                    <h5><b>References</b></h5>
                    <p>World Health Organization. Dengue and Severe Dengue. Available at: <a href="https://www.who.int/news-room/q-a-detail/dengue-and-severe-dengue.">WHO Website</a></p>
                    <p>Centers for Disease Control and Prevention. Dengue. Available at: <a href="https://www.cdc.gov/dengue/index.html.">CDC Website</a></p>
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
      <form method="post" action="dengueInfo.php">
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