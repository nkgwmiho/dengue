<?php global $adminEmail, $adminPassword; ?>
<html>
<?php include('functions.php') ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="nav-footerCss.scss">
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
            <li><a href="#">Home</a></li>
             <li><a href="#">Dengue Stats</a></li>
             <li><a href="#">Dengue Info</a></li>
             <li><a href="#">Contact Us</a></li>
             
             <li id="loginBtn"><button type="button"  class="btn btn-Danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Admin Login
      </button></a></li>
            
            </ul>
           
        </nav>
        
        <section class="sec1"></section>
        <section class="content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Blandit aliquam etiam erat velit scelerisque in dictum. Vestibulum sed arcu non odio euismod lacinia. Aliquet bibendum enim facilisis gravida neque. Id leo in vitae turpis massa sed elementum tempus egestas. Vivamus arcu felis bibendum ut tristique et. Lectus sit amet est placerat. Viverra orci sagittis eu volutpat odio facilisis mauris sit amet. Commodo quis imperdiet massa tincidunt. Arcu dictum varius duis at consectetur lorem donec massa sapien. Imperdiet sed euismod nisi porta lorem mollis aliquam. Habitant morbi tristique senectus et netus et malesuada fames ac.<br>

Morbi leo urna molestie at elementum. Nisl purus in mollis nunc sed id semper risus in. Sed euismod nisi porta lorem mollis aliquam ut porttitor. Pharetra sit amet aliquam id diam maecenas. Felis donec et odio pellentesque diam volutpat. Non arcu risus quis varius quam quisque id. Sit amet facilisis magna etiam tempor orci eu. Placerat in egestas erat imperdiet sed euismod nisi porta. Odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus. Aenean pharetra magna ac placerat. Auctor elit sed vulputate mi sit amet mauris commodo quis. Laoreet sit amet cursus sit amet. Risus nullam eget felis eget nunc lobortis. Curabitur vitae nunc sed velit dignissim sodales ut eu sem.<br>

Blandit cursus risus at ultrices mi tempus. Auctor urna nunc id cursus metus aliquam eleifend mi in. Ut lectus arcu bibendum at varius vel pharetra vel turpis. At ultrices mi tempus imperdiet nulla malesuada. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec. Faucibus vitae aliquet nec ullamcorper sit. Blandit massa enim nec dui nunc mattis. Ultricies tristique nulla aliquet enim tortor at. Ac tortor dignissim convallis aenean et tortor. Fusce ut placerat orci nulla pellentesque dignissim. Gravida quis blandit turpis cursus in hac habitasse platea. In massa tempor nec feugiat nisl. Sit amet consectetur adipiscing elit ut aliquam purus sit. Egestas maecenas pharetra convallis posuere morbi leo urna. Amet tellus cras adipiscing enim.
            </p>
        </section>
        <section class="sec2"></section>
        <section class="content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Blandit aliquam etiam erat velit scelerisque in dictum. Vestibulum sed arcu non odio euismod lacinia. Aliquet bibendum enim facilisis gravida neque. Id leo in vitae turpis massa sed elementum tempus egestas. Vivamus arcu felis bibendum ut tristique et. Lectus sit amet est placerat. Viverra orci sagittis eu volutpat odio facilisis mauris sit amet. Commodo quis imperdiet massa tincidunt. Arcu dictum varius duis at consectetur lorem donec massa sapien. Imperdiet sed euismod nisi porta lorem mollis aliquam. Habitant morbi tristique senectus et netus et malesuada fames ac.<br>

Morbi leo urna molestie at elementum. Nisl purus in mollis nunc sed id semper risus in. Sed euismod nisi porta lorem mollis aliquam ut porttitor. Pharetra sit amet aliquam id diam maecenas. Felis donec et odio pellentesque diam volutpat. Non arcu risus quis varius quam quisque id. Sit amet facilisis magna etiam tempor orci eu. Placerat in egestas erat imperdiet sed euismod nisi porta. Odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus. Aenean pharetra magna ac placerat. Auctor elit sed vulputate mi sit amet mauris commodo quis. Laoreet sit amet cursus sit amet. Risus nullam eget felis eget nunc lobortis. Curabitur vitae nunc sed velit dignissim sodales ut eu sem.<br>

