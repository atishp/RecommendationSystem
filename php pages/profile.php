<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../dist/css/bootstrap-theme.min.css" rel="stylesheet">
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
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>
  
  <?php
  $username=$_GET['username']; ?>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Recommender Systems</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
					<img height="20" width="20" src="../images/POP.png" />

                <?php echo $username; ?>  <a href="index.php" class="navbar-link">
			  
			  					<img height="20" width="20" src="../images/New folder/hint_over.png" />

			  
			  
			  
			  
			  
			  Logout</a>
			  
			  
			  
			  
            </p>
			
			
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">categories</a></li>
              <li><a href="#contact">favourites</a></li>
			  	<li><a href="#contact">top rated</a></li>
				<li><a href="#contact">About</a></li>
				<li><a href="#contact">Contact</a></li>
				
				
				
				
				
				
				
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
		<img height="200" width="200" src="../images/POP.png" />
		            <h3> <?php echo "Niranjan Aswale"; ?></h3>


              <li class="nav-header"><h5>Profile </h5></li>
              
              <li><a href="profile.php">Home</a></li>
			  
              <li><a href="index.php">My movies</a></li>
              <li><a href="index.php">My music</a></li>
			  <li><a href="index.php">My apps</a></li>
              <li><a href="index.php">My books</a></li>

              <li><a href="index.php">My sites</a></li>

			  
			  
			  
			  
              <li class="nav-header"><h5>Categories</h5></li>
              <li><a href="index.php">top trending</a></li>
              <li><a href="index.php">newest items</a></li>
			  <li><a href="index.php">My ratings</a></li>
             	<li><a href="index.php">top sites</a></li>
				
				
				
              <li class="nav-header"><h5>Others</h5></li>
              <li><a href="#">Edit profile</a></li>
              <li><a href="#">settings</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9" >
          <div class="well" >
            <h2>Hello <?php echo $username; ?></h2>
            <p>Find your recommendations here... </p>
			
            <p><a href="#" class="btn btn-primary btn-large">Find more &raquo;</a></p>
          </div>
		  
		    <div class="panel panel-danger">
            <div class="panel-heading">
             <center> <h3 >latest hits</h3> </center>
            </div>
            <div class="panel-body">
              <div class="row-fluid">
            <div class="span4">
              <h3>Bhaag Milkha Bhaag</h3>
            <img height="200" width="200" src="../images/Universal_movie_images/Bhaag Milkha Bhaag.jpg" />
              <p><a class="btn" href="Recommend_movies.php">Find more &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h3>Dhoom 3</h3>
              <img height="200" width="200" src="../images/Universal_movie_images/Dhoom 3 - Front.jpg" />
  
              <p><a class="btn" href="#">Find more &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h3>The Dark Knight</h3>
               <img height="200" width="200" src="../images/Universal_movie_images/The Dark Knight.jpg" />
             
              <p><a class="btn" href="#">Find more &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
              
           
            </div>
          </div>
		  
		  
			
			
       
		 <div class="panel panel-success">
            <div class="panel-heading">
                           <center> <h3 >Top rated</h3> </center>

            </div>
            <div class="panel-body">
              
          
          <div class="row-fluid">
            <div class="span4">
              <h3>True caller</h3>
            <img height="200" width="200" src="../images/Universal_app_images/icon.png" />

              <p><a class="btn" href="#">Find more &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h3>firefox 4.9</h3>
           <img height="200" width="200" src="../images/Universal_app_images/browser-icon-firefox.png" />

              <p><a class="btn" href="#">Find more &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h3>Whatssapp</h3>
                   <img height="200" width="200" src="../images/Universal_app_images/w.png" />
      
              <p><a class="btn" href="#">Find more &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->
	  
	  
            </div>
          </div>
        
	  
	  

      <hr>

	<div class="well">
	 
				
	
	
      <footer>
	  <?php include("Footer.php"); ?>
        <p>&copy; Recommender Systems 2013</p>
      </footer>
	</div>
    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
