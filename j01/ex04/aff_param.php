#!/usr/bin/php
<?php
foreach ($argv as $key => $value) 
{
	if ($key > 0) {
		if ($argc > 1) {
			echo $value."\n";
		}
	}
}
?>
