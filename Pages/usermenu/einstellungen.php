<?php
session_start();
require_once '../connectdb.php';

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="usermenu.css">
    <title>Einstellungen</title>
</head>
<body>
    <button class="btnmen" onclick="document.location='/English/Pages/Usermain.php'" >Menu</button>
    <form action="saveavatar.php" method="post" enctype="multipart/form-data" >
    <?= $_SESSION['user']['login'] ?>
        <div>
            <label for="myfile">Wählen Sie bitte die Datei:</label>
            <input type="file" id="myfile" name="avatar" accept=".jpg, .jpeg, .png">
        </div>
        
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="300" height="300" alt="1">
        <button type="submit">Speichern</button>
    </form>

</body>
</html>