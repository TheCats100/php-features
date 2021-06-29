<?php
$note = null;
$notes = [];
while ($note !== "fin") {
    $note = readline('Entrez une note ou "fin":');
    if($note !== "fin") {
        $notes[] = (int)$note;
    };
};

foreach ($notes as $listNotes) {
    echo "- $listNotes \n";
};
