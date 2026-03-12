<?php
$name = "";
$email = "";
$message = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lire les champs depuis le formulaire avec methode "POST"
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validation si l'email contient "@"
    if (strpos($email, "@") === false) {
        $error = "Adresse email invalide , entrez une adresse corecte .";


    } else {
        echo "<p>Formulaire est envoye avec succes!</p>";
        $name="";
        
        // Suprimmer le champs avec validation 
        
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

<?php if ($error): ?>
<p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>

<form method="post" action="">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br><br>

    <label>Email:</label><br>
    <input type="text" name="email"  required=""><br><br>

    <label>Message:</label><br>
    <textarea name="message"></textarea><br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>