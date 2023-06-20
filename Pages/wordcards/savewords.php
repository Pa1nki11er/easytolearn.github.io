<?php 
    session_start();
    $nickname = $_SESSION['user']['login'];
    require_once '../connectdb.php';
    $inputsfront = $_POST['inputfront[]'];
    $inputsback = $_POST['inputback[]'];
    foreach ($inputsfront as $key => $value) {
        mysqli_query($connect, "INSERT INTO `wordfromcards`
			(`username`, `wordfront`, `wordback`) 
			VALUES ('$nickname', '$inputsfront', '$inputsback')");
    }
    
?>