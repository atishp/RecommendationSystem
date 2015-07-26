<?php
$connection=mysql_connect("localhost", "root", "") or die("Server Not Found");
mysql_select_db("recommender systems", $connection) or die("Database Problem");
?>