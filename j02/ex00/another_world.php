#!/usr/bin/php
<?php
$n = "\n";
if ($argc > 1)
{
	foreach ($argv as $key => $value)
	{
		if ($key > 0 && $value)
		{
			$str = trim($value);
			echo preg_replace('/\s\s+/', ' ', $str);
		}
	}
}
?>