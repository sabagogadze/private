<?php
$mysql_host = 'localhost';
$mysql_user = 'saba8891';
$mysql_pass = '';
$mysql_db = 'login';
$link = mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
$database = mysqli_select_db($link,$mysql_db);
if (!$link || !$database) {
   die ('error');
	
}


?>