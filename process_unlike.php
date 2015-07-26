<?php
session_start();
  if(isset($_SESSION['username'])){
  
  include("config.php"); 
  include("inc\connect.php");
 
 $username= $_SESSION['username'];
// echo"atish";
//$sql="INSERT INTO $_SESSION[username] (item_id,item_domain) VALUES('1','movies')";
//mysql_query($sql);
$item_id=$_GET["item_id"];
$item_domain=$_GET["item_domain"];
//if($act == 'like'): //if the user click on "like"
    //if(($like_count == 0)){
        //mysql_query('INSERT INTO $_SESSION[username] (item_id,item_domain)VALUES($item_id,$item_domain)');
		
		if($item_domain=="movie")
		{
		mysql_query("DELETE FROM ".$username." WHERE `item_id`=".$item_id." AND `item_domain`='".$item_domain."'");
		
	    mysql_query("UPDATE universal_movies SET likes=likes-1 WHERE id='$item_id'");
		}
		else
		if($item_domain=="apps")
		{
		mysql_query("DELETE FROM ".$username." WHERE `item_id`=".$item_id." AND `item_domain`='".$item_domain."'");
		
	    mysql_query("UPDATE universal_apps SET likes=likes-1 WHERE id='$item_id'");
		}
		else
		if($item_domain=="music")
		{
		mysql_query("DELETE FROM ".$username." WHERE `item_id`=".$item_id." AND `item_domain`='".$item_domain."'");
		
	    mysql_query("UPDATE universal_music SET likes=likes-1 WHERE id='$item_id'");
		}
		else
		if($item_domain=="books")
		{
		mysql_query("DELETE FROM ".$username." WHERE `item_id`=".$item_id." AND `item_domain`='".$item_domain."'");
		
	    mysql_query("UPDATE universal_books SET likes=likes-1 WHERE id='$item_id'");
		}
		else
		if($item_domain=="sites")
		{
		mysql_query("DELETE FROM ".$username." WHERE `item_id`=".$item_id." AND `item_domain`='".$item_domain."'");
		
	    mysql_query("UPDATE universal_sites SET likes=likes-1 WHERE id='$item_id'");
		}
	
	//mysql_query("INSERT INTO universal_movies (`likes`) VALUES ('$like1') WHERE id='$item_id'");
		
		//mysql_query("UPDATE universal_movies SET (`likes`) TO ('$like') WHERE id='$item_id'");
		
		
		
	    //}
    //if($dislike_count == 1){
      //  mysql_query('UPDATE wcd_yt_rate SET rate = 1 WHERE id_item = '.$pageID.' and ip ="'.$user_ip.'"');
    //}
//endif;
}
else{
header("Location:http://localhost/project-php/login.php");
}

?>