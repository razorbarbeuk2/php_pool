#!/usr/bin/php
<?php
$n = "\n";
$tab = array();
$elem = "";
if ($argc > 1)
{
	foreach ($argv as $key => $value) 
	{
		if ($key > 0)
		{
			$tab = explode(' ', $value);
			if ((count($tab)) > 1) 
			{
				$elem = array_shift($tab);
				array_push($tab, $elem);
			}
		}
	}
	foreach ($render_tab as $key => $value)
		echo $value.$n;
}
?>