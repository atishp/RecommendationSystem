<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My Music</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

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
  
  <?php
   session_start();
   
   if(!(isset($_SESSION['username'])))
		{
	header("location:login.php");
		}
  
  $username= $_SESSION['username'];
   ?>

  <body background="images/recsys/recommend_music.jpg">
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                     <a class="brand" href="index.php"><img src='images/recsys/RecSys-small.png' /></a>

          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
			
<img height="20" width="20" src="images/recsys/ssm.gif" />

                <?php echo $username; ?>  <a href="logout.php" class="navbar-link">
			  			<img height="20" width="20" src="images/thumbnails/hint_over.png" /> 		  
			  Logout</a>
			  
            </p>
			
			
            <ul class="nav">
              <li class="active"><a href="profile.php">My Home</a></li>
              
			  
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Favourites <b class="caret"></b></a>
                  <ul class="dropdown-menu">
				  <li><a href="favourite_apps.php">Apps</a></li>
                    <li><a href="favourite_movies.php">Movies</a></li>
					<li><a href="favourite_music.php">Music</a></li>
                    <li><a href="favourite_books.php">Books</a></li>
					<li><a href="favourite_sites.php">sites</a></li>
					</ul>
					</li>
                  
				  
                </li>
			  	<li><a href="trending.php">top trending</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
				
				
				
				
				
				
				
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

   
   			<div class="span9" style="margin-left:250px" >
   			 <div class="panel panel-warning">
            <div class="panel-heading">
                           <center> <h3 >My Music</h3> </center>

            </div>
            <div class="panel-body">
              
       
          	   
			   <form method="post" action="">
    <select name="website_string"> 
        <option value="genre" selected="selected"></option>
        <option VALUE="genre"> genre</option>
        <option VALUE="year"> year</option>
        <option VALUE="artist"> artist</option>   
         
          
    </select>
    <INPUT TYPE="submit" name="submit" />
</form> 
			   <?php  
		   
		   include("config.php"); 
	include "inc/connect.php";
	include "Functions/recommend.php";
       
       
		  include "Functions/functions.php";
		  
		  $key="genre";
	
		  if(isset($_POST['submit'])){
		 $key=$_POST['website_string'];
	
		   
         }
		 
		 recommend_music($username,$key); 
		 
	
?>

		  
		  
	 <center> <a class="btn btn-large btn-primary" href="recommend_music.php">Find more</a>	</center>	
			
 

	</div>
	<div class="well">
	 
				
	
	
      <footer>
	  <?php include("Footer.php"); ?>
        
      </footer>
	</div>
    </div><!--/.fluid-container-->

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

  </body>
</html>
