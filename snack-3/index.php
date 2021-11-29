<?php

    $numbers = [];

    for ($i=0; $i < 15; $i++) {
        $newNumber = rand(0, 100);

        if (in_array($newNumber, $numbers)) {
            $i--;
        };

        $numbers[$i] = $newNumber;
    }

    echo '<pre>';
    print_r($numbers);
    echo '</pre>';

?>