<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = $_POST["username"];
    header("Location: SessionPage2.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<body>


    <form method="post">
        Nom de l'utilisateur :<input type="text" name="username">
        <button type="submit"> envoyer </button>
        </form>
        </body>
        </html>
    