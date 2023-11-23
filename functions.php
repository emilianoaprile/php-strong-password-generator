<?php

$password_length = intval($_GET['user_password']);
var_dump($password_length);

// function
function generateRandomPassword($password_length) {
    //Inizializzo una random password
    $password = '';
    
    for ($i = 0; $i < $password_length; $i++) {
        // genero la password con il range 32 - 126 che comprende minuscole, maiuscole, numeri e simboli
        $password .= chr(rand(32, 126));

    }
    return $password;
  };
  $password = generateRandomPassword($password_length);
  var_dump($password);


?>