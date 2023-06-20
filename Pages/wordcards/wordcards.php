<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<title>Vokabelnkartei</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="../../../../icons/free-icon-open-book-49279231.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="wordcss/wordcss.css">
	<link href="http://fonts.cdnfonts.com/css/ocr-a-extended" rel="stylesheet">
</head>
<body >
	<form action="savewords.php" method="post">
		<script type="text/javascript" src="js/wordjs.js"></script>
		
		
	
		<button class="btnsave" type="submit" onclick="saveCards()">Speichern</button>
	</form>
	<button id="createCardButton" onclick="createCard()" class="btncreate">Eine Kartei hinzufügen</button>
	<button class="btnmenu" onclick="document.location='../Usermain.php'">Menu</button>
</div>
</body>
</html>
