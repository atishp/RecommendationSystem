<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>



<body>






<?php 




include"config.php"; 
include "inc/connect.php";


	session_start();
	
	$username=$_SESSION["username"];
	
	echo" <center>
					<h1><font color='green'>...Welcome...</font></h1>
					<h1><font color='green'>".$username."</font></h1>
                     <h1><font color='green'>You have signed up Successfully</font></h1>
                     <h3><a href='profile.php?username=".$username."'><font color='green'>Click Here to Continue</font></a></h3>        
                     </center>";









?>


</body>
</html>
