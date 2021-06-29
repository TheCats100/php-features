<?php
$notes = [10, 15, 16];

$eleves = [
    'cm2' => 'Jean',
    'cm1' => 'Marc'
];

foreach ($notes as $note) {
    echo "- $note \n";
};

foreach ($eleves as $classe => $eleve) {
    echo "$eleve est dans la classe $classe \n";
};

$listEleves = [
    'cm2' => ['Jean', 'Marc', 'Jane', 'Marion'],
    'cm1' => ['Emilie', 'Marcelin']
];

foreach ($listEleves as $classe => $eleves) {
    echo "La classe $classe:\n";
    foreach ($eleves as $eleve) {
        echo "- $eleve\n";
    };
};