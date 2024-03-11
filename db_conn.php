<?php 

$hostname = "localhost";
$user = "root";
$password = "root";
$db_name = "todo";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$db_name", 
                    $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}