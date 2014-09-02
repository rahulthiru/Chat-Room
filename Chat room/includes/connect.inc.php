<?php
$error='<font color=\"#fff\">'.'Could not connect';
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='social_media';
  if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!@mysql_select_db($mysql_db))
  {
  die($error);
  }
 function sqlq($query = ""){
	if(empty($query)) return false;
	$result = mysql_query($query) or die ("Whoops-a-daisy<li>Error no : " . mysql_errno() . "<li>error : " . mysql_error() . "<li>query : " . $query);
	return $result;
	}
?>