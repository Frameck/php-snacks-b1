<?php

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($name) < 3 || !strchr($mail, '.') || !strchr($mail, '@') || !is_numeric($age)) {
        exit('Accesso negato');
    }

    echo 'Accesso riuscito'
?>