<?php
  $host_name = 'db5006952814.hosting-data.io';
  $database = 'dbs5740687';
  $user_name = 'dbu2414574';
  $password = '!Natalia999';

  $link=mysqli_connect($host_name,$user_name,$password,$database);


  try {
  $conn = new PDO("mysql:host=$host_name;dbname=$database;", $user_name, $password);
  } catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
  }
?>

