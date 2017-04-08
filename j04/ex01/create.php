<?php

if ($_POST['submit'] == 'OK')
{
	if ($_POST['login'] && $_POST['passwd'])
	{
		if (!file_exists("./private"))
			mkdir("./private");
		if (file_exists("./private/passwd")) 
		{
			$id = verif_id("./private/passwd");
			if (check_login($id))
				$id[] = array("login" => $_POST['login'], "passwd" => hash("Whirlpool", $_POST['passwd']));
			else
				echo "ERROR\n";
		}
		else{
			$id = array(
				array("login" => $_POST['login'], "passwd" => hash("Whirlpool", $_POST['passwd']))	
			);
		}
		file_put_contents("./private/passwd", serialize($id));
	}
}
else
	echo "ERROR\n";

function check_login($tab)
{
	foreach ($tab as $key => $value) 
	{
		if ($value['login'] == $_POST['login'])
			return (false);
	}
	return (true);
}

function verif_id($file)
{
	if (file_exists("./private"))
	{
		$fileadd = "./private/passwd";
		$result = file_get_contents($fileadd);
		return (unserialize($result));
	}
	else
		return false;
}

?>