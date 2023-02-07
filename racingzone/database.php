<?php
  $host_name = '.';
  $database = '';
  $user_name = '';
  $password = '';

  $link=mysqli_connect($host_name,$user_name,$password,$database);


  try {
  $conn = new PDO("mysql:host=$host_name;dbname=$database;", $user_name, $password);
  } catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
  }
?>

