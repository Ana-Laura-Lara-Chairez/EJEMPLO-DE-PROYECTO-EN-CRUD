<?php
try{
$conn = new PDO('mysql:host=localhost; dbname=u646610080_laraana', 'u646610080_laraana', 'Utd_2020');
} catch(PDOException $e){
   echo "Error: ". $e->getMessage();
   die();
}
?>