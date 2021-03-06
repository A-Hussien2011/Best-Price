<!DOCTYPE html>
<html lang="en">
   <img src="wallpaper1.jpg"/>
   <!-- my style sheet -->
   <link rel="stylesheet" type="text/css" href="style.css"/>
  <head>
    <!-- Bootstrap -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <!-- Bootstrap -->


    <title>Best Price</title>
    <link rel="shortcut icon" href="money.ico" />

   


    
  </head>

  <body>
     
    
      <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="home.php" id="logo" > Best Price</a>
    </div>
  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php"><span class="glyphicon glyphicon-home"></span>&ensp; Home</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
        <li><a href="About.php">About Us</a></li>
      </ul>
      <!--search box -->
      <div class="col-md-3" style="margin-top: 10px;">
            <form action="#" method="get">
                <div  class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input style="height: 34px;" 
                      class="form-control" id="system-search" name="q"  placeholder="Search for" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
      <!--search box -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span  class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="signin.php"><span  class="glyphicon glyphicon-log-in"></span> Log in</a></li>
      </ul>
    </div>

  </div>
</nav>

  
</body>

<link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
              <h2>Contact Us</h2>
              <h4>Feel free to shout us by filling the contact form or visiting our social network sites.</h4>
              <hr class="colorgraph" id="horizon-line">

              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal">
                    <div class="form-group">
                       <input type="text" name="user name" id="user_name" class="form-control input-lg" placeholder="User Name" tabindex="3">
                   </div>
                    
                    <div class="form-group">
                       <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
                    </div>

                    <div class="form-group">
                      <textarea  class="form-control input-lg" placeholder="Your Message" id="description"></textarea>
                  
                    </div>
                    <button type="submit" class="btn btn-success btn-block btn-lg " id="send-btn">Send Message</button>
                  </form>

                  <hr class="colorgraph">
                    <h3>Our Social Sites</h3>
                  <ul class="list-inline banner-social-buttons">
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                    
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </section>


<!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <!-- javascript -->

</html>