<?php
if(isset($_POST['submit'])){
  include("config.php"); 
  include("inc\connect.php");
    //$username=$_POST['username'];
 $query="INSERT INTO universal_user (first_name,last_name,username, password, email,dob)
 VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[dob]')";

$retval = mysql_query($query);
if(!$retval )
{
 die('Could not enter data: ' . mysql_error());
}
$sql="CREATE TABLE $_POST[username] (item_id int,item_domain CHAR(30))";
mysql_query($sql);

session_start();
$_SESSION['username']=$_POST['username'];
header("Location:http://localhost/project-php/process_signup_apps.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Recsys</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="recommendations,movies,music,books,apps,websites">
    <meta name="author" content="atish pawar">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/js/jquery-ui-1.10.4/development-bundle/themes/base/jquery.ui.all.css">
	<style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
     position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 0;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>
   
    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
                       <a class="brand" href="index.php"><img src='images/recsys/RecSys-small.png' /></a>

            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact us</a></li>
				
                <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
				
				
				
								 <li><a href="signup.php">Sign up</a></li>
								 
							<li><a href="login.php">Login</a></li>	 
								 
                <li class="dropdown">
                  				  
                </li>

              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->


      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 970px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
	  table td 
	{
  table-layout:fixed;
  width:30px;
  height:30px;
  overflow:hidden;
  word-wrap:break-word;
	}

    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>
<br>
<br>
  <body>

    <div id="container">

      <form class="form-signin" action="" method="POST"  onsubmit="return validate()"> 
        <h2 class="form-signin-heading" align="center">Sign up here!</h2>
		<br>
		<input type="text" name="first_name" id="first_name" class="input-block-level" placeholder="first name">
		<input type="text" name="last_name" id="last_name" class="input-block-level" placeholder="last name">
        <input type="text" name="username" id="username" class="input-block-level" placeholder="Username">	<span id="user-result"></span>
        <input type="password" name="password" id="password"class="input-block-level" placeholder="Password">
		<input type="text" name="email" id="email" class="input-block-level" placeholder="Email">  <span id="email-result"></span>
		<p><input type="text" id="datepicker" class="input-block-level" placeholder="Date of Birth"></p>
		
	   
        <input  class="btn btn-large btn-primary" type="submit" name="submit" value="Sign Up!">
		
      </form>
		<script language="javascript">
			function validate()
			{
				if(document.getElementById("email").value=="")
				{
					alert("Please Enter e-mail ID");
					document.getElementById("email").focus();
					return false;
				}
				else if(document.getElementById("email").value!="")
				{
					var email = document.getElementById('email');
					var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					if (!filter.test(email.value))
					{
						alert("Please enter VALID email ID");
						document.getElementById("email").focus();
					 	return false;
					 }
				}
				if(document.getElementById("password").value=="")
				{
					alert("Please Enter Password");
					document.getElementById("password").focus();
					return false;
				}
				else if(document.getElementById("password").value!="")
				{
					var email = document.getElementById('password');
					var filter = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
					if (!filter.test(password.value))
					{
						alert("Password should have minimum 6 characters along with alteast one SPECIAL character");
						document.getElementById("password").focus();
					 	return false;
					 }
				}
					
				if(document.getElementById("first_name").value=="")
				{
					alert("Please Enter first name");
					document.getElementById("first_name").focus();
					return false;
				}
				else if(document.getElementById("last_name").value=="")
				{
					alert("Please Enter last name");
					document.getElementById("last_name").focus();
					return false;
				}
				if(document.getElementById("username").value=="")
				{
					alert("Please Enter username");
					document.getElementById("username").focus();
					return false;
				}
				
				if(document.getElementById("dob").value=="")
				{
					alert("Please Enter Date of Birth");
					document.getElementById("dob").focus();
					return false;
				}
				else if(document.getElementById("dob").value!="")
				{
					var email = document.getElementById('dob');
					var filter =/^(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d+$/;

					if (!filter.test(email.value))
					{
						alert("DoB should be in the format (dd/mm/yyyy)");
						document.getElementById("dob").focus();
					 	return false;
					 }
				}
			}
		</script>

    </div> <!-- /container -->
      <!-- FOOTER -->
      <footer>
        
        <p align="center">&copy; 2013 RecSys &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->
	

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
	
    <script src="assets/js/1.10.4/jquery-ui-1.10.4.js"></script>
	<script src="assets/js/jquery-ui-1.10.4/development-bundle/ui/jquery.ui.core.js"></script>
	<script src="assets/js/jquery-ui-1.10.4/development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="assets/js/jquery-ui-1.10.4/development-bundle/ui/jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="assets/js/jquery-ui-1.10.4/development-bundle/demos/demos.css">
	
	<script>
 $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  yearRange: '1950:2014'
    });
  });
  </script>
	<script>
	$("#username").keyup(function (e) { //user types username on inputfiled
   var username = $(this).val(); //get the string typed by user
   $.post('check_username.php', {'username':username}, function(data) { //make ajax call to check_username.php
   $("#user-result").html(data); //dump the data received from PHP page
   });
});
</script>
<script>
$("#email").keyup(function (e) { //user types email on inputfiled
   var email = $(this).val(); //get the string typed by user
   $.post('check_email.php', {'email':email}, function(data) { //make ajax call to check_email.php
   $("#email-result").html(data); //dump the data received from PHP page
   });
});
	</script>
	<script>
/*	 var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
	 if (reg.test(email)){
	 return true; }
	 else{
	 return false;
	 }
	*/} 
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="assets/js/holder/holder.js"></script>
  </body>
</html>