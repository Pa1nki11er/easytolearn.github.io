<?php
session_start();
require_once '../../connectdb.php';
if (!$_SESSION['user']) {
	header('Location: Login.php');
	}
    
$idmy=7;
$idname=4;
$idis=2;
$idjack=8;

$take_wordmy = mysqli_query($connect, "SELECT * FROM `words` WHERE `id` = '$idmy'");
$take_wordname = mysqli_query($connect, "SELECT * FROM `words` WHERE `id` = '$idname'");
$take_wordis= mysqli_query($connect, "SELECT * FROM `words` WHERE `id` = '$idis'");
$take_wordjack= mysqli_query($connect, "SELECT * FROM `words` WHERE `id` = '$idjack'");



$wordmy = mysqli_fetch_assoc($take_wordmy);
$wordname = mysqli_fetch_assoc($take_wordname);
$wordis = mysqli_fetch_assoc($take_wordis);
$wordjack = mysqli_fetch_assoc($take_wordjack);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Unterricht 1</title>
    <link rel='stylesheet' type='text/css' href='../cssles/lestyle.css'>
    <link rel="shortcut icon" href="../../../icons/free-icon-open-book-49279231.png" type="image/x-icon">
    <link href="http://fonts.cdnfonts.com/css/ocr-a-extended" rel="stylesheet">
    <script src="../jsles/jsles.js"></script>
</head>
<body>
    <button class="btnmen" onclick="document.location='../../Usermain.php'">Menu</button>
    <button class="btntonext" onclick="document.location='les1_3.php'">Weiter!</button>
    <div class="all_boxes">
        <div class="w1" id="what" onclick="setword()" title="Was"><p><?php echo $wordmy['words'];?> </p></div>
        <div class="w2" onclick="setword()" title="Machen"><p><?php echo mb_strtolower($wordname['words']);?> </p></div>
        <div class="w3" onclick="setword()" title="Sie"><p><?php echo mb_strtolower($wordis['words']);?> </p></div>
        <div class="w4" onclick="setword()" title="Sie"><p><?php echo $wordjack['words'];?> </p></div>
        
        
    </div>
    <p class="sentence" id="inpt" ></p>

    
    <div>
        <button type="submit" onclick="checksentenceles1_2()" class="btncheck" >Prüfen </button> 
        <button onclick="removewords()" class="btnremove">Löschen</button>  
    </div>
    <div>
        <p class="congtatulations" id="cong"></p>
    </div>
    
    <div class="hilfe" onclick="hilfe1()">
        ?
    </div>
    
    <div class="hilfeimage"> <img src="../pic/presentsimplesmall.jpg" id="hilfeimage" alt="a"> </div>

</body>
</html>