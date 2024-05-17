<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$conn = mysqli_connect(
  'db',  
  'db',  
  'db',  
  'php_mysql_crud'  );

if (!$conn) {
    die('Connection error: ' . mysqli_connect_error());
}
?>