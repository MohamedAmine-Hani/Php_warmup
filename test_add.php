<?php
require"db.php";
$title="How to bodyboarding";
$author="Pierre louis Costes";
$price=120.43;


$sql="Insert into library_books (title,author,price) Values (:title, :author, :price)";
$stmt=$connexion->prepare($sql);

$stmt->execute([
	':title' => $title,
	':author' => $author,
	':price'=> $price   ]);

$id = $connexion->lastInsertId();
echo "Le dernier livre ajouter avec un l ID ".$id;


?>