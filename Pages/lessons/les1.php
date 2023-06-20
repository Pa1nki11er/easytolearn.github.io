<?php
session_start();
require_once '../connectdb.php';
if (!$_SESSION['user']) {
	header('Location: Login.php');
	}

$idwhat=1;
$idis=2;
$idyour=3;
$idname=4;
$take_wordwhat = mysqli_query($connect, "SELECT * FROM `words` WHERE `id` = '$idwhat'");
$take_wordis = mysqli_query($connect, "SELECT * FROM `words` WHERE `id` = '$idis'");
$take_wordyour = mysqli_query($connect, "SELECT * FROM `words` WHERE `id` = '$idyour'");
$take_wordname = mysqli_query($connect, "SELECT * FROM `words` WHERE `id` = '$idname'");

$wordwhat = mysqli_fetch_assoc($take_wordwhat);
$wordis = mysqli_fetch_assoc($take_wordis);
$wordyour = mysqli_fetch_assoc($take_wordyour);
$wordname = mysqli_fetch_assoc($take_wordname);



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
    <button class="btntonext" onclick="document.location='les1_1/les1_1.php'">Weiter!</button>
    <div class="all_boxes">
        <div class="w1" id="what" onclick="setword()" title="Was"><p class="wordinbox"><?php echo $wordwhat['words'];?> </p></div>
        <div class="w2" onclick="setword()" title="Ist"><p class="wordinbox"><?php echo mb_strtolower($wordis['words']);?> </p></div>
        <div class="w3" onclick="setword()" title="Deine"><p class="wordinbox"><?php echo mb_strtolower($wordyour['words']);?> </p></div>
        <div class="w4" onclick="setword()" title="Name"><p class="wordinbox"><?php echo mb_strtolower($wordname['words']);?> </p></div>
    </div>
    <p class="sentence" id="inpt" ></p>

    
    <div>
        <button type="submit" onclick="checksentenceles1()" class="btncheck" >Prüfen </button> 
        <button onclick="removewords()" class="btnremove">Löschen</button>  
    </div>
    <div>
        <p class="congtatulations" id="cong"></p>
    </div>
    
    <div class="hilfe" onclick="hilfe1()">
        ?
    </div>
    
    <div class="hilfeimage"> <img src="pic/presentsimplesmall.jpg" id="hilfeimage" alt="a"> </div>

</body>
</html>