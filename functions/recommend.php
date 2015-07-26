




<?php


include("config.php"); 
	include "inc/connect.php";
	
	
	
	
	function recommend_apps($username,$key)
{


 $query=" SELECT * FROM `universal_apps` WHERE $key IN

 (SELECT $key FROM `universal_apps` WHERE `id` IN
 (SELECT `item_id` FROM $username WHERE `item_domain`='apps')) AND `id` NOT IN (SELECT `item_id` FROM $username WHERE `item_domain`='apps') order by rand() limit 10 ";
 
	$result=mysql_query($query);
			if(($row=mysql_fetch_assoc($result))== NULL )
{



 $query=" SELECT * FROM `universal_apps` order by rand() limit 10";
 
	$result=mysql_query($query);
	
	while($row=mysql_fetch_assoc($result))
	{
	
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeAppFunction(".$row["id"].")'>
				<br>Total likes :".$row['likes']."</br>
				
		<td>".$row["category"]."</td>
		<td>".$row["os"]."</td>
		<td>".$row["info"]." </td>  
				
	</tr>
	
	</table> ";	
	}
	
	


}

else
{
	 echo "recommended by " .$key;
	do
	{
	

	
	
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeAppFunction(".$row["id"].")'>
				<br>Total likes :".$row['likes']."</br>
				
		<td>".$row["category"]."</td>
		<td>".$row["os"]."</td>
		<td>".$row["info"]." </td>  
				
	</tr>
	
	</table> ";	
	
	}
	while($row=mysql_fetch_assoc($result));
	}
	}
	
	
	
	function recommend_movies($username,$key)
{


 $query=" SELECT * FROM `universal_movies` WHERE `$key` IN

 (SELECT `$key` FROM `universal_movies` WHERE `id` IN
 (SELECT `item_id` FROM $username WHERE `item_domain`='movie')) AND `id` NOT IN (SELECT `item_id` FROM $username WHERE `item_domain`='movie') limit 10";
 
	$result=mysql_query($query);
		if(($row=mysql_fetch_assoc($result))== NULL )
{



 $query=" SELECT * FROM `universal_movies` order by rand() limit 10";
 
	$result=mysql_query($query);
	
	while($row=mysql_fetch_assoc($result))
	{
	echo "
	
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><br><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeMovieFunction(".$row["id"].")'>
				<br>Total likes :".$row['likes']."</br>
		<td>".$row["director"]."</td>
		<td>".$row["year"]."</td>
		<td>".$row["info"]." </td>
				
	</tr>
	
	
	</table>";	
	}
	
	


}

else
{
	 echo "recommended by " .$key;
	do
	{
	
	
	
	
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><br><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeMovieFunction(".$row["id"].")'>
				<br>Total likes :".$row['likes']."</br>
		<td>".$row["director"]."</td>
		<td>".$row["year"]."</td>
		<td>".$row["info"]." </td>
				
	</tr>
	
	
	</table>";	
	
	
	
	}
	while($row=mysql_fetch_assoc($result));
	}
	}
	
	function recommend_music($username,$key)
{


 $query=" SELECT * FROM `universal_music` WHERE `$key` IN

 (SELECT `$key` FROM `universal_music` WHERE `id` IN
 (SELECT `item_id` FROM $username WHERE `item_domain`='music')) AND `id` NOT IN (SELECT `item_id` FROM $username WHERE `item_domain`='music') limit 10";
 
	$result=mysql_query($query);
	if(($row=mysql_fetch_assoc($result))== NULL )
{



 $query=" SELECT * FROM `universal_music` order by rand() limit 10";
 
	$result=mysql_query($query);
	
	while($row=mysql_fetch_assoc($result))
	{
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><br><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeMusicFunction(".$row["id"].")'>
				<br>Total likes :".$row['likes']."</br>
		<td>".$row["artist"]."</td>
		<td>".$row["year"]."</td>
		<td>".$row["info"]." </td>
				
	</tr>
	
	
	</table>";	
	}
	
	


}

else
{
	 echo "recommended by " .$key;
	do
	{
	
	
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><br><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeMusicFunction(".$row["id"].")'>
				<br>Total likes :".$row['likes']."</br>
		<td>".$row["artist"]."</td>
		<td>".$row["year"]."</td>
		<td>".$row["info"]." </td>
				
	</tr>
	
	
	</table>";	

	}
	while($row=mysql_fetch_assoc($result));
	}
	}
	
	
	function recommend_books($username,$key)
{


 $query=" SELECT * FROM `universal_books` WHERE $key IN

 (SELECT $key FROM `universal_books` WHERE `id` IN
 (SELECT `item_id` FROM $username WHERE `item_domain`='books')) AND `id` NOT IN (SELECT `item_id` FROM $username WHERE `item_domain`='books') limit 10";
 
	$result=mysql_query($query);
	if(($row=mysql_fetch_assoc($result))== NULL )
{



 $query=" SELECT * FROM `universal_books` order by rand() limit 10";
 
	$result=mysql_query($query);
	
	while($row=mysql_fetch_assoc($result))
	{
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><br><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeBookFunction(".$row["id"].")'></td>
		<td>".$row["writer"]."</td>
		<td>".$row["year"]."</td>
		<td>".$row["publication"]."</td>
		<td>".$row["info"]." </td>
				
	</tr>
	
	
	</table>";
	}
	
	


}

else
{
	 echo "recommended by " .$key;
	do
	{

	
	
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><br><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeBookFunction(".$row["id"].")'>
				<br>Total likes :".$row['likes']."</br>
		<td>".$row["writer"]."</td>
		<td>".$row["year"]."</td>
		<td>".$row["publication"]."</td>
		<td>".$row["info"]." </td>
				
	</tr>
	
	
	</table>";	
	
	}
	while($row=mysql_fetch_assoc($result));
	}
	}
	
	function recommend_sites($username)
{

	
 $query=" SELECT * FROM `universal_sites` WHERE `category` IN

 (SELECT `category` FROM `universal_sites` WHERE `id` IN
 (SELECT `item_id` FROM $username WHERE `item_domain`='sites')) AND `id` NOT IN (SELECT `item_id` FROM $username WHERE `item_domain`='sites') limit 10";
 
	$result=mysql_query($query);
	if(($row=mysql_fetch_assoc($result))== NULL )
{



 $query=" SELECT * FROM `universal_sites` order by rand() limit 10";
 
	$result=mysql_query($query);
	
	while($row=mysql_fetch_assoc($result))
	{
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><br><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeSiteFunction(".$row["id"].")'>
				<br>Total likes :".$row['likes']."</br>
		<td>".$row["category"]."</td>
		<td>".$row["link"]."</td>
		<td>".$row["info"]." </td>
				
	</tr>
	
	</table>";	
	}
	
	


}

else
{
	 echo "recommended by category";
	do
	{

	
	
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><br><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeSiteFunction(".$row["id"].")'>
				<br>Total likes :".$row['likes']."</br>
		<td>".$row["category"]."</td>
		<td>".$row["link"]."</td>
		<td>".$row["info"]." </td>
				
	</tr>
	
	</table>";	

	}
	while($row=mysql_fetch_assoc($result));
	}
	}
	
	