Blandit cursus risus at ultrices mi tempus. Auctor urna nunc id cursus metus aliquam eleifend mi in. Ut lectus arcu bibendum at varius vel pharetra vel turpis. At ultrices mi tempus imperdiet nulla malesuada. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec. Faucibus vitae aliquet nec ullamcorper sit. Blandit massa enim nec dui nunc mattis. Ultricies tristique nulla aliquet enim tortor at. Ac tortor dignissim convallis aenean et tortor. Fusce ut placerat orci nulla pellentesque dignissim. Gravida quis blandit turpis cursus in hac habitasse platea. In massa tempor nec feugiat nisl. Sit amet consectetur adipiscing elit ut aliquam purus sit. Egestas maecenas pharetra convallis posuere morbi leo urna. Amet tellus cras adipiscing enim.
            </p>
        </section>
        <section class="sec1"></section>
        <section class="content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Blandit aliquam etiam erat velit scelerisque in dictum. Vestibulum sed arcu non odio euismod lacinia. Aliquet bibendum enim facilisis gravida neque. Id leo in vitae turpis massa sed elementum tempus egestas. Vivamus arcu felis bibendum ut tristique et. Lectus sit amet est placerat. Viverra orci sagittis eu volutpat odio facilisis mauris sit amet. Commodo quis imperdiet massa tincidunt. Arcu dictum varius duis at consectetur lorem donec massa sapien. Imperdiet sed euismod nisi porta lorem mollis aliquam. Habitant morbi tristique senectus et netus et malesuada fames ac.<br>

Morbi leo urna molestie at elementum. Nisl purus in mollis nunc sed id semper risus in. Sed euismod nisi porta lorem mollis aliquam ut porttitor. Pharetra sit amet aliquam id diam maecenas. Felis donec et odio pellentesque diam volutpat. Non arcu risus quis varius quam quisque id. Sit amet facilisis magna etiam tempor orci eu. Placerat in egestas erat imperdiet sed euismod nisi porta. Odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus. Aenean pharetra magna ac placerat. Auctor elit sed vulputate mi sit amet mauris commodo quis. Laoreet sit amet cursus sit amet. Risus nullam eget felis eget nunc lobortis. Curabitur vitae nunc sed velit dignissim sodales ut eu sem.<br>

Blandit cursus risus at ultrices mi tempus. Auctor urna nunc id cursus metus aliquam eleifend mi in. Ut lectus arcu bibendum at varius vel pharetra vel turpis. At ultrices mi tempus imperdiet nulla malesuada. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec. Faucibus vitae aliquet nec ullamcorper sit. Blandit massa enim nec dui nunc mattis. Ultricies tristique nulla aliquet enim tortor at. Ac tortor dignissim convallis aenean et tortor. Fusce ut placerat orci nulla pellentesque dignissim. Gravida quis blandit turpis cursus in hac habitasse platea. In massa tempor nec feugiat nisl. Sit amet consectetur adipiscing elit ut aliquam purus sit. Egestas maecenas pharetra convallis posuere morbi leo urna. Amet tellus cras adipiscing enim.
            </p>
        </section>
        <section class="sec2"></section>
        <section class="content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Blandit aliquam etiam erat velit scelerisque in dictum. Vestibulum sed arcu non odio euismod lacinia. Aliquet bibendum enim facilisis gravida neque. Id leo in vitae turpis massa sed elementum tempus egestas. Vivamus arcu felis bibendum ut tristique et. Lectus sit amet est placerat. Viverra orci sagittis eu volutpat odio facilisis mauris sit amet. Commodo quis imperdiet massa tincidunt. Arcu dictum varius duis at consectetur lorem donec massa sapien. Imperdiet sed euismod nisi porta lorem mollis aliquam. Habitant morbi tristique senectus et netus et malesuada fames ac.<br>

Morbi leo urna molestie at elementum. Nisl purus in mollis nunc sed id semper risus in. Sed euismod nisi porta lorem mollis aliquam ut porttitor. Pharetra sit amet aliquam id diam maecenas. Felis donec et odio pellentesque diam volutpat. Non arcu risus quis varius quam quisque id. Sit amet facilisis magna etiam tempor orci eu. Placerat in egestas erat imperdiet sed euismod nisi porta. Odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus. Aenean pharetra magna ac placerat. Auctor elit sed vulputate mi sit amet mauris commodo quis. Laoreet sit amet cursus sit amet. Risus nullam eget felis eget nunc lobortis. Curabitur vitae nunc sed velit dignissim sodales ut eu sem.<br>

Blandit cursus risus at ultrices mi tempus. Auctor urna nunc id cursus metus aliquam eleifend mi in. Ut lectus arcu bibendum at varius vel pharetra vel turpis. At ultrices mi tempus imperdiet nulla malesuada. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec. Faucibus vitae aliquet nec ullamcorper sit. Blandit massa enim nec dui nunc mattis. Ultricies tristique nulla aliquet enim tortor at. Ac tortor dignissim convallis aenean et tortor. Fusce ut placerat orci nulla pellentesque dignissim. Gravida quis blandit turpis cursus in hac habitasse platea. In massa tempor nec feugiat nisl. Sit amet consectetur adipiscing elit ut aliquam purus sit. Egestas maecenas pharetra convallis posuere morbi leo urna. Amet tellus cras adipiscing enim.
            </p>
        </section>
        <section class="sec1"></section>
        <section class="content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Blandit aliquam etiam erat velit scelerisque in dictum. Vestibulum sed arcu non odio euismod lacinia. Aliquet bibendum enim facilisis gravida neque. Id leo in vitae turpis massa sed elementum tempus egestas. Vivamus arcu felis bibendum ut tristique et. Lectus sit amet est placerat. Viverra orci sagittis eu volutpat odio facilisis mauris sit amet. Commodo quis imperdiet massa tincidunt. Arcu dictum varius duis at consectetur lorem donec massa sapien. Imperdiet sed euismod nisi porta lorem mollis aliquam. Habitant morbi tristique senectus et netus et malesuada fames ac.<br>

