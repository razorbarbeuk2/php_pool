<?php

	function ft_split($str)
	{
		$render = array();
		if (is_string($str)) 
		{
			$tab = explode(" ", $str);
			sort($tab);
			foreach ($tab as $key => $value) 
			{
				if (!empty($value)) 
					array_push($render, $value);
			}
		}
		return ($render);
	}
?>
