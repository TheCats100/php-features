
<?php
  $nom = 'Marc';
  $nomFam = 'Doe';
  $note = 10;
  $note2 = 15;
  echo ($note + $note2)/2;
  echo "$nom \n";
  echo '$nom' . "\n";
  echo "$nom $nomFam";
?>


<?php 
  $notes=[10, 20, 10, 9, 8];
  echo $notes[1];

  $eleve = [
    'nom' => 'Doe',
    'prenom' => 'Marc',
    'notes' => [10, 20, 15]
  ];
  echo $eleve['nom'];
  print_r($eleve['notes']);
  $eleve['notes'][]= 18;
  print_r($eleve['notes']);
  $eleve[] = 'CM2';
  print_r($eleve);
?>

<?php
  $note = (int)readline('Entrez votre note :');
  if ($note === 10) {
    echo 'Bravo';
  } else {
    echo 'Raté';
  }
?>