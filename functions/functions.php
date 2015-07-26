<script type="text/javascript" src="js/jquery.js">
</script>
<script type="text/javascript">

function likeMovieFunction(item_id){

//alert('way to go Atish');
var request;
	try{
	//alert('hey alert1');
	request=new XMLHttpRequest();
	}catch(e){
	
	}
	//var item_id=document.getElementById("id").value;
	//alert(item_id);
	var item_domain="movie";
	var queryString="?item_id="+item_id+"&item_domain="+item_domain;
	
	request.open("GET","process_like.php"+queryString,true);
	request.send(null);
	document.getElementById(item_id).value="Liked!";
	document.getElementById(item_id).disabled=true;
	//alert('after disable');
	
}



function likeMusicFunction(item_id){

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
	
	request.open("GET","process_like.php"+queryString,true);
	request.send(null);
	document.getElementById(item_id).value="Liked!";
	document.getElementById(item_id).disabled=true;
	//alert('after disable');
	
}

function likeSiteFunction(item_id){

//alert('way to go Atish');
var request;
	try{
	//alert('hey alert1');
	request=new XMLHttpRequest();
	}catch(e){
	
	}
	//var item_id=document.getElementById("id").value;
	//alert(item_id);
	var item_domain="sites";
	var queryString="?item_id="+item_id+"&item_domain="+item_domain;
	
	request.open("GET","process_like.php"+queryString,true);
	request.send(null);
	document.getElementById(item_id).value="Liked!";
	document.getElementById(item_id).disabled=true;
	//alert('after disable');
	
}


function likeAppFunction(item_id){

//alert('way to go Atish');
var request;
	try{
	//alert('hey alert1');
	request=new XMLHttpRequest();
	}catch(e){
	
	}
	//var item_id=document.getElementById("id").value;
	//alert(item_id);
	var item_domain="apps";
	var queryString="?item_id="+item_id+"&item_domain="+item_domain;
	
	request.open("GET","process_like.php"+queryString,true);
	request.send(null);
	document.getElementById(item_id).value="Liked!";
	document.getElementById(item_id).disabled=true;
	//alert('after disable');
	
}

function likeBookFunction(item_id){

//alert('way to go Atish');
var request;
	try{
	//alert('hey alert1');
	request=new XMLHttpRequest();
	}catch(e){
	
	}
	//var item_id=document.getElementById("id").value;
	//alert(item_id);
	var item_domain="books";
	var queryString="?item_id="+item_id+"&item_domain="+item_domain;
	
	request.open("GET","process_like.php"+queryString,true);
	request.send(null);
	document.getElementById(item_id).value="Liked!";
	document.getElementById(item_id).disabled=true;
	//alert('after disable');
	
}

</script>

<?php


include("config.php"); 
	include "inc/connect.php";
	
	
function fetch_movies($username,$key)
{


  $query=" SELECT * FROM `universal_movies` WHERE $key IN

 (SELECT $key FROM `universal_movies` WHERE `id` IN
 (SELECT `item_id` FROM $username WHERE `item_domain`='movie')) AND `id` NOT IN (SELECT `item_id` FROM $username WHERE `item_domain`='movie') limit 3";
 
	$result=mysql_query($query);
	if(($row=mysql_fetch_assoc($result))== NULL )
{
 $query=" SELECT * FROM `universal_movies` order by rand() limit 3";
 
	$result=mysql_query($query);
	
	while($row=mysql_fetch_assoc($result))
	{
	
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeMovieFunction(".$row["id"].")'></td>
		<td>".$row["director"]."</td>
		<td>".$row["year"]."</td>
		<td>".$row["info"]." </td>
				
	</tr>
	
	
	</table>";	
	//echo $rate[0][0];
	}
	
	


}

else
{

	do
	{
	
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeMovieFunction(".$row["id"].")'></td>
		<td>".$row["director"]."</td>
		<td>".$row["year"]."</td>
		<td>".$row["info"]." </td>
				
	</tr>
	
	
	</table>";	
	//echo $rate[0][0];
	}
	while($row=mysql_fetch_assoc($result));
	}
	}


