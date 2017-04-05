#!/usr/bin/php
<?php
if ($argc > 1)
{
	foreach ($argv as $key => $value)
	{

		if ($key > 0 && $value)
			check_date($value);
	}
}

function check_date($val)
{
	$day = array("Lundi");
	if(preg_match('/(Lundi?|Mardi?|Mercredi?|Jeudi?|Vendredi?|Samedi?|Dimanche?)\s\d{1,2}\s(Janvier?|Février?|Mars?|Avril?|Mai?|Juin?|Juillet?|Aout?|Septembre?|Octobre?|Novembre?|Decembre?)\s\d{4}\s\d{2}:\d{2}:\d{2}/', $val))
	{
		$tab = explode(' ', $val);
		foreach ($tab as $key => $value) 
		{
			echo $value;
		}
		//$str_f = $tab[1]."/".$tab[3]."/".$tab[5];
		
	}
}
?>