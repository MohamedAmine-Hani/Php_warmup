<?php


$categories = ["telephone", "ordinateur", "accessoire"];

$produits = [
    ["nom" => "iPhone 13", "categorie" => "telephone"],
    ["nom" => "iPhone 14", "categorie" => "telephone"],
    ["nom" => "1Samsung Galaxy", "categorie" => "telephone"],
    ["nom" => "MacBook Pro", "categorie" => "ordinateur"],
    ["nom" => "Dell XPS", "categorie" => "ordinateur"],
    ["nom" => "Casque Sony", "categorie" => "accessoire"],
    ["nom" => "Souris Logitech", "categorie" => "accessoire"]
];

$categorieChoisie = isset($_GET['categorie']) ? htmlspecialchars($_GET['categorie']) : "";
$tri = isset($_GET['tri']) ? $_GET['tri'] : "";

$produitsFiltres = [];

foreach($produits as $produit){

    if($categorieChoisie == "" || $produit['categorie'] == $categorieChoisie){
        $produitsFiltres[] = $produit;
    }

}

if($tri == "az"){
    usort($produitsFiltres, function($a,$b){
        return strcmp($a['nom'], $b['nom']);
    });
}

if($tri == "za"){
    usort($produitsFiltres, function($a,$b){
        return strcmp($b['nom'], $a['nom']);
    });
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Liste des Produits</title>

<style>
body{
    font-family: Arial;
}

a{
    text-decoration: none;
    margin-right: 10px;
    color: blue;
}

a:hover{
    color: red;
}

ul{
    margin-top:20px;
}

</style>

</head>
<body>

<h1>Catégories</h1>

<a href="produits.php">Tous</a>

<?php
foreach($categories as $cat){
    echo "<a href='?categorie=$cat'>$cat</a> ";
}
?>

<hr>

<h2>Trier les produits</h2>

<a href="?categorie=<?php echo $categorieChoisie ?>&tri=az">A → Z</a> |
<a href="?categorie=<?php echo $categorieChoisie ?>&tri=za">Z → A</a>

<hr>

<h2>Produits</h2>

<ul>

<?php

foreach($produitsFiltres as $produit){

    echo "<li>".$produit['nom']." (".$produit['categorie'].")</li>";

}

?>

</ul>

</body>
</html>