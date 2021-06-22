<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$calendario=[
'tappa1' => [
    'squadra_casa' => 'Olimpia Milano',
    'squadra_ospite' => 'Cantù',
    'Punti_sq_casa' => '55',
    'Punti_sq_ospite' => '60'
],

'tappa2' => [
    'squadra_casa' => 'Virtus Bologna',
    'squadra_ospite' => 'Venezia',
    'Punti_sq_casa' => '50',
    'Punti_sq_ospite' => '45'
],

'tappa3'=> [
    'squadra_casa' => 'Dinamo Sassari',
    'squadra_ospite' => 'Trento',
    'Punti_sq_casa' => '70',
    'Punti_sq_ospite' => '65'
]

];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calendario incontri serie A Basket</h1>
  
    <?php  
    for($i =0; $i < count($calendario) ;$i++){?>
        <p> <?php echo $calendario[$i][squadra_casa] ?></p>
    <?php } ?>
</body>
</html>