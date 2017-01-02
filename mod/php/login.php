<?php 
 $hn = 'localhost';
 $un = 'root';
 $pw = '';
 $db = '';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);
	mysqli_query($conn,"set names utf8");



