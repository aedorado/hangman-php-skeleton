<?php

function isvowel($c) {
	if ($c == 'A' || $c == 'E' || $c == 'I' || $c == 'O' || $c == 'U') {
		return true;
	}
	return false;
}

session_start();

$str = $_SESSION['string'];
$vowels = array("B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Y", "Z");

if (isset($_POST['char'])) {
	$_SESSION[$_POST['char']] = 1;
	if (strpos($str, $_POST['char']) !== false) {
		echo 'YES<br>';
		$_SESSION['points'] = $_SESSION['points'] + 50;
	} else {
		echo 'NO<br>';
		$_SESSION['points'] = $_SESSION['points'] - 50;
	}
}

$stro = '';
for ($i = 0; $i != strlen($str); $i++) {
	if (isset($_SESSION[$str[$i]]) || isvowel($str[$i]) || $str[$i] == ' ') {
		$stro .= $str[$i];
	} else {
		$stro .= '_';
	}
}	echo "$stro<br>";

if (strpos($stro, '_') === false) {
	echo 'Done all. 8|';
}

print_r($_SESSION);


?>

<form action="game.php" method="post">
<input type="text" name="char">
<input type="submit">
</form>