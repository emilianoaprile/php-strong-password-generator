<?php

$password_length = intval($_GET['user_password']);
var_dump($password_length);

// function
function generateRandomPassword($password_length) {
    //Inizializzo una random password
    $password = '';
    
    for ($i = 0; $i < $password_length; $i++) {
        $password .= chr(rand(32, 126));

    }
    return $password;
  };
  $password = generateRandomPassword($password_length);
  var_dump($password);


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

    </div>
    
    
</body>
</html>