<?php
  $user='root';
  $password='';
  $database='biblioteca';
  //$database='transporcar';
  $host='localhost';
  $mysqli = new mysqli($host,$user,$password,$database); 
  if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>