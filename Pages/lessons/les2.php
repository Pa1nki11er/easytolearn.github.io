<?php
session_start();
if (!$_SESSION['user']) {
	header('Location: Login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Unterricht 1</title>
    <link rel='stylesheet' type='text/css' href='cssles/lestyle.css'>
    <link rel="shortcut icon" href="../../icons/free-icon-open-book-49279231.png" type="image/x-icon">
    <link href="http://fonts.cdnfonts.com/css/ocr-a-extended" rel="stylesheet">
    <script src="jsles/jsles.js"></script>
</head>
<body>
    <button class="btnmen" onclick="document.location='../Usermain.php'">Menu</button>
    <button class="btntonext" onclick="document.location='../Usermain.php'">Weiter!</button>
    <div class="all_boxes">
        <div class="how" id="what" onclick="setwordhow()" title="Was"><p>How</p></div>
        <div class="are" onclick="setwordare()" title="Ist"><p>are</p></div>
        <div class="you" onclick="setwordyou()" title="Deine"><p>you</p></div>
        
    </div>
    <p class="sentence" id="inpt" ></p>

    
    <div>
        <button type="submit" onclick="checksentenceles2()" class="btncheck" >Prüfen </button> 
        <button onclick="removewords()" class="btnremove">Löschen</button>  
    </div>
    <div>
        <p class="congtatulations" id="cong"></p>
    </div>
    
</body>
</html>