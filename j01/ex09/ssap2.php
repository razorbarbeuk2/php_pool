#!/usr/bin/php
<?php
$n = "\n";
$tab = array();
$render_tab = array();
if ($argc > 1)
{
	var_dump($argv);
	foreach ($argv as $key => $value) 
	{
		if ($key > 0)
		{
			$str = escapeshellarg($value);
			echo $str.$n;
			$tab = explode(' ', $str);
			$len = count($tab);
			//echo $len.$n;
			if (str_word_count($value, 0) > 1) 
			{
				
				foreach ($tab as $key => $val) 
					array_push($render_tab, $val);
			}
			else
				array_push($render_tab, $value);
		}
	}
	// sort($render_tab);
	// foreach ($render_tab as $key => $value)
	// 	echo $value.$n;
}
?>