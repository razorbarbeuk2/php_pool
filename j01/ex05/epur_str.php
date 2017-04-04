#!/usr/bin/php
<?php
	$tab = array();
	$render_tab = array();
	if ($argc > 1)
	{
		trim($argv[1]);
		$tab = explode(' ', $argv[1]);
		foreach ($tab as $key => $value)
		{
			if (!(empty($value)))
			{
				array_push($render_tab, $value);
			}
		}
		$render = implode(' ', $render_tab);
		echo $render;
	}
	
?>