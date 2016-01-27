<?php

session_start();
$_SESSION['name'] = 'Whatever.';
$_SESSION['string'] = "THE CURIOUS CASE OF BENJAMIN BUTTON";
$_SESSION['points'] = 50;
header('Location:game.php');
// $_SESSION[''] = ;

?>