<?php
require"db.php";
$minprice=50;
$stmt= $connexion->prepare("select * from library_books WHERE price >= :minprice");
$stmt->execute(['minprice' => $minprice]);
$livres=$stmt->fetchall ();
//print_r($livres);
echo "<ul>";
foreach ($livres as $liv) {
    echo "<li>".$liv["title"]."</li>";
}
echo"</ul>";

?>