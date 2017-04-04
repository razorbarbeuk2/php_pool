#!/usr/bin/php
<?php
	echo "Entrez un nombre: ";
	$handle = fopen('php://stdin', 'r');
	while ($f = fgets($handle))
	{
		$nbr = trim($f, "\n");
		if (is_numeric($nbr))
		{
			if ($nbr % 2 == 1)
				echo "Le chiffre ".$nbr." est Impair\n";
			else
				echo "Le chiffre ".$nbr." est Pair\n";
		}
		else
			echo "'".$nbr."' n'est pas un chiffre\n";
		echo "Entrez un nombre: ";
	}
	fclose($handle);
?>

