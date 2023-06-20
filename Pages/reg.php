<?php
	session_start();
	if ($_SESSION['user']) {
		header('Location: Usermain.php');
		}
?>
<!DOCTYPE html>
<html lang="de">
<head>
	
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/stylelogin.css">
	<link href="http://fonts.cdnfonts.com/css/ocr-a-extended" rel="stylesheet">
	<link rel="shortcut icon" href="../icons/free-icon-open-book-49279231.png" type="image/x-icon">
</head>
<body>
	<script type="text/javascript" src="../js/script.js"></script>
	<div class="logform">
		<form action="../check.php" method="post">
		<input type="text"  class="un" placeholder="Benutzername" name="username">
		<input type="password"  class="pw" placeholder="Passwort" name="password">
		<input type="password"  class="reppw" placeholder="Wiederholungspasswort" name="password_confirm">
		<input type="email" class="em" placeholder="Email" required name="email">
		
		
	</div> 
	
	<button class="regwow" onclick="check();">Registrieren!</button>
	<p class="jtlw">EasyToLearn</p>
	
	<a href="Login.php" class="gotolog">Ich habe schon bereits eine Konto</a>
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