<?php

$incontri = [
  [
      'Casa' => 'Olimpia Milano',
      'Ospite' => 'Cantu',
      'Punti_casa' => 85,
      'Punti_ospite' => 80,
  ],  
  [
    'Casa' => 'Firenze',
    'Ospite' => 'Roma',
    'Punti_casa' => 90,
    'Punti_ospite' => 102,
  ],
  [
    'Casa' => 'Olimpia Matera',
    'Ospite' => 'Mantova Basket',
    'Punti_casa' => 93,
    'Punti_ospite' => 75,
  ],    
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>
<body>

    <h1>Giornata di Campionato N. 1</h1>
    <ul>
      <?php

      for($i = 0; $i < count($incontri); $i++){
        $incontri = $incontri[$i];
        var_dump($incontri);
        ?> 
          <!-- <li>
               <?php //echo "{$incontri['Casa']} vs {$incontri['Ospite']} || {$incontri['Punti_casa']} - {$incontri['Punti_ospite']}"
              ?>//
          </li> -->

        <?php
      }
      
      ?>

    </ul>
    
</body>
</html>