function fetch_apps($username)
{
  
       
   
       
        $query=" SELECT * FROM `universal_apps` WHERE `category` IN

 (SELECT `category` FROM `universal_apps` WHERE `id` IN
 (SELECT `item_id` FROM $username WHERE `item_domain`='apps')) AND `id` NOT IN (SELECT `item_id` FROM $username WHERE `item_domain`='apps') order by rand() limit 3 ";
 
 $result =mysql_query($query);
 
	if(($row=mysql_fetch_assoc($result))== NULL )
{
 $query=" SELECT * FROM `universal_apps` order by rand() limit 3";
 
	$result=mysql_query($query);
	
	while($row=mysql_fetch_assoc($result))
	{
	
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeAppFunction(".$row["id"].")'></td>
				
		<td>".$row["category"]."</td>
		<td>".$row["os"]."</td>
		<td>".$row["info"]." </td>  
				
	</tr>
	
	</table>";	
	}
	
	


}

else
{

	do
	{
	

	
	
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeAppFunction(".$row["id"].")'></td>
				
		<td>".$row["category"]."</td>
		<td>".$row["os"]."</td>
		<td>".$row["info"]." </td>  
				
	</tr>
	
	</table>";	
	//echo $rate[0][0];
	}
	while($row=mysql_fetch_assoc($result));
	}
	
	
	

}


	function fetch_sites($username)
	{
	
	  $query=" SELECT * FROM `universal_sites` WHERE `category` IN

 (SELECT `category` FROM `universal_sites` WHERE `id` IN
 (SELECT `item_id` FROM $username WHERE `item_domain`='sites')) AND `id` NOT IN (SELECT `item_id` FROM $username WHERE `item_domain`='sites') limit 3";
 
	$result=mysql_query($query);
	
	if(($row=mysql_fetch_assoc($result))== NULL )
{
 $query=" SELECT * FROM `universal_sites` order by rand() limit 3";
 
	$result=mysql_query($query);
	
	while($row=mysql_fetch_assoc($result))
	{
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeSiteFunction(".$row["id"].")'></td>
		<td>".$row["category"]."</td>
		<td>".$row["link"]."</td>
		<td>".$row["info"]." </td>
				
	</tr>
	
	</table>";	
	
	}
	
	


}

else
{

	do
	{
	
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeSiteFunction(".$row["id"].")'></td>
		<td>".$row["category"]."</td>
		<td>".$row["link"]."</td>
		<td>".$row["info"]." </td>
				
	</tr>
	
	</table>";	
	//echo $rate[0][0];
	}
	
	while($row=mysql_fetch_assoc($result));
	}
	}


	function fetch_music($username)
	{
 $query=" SELECT * FROM `universal_music` WHERE `genre` IN

 (SELECT `genre` FROM `universal_music` WHERE `id` IN
 (SELECT `item_id` FROM $username WHERE `item_domain`='music')) AND `id` NOT IN (SELECT `item_id` FROM $username WHERE `item_domain`='music') limit 3";
 
	$result=mysql_query($query);
	if(($row=mysql_fetch_assoc($result))== NULL )
{
 $query=" SELECT * FROM `universal_music` order by rand() limit 3";
 
	$result=mysql_query($query);
	
	while($row=mysql_fetch_assoc($result))
	{
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeMusicFunction(".$row["id"].")'></td>
		<td>".$row["artist"]."</td>
		<td>".$row["year"]."</td>
		<td>".$row["info"]." </td>
				
	</tr>
	
	</table>";	
	
	}
	
	


}

else
{

	do
	{
	
	
	echo "
	<table border='2' class='table table-hover' class='td'>
	
	<tr align='center'>
		<td><img src='".$row["image"]."' width='100px' height='100px'></td>
				<td><h3>".$row["name"]."</h3><input type=\"submit\" id= ".$row["id"]." name=\"like\" value=\"like\" onClick='likeMusicFunction(".$row["id"].")'></td>
		<td>".$row["artist"]."</td>
		<td>".$row["year"]."</td>
		<td>".$row["info"]." </td>
				
	</tr>
	
	</table>";	
	
	}
	while($row=mysql_fetch_assoc($result));
	}
	}
	



	function fetch_books($username)
	{
  $query=" SELECT * FROM `universal_books` WHERE `genre` IN

 (SELECT `genre` FROM `universal_books` WHERE `id` IN
 (SELECT `item_id` FROM $username WHERE `item_domain`='books')) AND `id` NOT IN (SELECT `item_id` FROM $username WHERE `item_domain`='books') limit 3";
 
	$result=mysql_query($query);
	if(($row=mysql_fetch_assoc($result))== NULL )
{
 $query=" SELECT * FROM `universal_books` order by rand() limit 3";
 
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

	do
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
	while($row=mysql_fetch_assoc($result));
	}
	}







?>