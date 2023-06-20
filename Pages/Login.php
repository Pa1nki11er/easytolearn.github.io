<?php
	session_start();
	if ($_SESSION['user']) {
	header('Location: Usermain.php');
	}
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta http-equiv="Cache-Control" content="no-cache">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/stylelogin.css">
	<link href="http://fonts.cdnfonts.com/css/ocr-a-extended" rel="stylesheet">
</head>
<body>
	<div class="logform">
		<form action="../log.php" method="post">
		<input type="password"  class="pw" placeholder="Passwort" name="password">
		<input type="email" class="em" placeholder="Email" name="email">
		
		
	</div> 
	
	<button class="logw" > Login</button>
	<p class="jtlw">EasyToLearn</p>
	<a class="reg" title="Es geht leicht" href="reg.php">Registrieren</a>
	
	</form>
	<?php 
		if(isset($_SESSION['message']))
		{
			echo '<p class="msg">' . $_SESSION['message'] . '</p>';
		}
		unset($_SESSION['message']);
	?>
</body>
</html>