<?php
session_start();

// Initialiser le panier s'il n'existe pas
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $item = $_POST['item'];

    // Vérifier si l'article n'existe pas déjà
    if (!in_array($item, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $item;
    }

    // Redirection vers la même page (éviter le resubmit)
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Liste des articles
$items = ["Laptop", "Phone", "Headphones","Souries","Claviers"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mini Panier PHP</title>
</head>
<body>

<h2>Panier :<?php echo count($_SESSION['cart']); ?> Produits</h2>

<h3>Produits</h3>

<?php foreach ($items as $item): ?>

<form method="POST">
    <input type="hidden" name="item" value="<?php echo $item; ?>">
    <strong><?php echo $item; ?></strong>
    <button type="submit">Add to Cart</button>
</form>

<br>

<?php endforeach; ?>

</body>
</html>