<?php
	function ft_is_sort($tab)
	{
		$faketab = $tab;
		sort($faketab);
		if (array_diff_assoc($tab, $faketab))
			return (false);
		return (true);
	}
?>