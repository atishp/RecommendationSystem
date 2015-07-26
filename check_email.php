<?php
    include "config.php"; 
	include "inc/connect.php";	
		if(isset($_POST["email"]))
{
  
  //received email value from registration page
  $email =  $_POST["email"]; 

  //check email in db
  $results = mysql_query("SELECT `email` FROM `universal_user` WHERE `email`='$email'");
  
  $email_exist = mysql_num_rows($results); //records count
  
  //if returned value is more than 0, email is not available
  if($email_exist) {
      die("<h5><font color='red'>This email has already been registered!<font></h5>");
  }else{
      die("<h5><font color='green'>You are good to go!<font></h5>");
  }
}
?>