
<script type="text/javascript" src="js/jquery.js">
</script>
<script type="text/javascript">

function unLikeMusicFunction(item_id){

//alert('way to go Atish');
var request;
	try{
	//alert('hey alert1');
	request=new XMLHttpRequest();
	}catch(e){
	
	}
	//var item_id=document.getElementById("id").value;
	//alert(item_id);
	var item_domain="music";
	var queryString="?item_id="+item_id+"&item_domain="+item_domain;
	
	request.open("GET","process_unlike.php"+queryString,true);
	request.send(null);
	document.getElementById(item_id).value="uniked!";
	document.getElementById(item_id).disabled=true;
	//alert('after disable');
	
}

</script>

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
  
  $username= $_SESSION['username'];
  
  
    
  if(!(isset($_SESSION['username'])))
		{
	header("location:login.php");
		}
		
  
  
   ?>

   <body background="images/recsys/recommend_music.jpg">p[

    
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

   <center>
        <div class="span9" style="margin-left:250px" >
          <div class="well" >
            <h2>Hello <?php echo $username; ?></h2>
            <p>Find your favourite music here... </p>
			
      <!--      <p><a href="#" class="btn btn-primary btn-large">Find more &raquo;</a></p>  -->
          </div>

</centre>

   

   
   
   
   
   			 <div class="panel panel-warning">
            <div class="panel-heading">
                           <center> <h3 >Favourite Music</h3> </center>
						   
						   
						
            </div>
            <div class="panel-body">
                <?php  
		 $query=" SELECT * FROM `universal_music` WHERE `id` IN
 (SELECT `item_id` FROM $username WHERE `item_domain`='music')";
 
	 
	$result=mysql_query($query);
	if(($row=mysql_fetch_assoc($result))== NULL )
{
echo "<h3> <font color='gray' > You have not Liked any Music Yet . . . ! ! ! </font> </h3>";
echo "<h3> <font color='gray' > Try this: </font> </h3>
	<h4> <font color='blue' > <a href= 'trending.php'> top trending</a> </font> </h4>
	<h4> <font color='blue' > <a href= 'recommend_music.php'> My music</a> </font> </h4>";


}

else
{

	
	do
	{
	
	
	
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><br><input type=\"submit\" id= ".$row["id"]." name=\"unlike\" value=\"unlike\" onClick='unLikeMusicFunction(".$row["id"].")'>
				<br>Total likes :".$row['likes']."</br>
		<td>".$row["artist"]."</td>
		<td>".$row["year"]."</td>
		<td>".$row["info"]." </td>
				
	</tr>
	
	</table>";	
	//echo $rate[0][0];
	}
	while($row=mysql_fetch_assoc($result));
	
	}
	?>

</div>
       
         
         


 

		  
	
			
 


	<div class="well">
	 
				
	
	
      <footer>
	  <?php include("Footer.php"); ?>
       
      </footer>
	  
	  
	</div>
    </div>
	</div>
	
	<!--/.fluid-container-->
	

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
