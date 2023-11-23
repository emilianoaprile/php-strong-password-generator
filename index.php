<?php
include 'functions.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
</head>
<body>
    <div>

        <h1>Password Generator</h1>
        <p>Scrivi la lunghezza della password</p>

        <form action="" method="GET">
            <input type="text" name="user_password">
            <input type="submit" value="Invia">
        </form>

        <p><?= $password ?></p>

    </div>
    
    
</body>
</html>