<?php
session_start();

include "db.php";

$username = $_POST["username"];

$password = $_POST["password"];

$sql = "SELECT email, password FROM users WHERE email = '$username' and 

password = md5('$password')";

$result = mysql_query($sql, $link);

if($result == false) {
  echo '<a href="login.php">Error: cannot execute query</a>';
  exit;
}

$num_rows = mysql_num_rows($result);
if($num_rows == 1) {
  $_SESSION["login"] = "OK";
  $_SESSION["username"] = $username;
 $redirect = "private.php";
}
else
 $redirect = "login.php";

mysql_free_result($result);
mysql_close($link);

header("Location: $redirect");