<?php
    session_start();
    require_once '../connectdb.php';
    $user=$_SESSION['user']['login'];
    $all = $_SESSION['user'];
    echo "..".$user;
    $path = 'uploads/' . time() . $_FILES['avatar']['name']; //Name der Hochgeladene Datei + Zeit, Pfad wohin die Datei gespeichert werden soll

    move_uploaded_file($_FILES['avatar']['tmp_name'], $path); //speichern
    $SQL="UPDATE `users` SET `avatar`='$path' WHERE `username`='$user' "; //im Datenbank speichern
    $check_user= mysqli_query($connect,$SQL ); //speichern
    $userpic = mysqli_query($connect, "SELECT * FROM `users` WHERE `avatar`='$path'"); //aktuellen Pfad holen
    $userpic1 = mysqli_fetch_assoc($userpic); //Abrufen des Ergebnisses einer MySQL-Datenbankabfrage als assoziatives Array.
    $_SESSION['user'] = [
        "avatar" => $userpic1['avatar'],
        


   ];
   header("Location: einstellungen.php");
   session_reset();
   
?>
<pre>
    <?php 

        print_r($all); 
        print_r($path);
        print_r($userpic);
    ?>
</pre>