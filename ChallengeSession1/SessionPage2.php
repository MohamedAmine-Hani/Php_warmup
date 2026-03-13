<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["language"] = $_POST["language"];
    header("Location: SessionPage3.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    

<form method="post">

<label>Votre Langage de programation preferer ?</label>

<select name="language">
<option value="PHP">PHP</option>
<option value="JavaScript">JavaScript</option>
<option value="Python">Python</option>
<option value="Java">Java</option>
<option value="C++">C++</option>
</select>

<button type="submit">Envoyer</button>

</form>

</div>

</body>
</html>