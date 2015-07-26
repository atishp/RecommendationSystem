<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>



<body>






<?php 
$username=$_GET['username'];
$password=$_GET['password'];



include"config.php"; 
include "inc/connect.php";

$result=mysql_query("select * from `universal_user` where `username`='".$username."' and `password`='".$password."'");



if($row=mysql_fetch_assoc($result))
{
	session_start();
	$_SESSION["uid"]=$row["id"];
	$_SESSION["username"]=$row["username"];
	//header("location:profile.php");
	
	header("location:profile.php");
}
else
{
	//header("location:Error_login.php?message=error");
	
	echo " <center>
                     <h1><font color='red'>Invalid Username/Password</font></h1>
                     <h3><a href='Error_Login.php'><font color='green'>Click Here for Login</font></a></h3>        
                     </center>";

}









?>


</body>
</html>
