<?php
$cookie_name = "user";
$cookie_value = $_GET["naam"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
echo "Bedankt voor het ingeven van je naam, $cookie_value.";
//header("location: http://localhost/VoorbeeldOefening/groet.php/")
?>
</br>
<form action="groet.php">
<input type="submit" value="Groet">
</form>