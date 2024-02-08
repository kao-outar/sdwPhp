<?php
    function multiplication($a, $b) {
        $resultat = 0;
        for ($i = 1; $i <= $b; $i++) {
            $resultat = $resultat + $a;
        }
        return $resultat;
    }
    //test
    $a=2;
    $b=3;
    echo "Multiplication : " . multiplication($a, $b) . "<br>";