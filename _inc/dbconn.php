<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("wwv.h.filess.io","bankdb_cornoldest","3cc3d7dfc88f69cda32656c885b969a5b587a5ea","bankdb_cornoldest","3306");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
