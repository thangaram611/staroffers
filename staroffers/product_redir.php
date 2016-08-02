<?php

session_start();
$loc=$_POST['location'];
$sloc=$_POST['sublocation'];
$cat=$_POST['category'];
$_SESSION["location"]=$loc;
$_SESSION["sublocation"]=$sloc;
$_SESSION["category"]=$cat;
header('Location: products.php');
exit;
?>