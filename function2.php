<?php
function soustraction($a, $b) {
    $resultat = $a;
    for ($i = 1; $i <= $b; $i++) {
        $resultat = $resultat - 1;
    }
    return $resultat;
}