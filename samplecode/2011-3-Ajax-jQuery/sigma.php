<?php
if ($_GET['n'] > 1) {
	$n = $_GET['n'];
	for ($i = 1; $i <= $n; $i++) {
		$sum += $i;
	}
	echo($sum);
} else {
	echo('n is not specified.');
}

?>