<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
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
  
    include("config.php"); 
	include "inc/connect.php";
       
       
		  include "Functions/functions.php";
    session_start();
  if(!(isset($_SESSION['username'])))
		{
	header("location:login.php");
		}
		else {

  
  
  $username= $_SESSION['username'];
  
  

$result=mysql_query("select * from `universal_user` where `username`='".$username."'");
if($row=mysql_fetch_assoc($result))
{


  $first_name=$row["first_name"];
  $last_name=$row["last_name"];

  }
  
  }
   ?>

  <body >

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

    <div class="container-fluid" >
      <div class="row-fluid">
        <div class="span3" >
          <div class="well sidebar-nav" style="position:fixed; width:250px; height:auto" >
            <ul class="nav nav-list">
	<?php 	echo "<img height='300' width='300' src='images/recsys/ssm.gif' />"; ?>
	
		            <h3> <?php echo $first_name." ".$last_name; ?></h3>
					

              <li class="nav-header"><h5>Profile </h5></li>
              
              <li><a href="profile.php">My Home</a></li>
			  <li><a href="recommend_apps.php">My apps</a></li>
			  
              <li><a href="recommend_movies.php">My movies</a></li>
              <li><a href="recommend_music.php">My music</a></li>
			  
              <li><a href="recommend_books.php">My books</a></li>

              <li><a href="recommend_sites.php">My sites</a></li>

			  
			  
			  
			 
				
				
				
              <li class="nav-header"><h5>Others</h5></li>
			  <li><a href="trending.php">top trending</a></li>
              <li><a href="edit_profile.php">Edit profile</a></li>
              
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
		
		
        <div class="span9"  >
          <div class="well" >
		  <center>
            <h2>Hello <?php echo $username; ?></h2>
            <p>Find your recommendations here... </p>
			</center>
			
      <!--      <p><a href="#" class="btn btn-primary btn-large">Find more &raquo;</a></p>  -->
          </div>
		  
		   
	  

      
	 <div class="panel panel-info">
            <div class="panel-heading">
                           <center> <h3 >Recommended Apps</h3> </center>

            </div>
            <div class="panel-body">
			
                <?php  
		fetch_apps($username);
		?>
		  
   
       
        
    <div class="panel panel-danger">
            <div class="panel-heading">
                           <center> <h3 >Recommended Movies</h3> </center>
					 	   
						   
			
            </div>
            <div class="panel-body">
             
   		   <?php
			$key= "genre";
			fetch_movies($username,$key);
		   ?>

		</div> 
   			<div class="panel panel-warning">
            <div class="panel-heading">
                           <center> <h3 >Recommended Music</h3> </center>		   
            </div>
            <div class="panel-body">
            <?php  
				fetch_music($username);
			?>

</div>  
 <div class="panel panel-success" >
            <div class="panel-heading">
                           <center> <h3 >Recommended Books</h3> </center>

            </div>
            <div class="panel-body">
			
			
			  <?php  
		 		fetch_books($username);
				?>

</div>

<div class="panel panel-default" >
            <div class="panel-heading">
                           <center> <h3 >Recommended Sites</h3> </center>

            </div>
            <div class="panel-body">
              
         <?php  
		fetch_sites($username);
			?>

</div>

</div> 
		 <center> <a class="btn btn-large btn-primary" href="profile.php">Find more</a>	</center>	
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
