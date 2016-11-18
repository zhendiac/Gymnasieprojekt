<!DOCTYPE html>
<html>
<head>
	<title>MoneyConvert</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<form action="convert.php" method="post">
<input type="text" name="startnmbr" placeholder="Amount of money">
<input type="text" name="year" maxlength="4" placeholder="Year">	
<input type="submit" name="calc">
</form>

<?php

$money = $_POST['startnmbr'];
$year = $_POST['year'];

if ($year < 999) {
	$multiplier =2.5;
}
	elseif ($year < 1499) {
		$multiplier = 2;
	}
	elseif ($year < 2000) {
		$multiplier = 1.5;
	}

if(isset($_POST['calc'])) {
	$sum = $money*$multiplier;

	echo "År ",$year, " så var ", $money, " ungefär samma som ", $sum, " är idag.";
}








?>

</body>
</html>