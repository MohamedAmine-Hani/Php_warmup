<?php
session_start();

$username = $_SESSION["username"];
$language = $_SESSION["language"];
?>

<!DOCTYPE html>
<html>
<head>

</head>

<body>
<h2>Conclusion </h2>

<?php
echo "<h3>Hello $username, you love $language!</h3>";
?>

</div>

</body>
</html>