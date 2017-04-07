<?php  
	session_start();
	if ($_GET['submit'] == 'OK') 
	{
		if (isset($_GET['login']))
			$_SESSION['login'] = $_GET['login'];
		else
			$_SESSION['login'] = "";
		if (isset($_GET['passwd']))
			$_SESSION['passwd'] = $_GET['passwd'];
		else
			$_SESSION['passwd'] = "";
	}
?>
<!DOCTYPE>
<html>
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<style>
		.wrapper{
			position:relative;
			width: 800px;
			height: 600px;
			background:#2c3e50;
			font-family: sans-serif;
		}
		.form_config{
			height:50px;
			text-align:center;
			text-transform:uppercase;
			font-weight:400;
			line-height:50px;

		}
		form{
			padding-top:30%;
			text-align:center;
		}
		label{
			display:inline-block;
			width:150px;
			background:white;
			color:#95a5a6;
			vertical-align:middle;
		}
		input{
			border:none;
			width:350px;
			background:#ecf0f1;
			color:#2c3e50;
			outline: none;
		}
		input[type=text]:focus{
			outline: none;	
		}
		.btn{
			width:inherit;
			padding-left:50px;
			padding-right:50px;
			background:#bdc3c7;
			cursor:pointer;
			color:#2c3e50;
			text-align: right;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="content">
			<form action="index.php" method="GET">
				<label class="form_config" for="login">login</label><input class="form_config" type="text" name="login" class="" placeholder="insert username" value="<?php echo $_SESSION['login'] ?>"></br></br>
				<label class="form_config" for="password">passwd</label><input class="form_config" type="password" name="passwd" class="" placeholder="insert password" value="<?php echo $_SESSION['passwd'] ?>"></br></br>
				<input class="btn form_config" type="submit" name="submit" value="OK">
			</form>
		</div>
	</div>
</body>
</html>
