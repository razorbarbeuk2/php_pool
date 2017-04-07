<?php
function show_page($page)
{
	header("Content-Type: text/html");
	echo $page."\n";
	exit();
}

function check_pass($user, $pass)
{
	if ($user === 'zaz' && $pass === 'jaimelespetitsponeys') 
	{
		$img_base64 = base64_encode(file_get_contents('img/42.png'));
		show_page("<html><body>Bonjour ".$user."</br><img src='data:image/png;".$img_base64."></body></html>");
	}
	else
	{
		show_page("<html><body>Cette zone est accessible uniquement aux membres du site</body></html>");
	}
}

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) 
	check_pass($_SERVER['PHP_AUTH_USER'],$_SERVER['PHP_AUTH_PW']);
else
	echo "no username or password";
?>