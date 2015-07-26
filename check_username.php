<?php
    include "config.php"; 
	include "inc/connect.php";	
		if(isset($_POST["username"]))
{
   
  //received username value from registration page
  $username =  $_POST["username"]; 

  //check username in db
  $results = mysql_query("SELECT `username` FROM `universal_user` WHERE `username`='$username'");
  
  $username_exist = mysql_num_rows($results); //records count
  
  //if returned value is more than 0, username is not available
  if($username_exist) {
      die("<h5><font color='red'>Not Available<font></h5>");
  }else{
      die("<h5><font color='green'>Available<font></h5>");
  }
}
?>