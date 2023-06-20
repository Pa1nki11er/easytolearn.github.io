<?php
session_start();
if (!$_SESSION['user']) {
	header('Location: Login.php');
	}

?>
<!DOCTYPE html>
<html lang="de">
<head>
	<title><?= $_SESSION['user']['login'] ?></title>
	<link rel="stylesheet" type="text/css" href="../css/usermain.css">
	<link href="http://fonts.cdnfonts.com/css/ocr-a-extended" rel="stylesheet">
	<link rel="shortcut icon" href="../icons/free-icon-open-book-49279231.png" type="image/x-icon">
</head>

<body >
<script type="text/javascript" src="../js/script.js"></script>
	<header> 
	<div class="usermenu"> 
		<button class="btnmen" onclick="document.location='/English/Pages/Usermain.php'" >Menu</button>
		<button class="btnword" onclick="document.location='/English/Pages/wordcards/wordcards.php' ">Vokabelnkartei</button>
		<button class="btnmtdl" onclick="document.location='/English/Pages/ToDoList/ToDo.php' ">Mein ToDoList</button>
		<button class="btntrans" onclick="document.location='/English/Pages/Translate/transl.html'">Übersetzer</button>
	</div>
	<div class="profile">
		<p class="nickname"> 
		<?= $_SESSION['user']['login'] ?>
		</p>
	</div>
	<div class="picture" onclick="menuToggle()">
		
		
		<img class="userpic" src="usermenu/<?= $_SESSION['user']['avatar'] ?>"  >
		
			<div class="dropdowncontent" id="submenu" >
				<a href="usermenu/einstellungen.php" class="elem"><p>Einstellungen</p></a>
				<a href="#" class="elem"> <p>Dein Profil</p> </a>
    			<a href="exit.php" class="elem"><p>Abmelden</p></a>
			</div>
	</div>
	</header>
	

	<div class="level-tree">
	<a href="lessons/les1_1/les1_theory.html">
		<div class="first_level"> 	
			<p class="text_first_level" >  Unterricht 1</p>
		</div></a>

		<a href="lessons/les2.php">
		<div class="second_level" href="/lessons/les2.php">
			<p class="text_first_level" > Unterricht 2</p>
		</div>
		</a>
		<div class="t3_level">
			<p class="text_first_level"> Unterricht 3</p>
		</div>
		<div class="t4_level">
			<p class="text_first_level"> Unterricht 4</p>
		</div>
		<div class="t5_level">
			<p class="text_first_level"> Unterricht 5</p>
		</div>
		<div class="t6_level">
			<p class="text_first_level"> Unterricht 6</p>
		</div>
		<div class="t7_level">
			<p class="text_first_level"> Unterricht 7</p>
		</div>
		<div class="t8_level">
			<p class="text_first_level"> Unterricht 8</p>
		</div>
		<div class="t9_level">
			<p class="text_first_level"> Unterricht 9</p>
		</div>
		<div class="t10_level">
			<p class="text_first_level"> Unterricht 10</p>
		</div>
	</div>
		
	
</body>
</html>