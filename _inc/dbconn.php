<?php
$serverName="wwv.h.filess.io";
$dbusername="bankdb_cornoldest";
$dbpassword="3cc3d7dfc88f69cda32656c885b969a5b587a5ea";
$dbname="bankdb_cornoldest";
mysql_connect($serverName,$dbusername,$dbpassword)/* or die('the website is down for maintainance')*/;
mysql_select_db($dbname) or die(mysql_error());
?>