Morbi leo urna molestie at elementum. Nisl purus in mollis nunc sed id semper risus in. Sed euismod nisi porta lorem mollis aliquam ut porttitor. Pharetra sit amet aliquam id diam maecenas. Felis donec et odio pellentesque diam volutpat. Non arcu risus quis varius quam quisque id. Sit amet facilisis magna etiam tempor orci eu. Placerat in egestas erat imperdiet sed euismod nisi porta. Odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus. Aenean pharetra magna ac placerat. Auctor elit sed vulputate mi sit amet mauris commodo quis. Laoreet sit amet cursus sit amet. Risus nullam eget felis eget nunc lobortis. Curabitur vitae nunc sed velit dignissim sodales ut eu sem.<br>

Blandit cursus risus at ultrices mi tempus. Auctor urna nunc id cursus metus aliquam eleifend mi in. Ut lectus arcu bibendum at varius vel pharetra vel turpis. At ultrices mi tempus imperdiet nulla malesuada. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec. Faucibus vitae aliquet nec ullamcorper sit. Blandit massa enim nec dui nunc mattis. Ultricies tristique nulla aliquet enim tortor at. Ac tortor dignissim convallis aenean et tortor. Fusce ut placerat orci nulla pellentesque dignissim. Gravida quis blandit turpis cursus in hac habitasse platea. In massa tempor nec feugiat nisl. Sit amet consectetur adipiscing elit ut aliquam purus sit. Egestas maecenas pharetra convallis posuere morbi leo urna. Amet tellus cras adipiscing enim.
            </p>
        </section>
        <section class="sec2"></section>
        <section class="content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Blandit aliquam etiam erat velit scelerisque in dictum. Vestibulum sed arcu non odio euismod lacinia. Aliquet bibendum enim facilisis gravida neque. Id leo in vitae turpis massa sed elementum tempus egestas. Vivamus arcu felis bibendum ut tristique et. Lectus sit amet est placerat. Viverra orci sagittis eu volutpat odio facilisis mauris sit amet. Commodo quis imperdiet massa tincidunt. Arcu dictum varius duis at consectetur lorem donec massa sapien. Imperdiet sed euismod nisi porta lorem mollis aliquam. Habitant morbi tristique senectus et netus et malesuada fames ac.<br>

Morbi leo urna molestie at elementum. Nisl purus in mollis nunc sed id semper risus in. Sed euismod nisi porta lorem mollis aliquam ut porttitor. Pharetra sit amet aliquam id diam maecenas. Felis donec et odio pellentesque diam volutpat. Non arcu risus quis varius quam quisque id. Sit amet facilisis magna etiam tempor orci eu. Placerat in egestas erat imperdiet sed euismod nisi porta. Odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus. Aenean pharetra magna ac placerat. Auctor elit sed vulputate mi sit amet mauris commodo quis. Laoreet sit amet cursus sit amet. Risus nullam eget felis eget nunc lobortis. Curabitur vitae nunc sed velit dignissim sodales ut eu sem.<br>

Blandit cursus risus at ultrices mi tempus. Auctor urna nunc id cursus metus aliquam eleifend mi in. Ut lectus arcu bibendum at varius vel pharetra vel turpis. At ultrices mi tempus imperdiet nulla malesuada. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec. Faucibus vitae aliquet nec ullamcorper sit. Blandit massa enim nec dui nunc mattis. Ultricies tristique nulla aliquet enim tortor at. Ac tortor dignissim convallis aenean et tortor. Fusce ut placerat orci nulla pellentesque dignissim. Gravida quis blandit turpis cursus in hac habitasse platea. In massa tempor nec feugiat nisl. Sit amet consectetur adipiscing elit ut aliquam purus sit. Egestas maecenas pharetra convallis posuere morbi leo urna. Amet tellus cras adipiscing enim.
            </p>
        </section>
        
        
    
        <footer>
            <div id ="footerContainer">
            <div class='row'>
                <div id ="about"> <span class="boldFooter">About the team</span><p>We're a group of year 2 SIT computer engineering student's
                 who are trying to make information and statistics on Dengue easy and intuitive to access.</p>
                 <form id ="mail">
                    <div class="containerMail">
                    <span class="boldFooter">Sign up for our News Letters</span>
                    </div>

                    <div class="containerMail" >
                        <input type="text" placeholder="Enter Full Name" name="name" required>
                        <input type="text" placeholder="Enter Email address" name="mail" required>
                        
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
        
      
	</body>