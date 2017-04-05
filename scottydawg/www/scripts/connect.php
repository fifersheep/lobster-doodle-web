<?php
$db_host = "mysql51-35.perso"; //your host Database address
$db_username = "scottydag001"; //your account username
$db_pass = "ykld95004"; //your account password
$db_name = "scottydag001"; //your database name
@mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
@mysql_select_db("$db_name") or die ("no database");
?>
