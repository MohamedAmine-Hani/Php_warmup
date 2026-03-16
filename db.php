<?php 
$host="localhost";
$dbname="mydb";
$username="root";
$password="";

try{
    $connexion=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
}catch(PDOException $e){
    die("Erreur de connexion à la base de données.");
}


?>