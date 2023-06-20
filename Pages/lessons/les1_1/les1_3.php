<?php
session_start();
require_once '../../connectdb.php';
if (!$_SESSION['user']) {
	header('Location: Login.php');
	}
    
$idwhat=1;
$idis=2;
$idyou=6;
$idyour=3;

$take_wordwhat = mysqli_query($connect, "SELECT words FROM `words` WHERE `id` = '$idwhat'");
$take_wordis = mysqli_query($connect, "SELECT words FROM `words` WHERE `id` = '$idis'");
$take_wordyou = mysqli_query($connect, "SELECT words FROM `words` WHERE `id` = '$idyou'");

$take_wordwas = mysqli_query($connect, "SELECT wordgerman FROM `words` WHERE `id` = '$idwhat'");
$take_wordmachen = mysqli_query($connect, "SELECT wordgerman FROM `words` WHERE `id` = '$idis'");
$take_worddu = mysqli_query($connect, "SELECT wordgerman FROM `words` WHERE `id` = '$idyou'");

$wordwas = mysqli_fetch_assoc($take_wordwas);
$wordmachen = mysqli_fetch_assoc($take_wordmachen);
$worddu = mysqli_fetch_assoc($take_worddu);

$wordwhat = mysqli_fetch_assoc($take_wordwhat);
$worddo = mysqli_fetch_assoc($take_wordis);
$wordyou = mysqli_fetch_assoc($take_wordyou);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Unterricht 1</title>
    <link rel='stylesheet' type='text/css' href='../cssles/lesstyleppick.css'>
    <link rel="shortcut icon" href="../../../icons/free-icon-open-book-49279231.png" type="image/x-icon">
    <link href="http://fonts.cdnfonts.com/css/ocr-a-extended" rel="stylesheet">
    
</head>
<body>
    <button class="btnmen" onclick="document.location='../../Usermain.php'">Menu</button>
    <button class="btntonext" onclick="document.location='les1_4.php'">Weiter!</button>
    <div class="all_boxes">
        <div class="w1" id="englisch-word"  ><p id="englisch-word4" class="w12"><?php echo $wordwhat['words'];?> </p></div>
        <div class="w2" id="englisch-word1"  ><p> <?php echo $wordyou['words'];?></p></div>
        <div class="w3" id="englisch-word2" ><p><?php echo $worddo['words'];?>  </p></div>
    </div>
    <div class="all_boxesger">
        <div class="w1g" id="german-word"  ><p id="german-word4"> <?php echo $worddu['wordgerman'];?></p></div>
        <div class="w2g" id="german-word1"  ><p><?php echo $wordmachen['wordgerman'];?> </p></div>
        <div class="w3g" id="german-word2"  ><p><?php echo $wordwas['wordgerman'];?>  </p></div>
        
        
    </div>
    <button type="submit" onclick="checkwords()" class="btncheck" >Prüfen </button> 

    <input type="text" id="wordininput1" >
    <input type="text" id="wordininput2 " >

    <div>
        <p class="congtatulations" id="cong"></p>
    </div>
    <script src="../jsles/jspick.js"></script>
</body>
</html>