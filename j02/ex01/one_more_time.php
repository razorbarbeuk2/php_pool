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
	$day = array
	(
		array("lundi", "[L,l]undi"),
		array("mardi", "[M,m]ardi"),
		array("mercredi", "[M,m]ercredi"),
		array("jeudi", "[J,j]eudi"),
		array("vendredi", "[V,v]endredi"),
		array("samedi", "[S,s]amedi"),
		array("dimanche", "[D,d]imache"),
		);

	$month = array
	(
		array("janvier", "[J,j]anvier"),
		array("fevrier", "[F,f][e,é]vrier"),
		array("mars", "[M,m]ars"),
		array("avril", "[A,a]vril"),
		array("mai", "[M,m]ai"),
		array("juin", "[J,j]uin"),
		array("juillet", "[J,j]uillet"),
		array("aout", "[A,a]o[u,û]t"),
		array("septembre", "[S,s]eptembre"),
		array("octobre", "[O,o]ctobre"),
		array("novembre", "[N,n]ovembre"),
		array("decembre", "[D,d][e,é]cembre"),
	);

	if(preg_match('/('.$day[0][1].'?|'.$day[1][1].'?|'.$day[2][1].'?|'.$day[3][1].'?|'.$day[4][1].'?|'.$day[5][1].'?|'.$day[6][1].'?)\s\d{1,2}\s('.$month[0][1].'?|'.$month[1][1].'?|'.$month[2][1].'?|'.$month[3][1].'?|'.$month[4][1].'?|'.$month[5][1].'?|'.$month[6][1].'?|'.$month[7][1].'?|'.$month[8][1].'?|'.$month[9][1].'?|'.$month[10][1].'?|'.$month[11][1].'?)\s\d{4}\s\d{2}:\d{2}:\d{2}/', $val))
	{
		$tab = explode(' ', $val);
		date_default_timezone_set('Europe/Paris');
		foreach ($month as $key => $value) 
		{
			if (preg_match('/'.$value[1].'/', $tab[2]))
				$len_month = $key + 1;
		}
		$t = strtotime($tab[3]."/".$len_month."/".$tab[1]." ".$tab[4]);
		echo $t;
	}
	else
		echo "Wrong Format\n";
}
?>