<?php
function repondre_oui_ou_non (string $phrase) : ?bool {
    while(true) {
        $reponse = readline($phrase . " - (o)ui/(n)on : ");
        if ($reponse === 'o') {
            return true;
        } elseif ($reponse === 'n') {
            return false;
        }
    }
}

$result = repondre_oui_ou_non('Voulez-vous continuer ?');

var_dump($result);