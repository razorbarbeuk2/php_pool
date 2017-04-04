#!/usr/bin/php
<?php
	$render = "";
	$render_tab = array();
	if ($argc > 1)
	{
		$render = trim($argv[1]);
		foreach ($render as $key => $value)
		{
			if (!(empty($value)))
			{
				array_push($render_tab, $value);
			}
		}
		$render = implode(' ', $render_tab);
	}
	echo $render;
?>