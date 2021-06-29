<?php

$creneaux = [];

while (true) {
    $debut = (int)readline('Heure d\'ouverture : ');
    $fin = (int)readline('Heure de fermeture : ');
    if ($debut >= $fin) {
        echo "Le créneaux ne peut pas être enregistré car l'heure d'ouverture ($debut) est supérieur à l'heure de fermeture\n";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline('Voulez-vous enregistre un nouveau créneau (o/n) ? ');
        if ($action !== 'o') {
            break;
        };
    }
};

print_r($creneaux);


while (true) {
    $heure = (int)readline('Heure d\'arrivée ? ');
    $panneau = "Magasin fermé\n";
    foreach ($creneaux as $creneau) {
        if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
            $panneau = "Magasin ouvert\n";
        }
    }
    echo $panneau;
    $action = readline('Essayer une autre heure (o/n) ? ');
    if ($action === "n") {
        break;
    }
}
