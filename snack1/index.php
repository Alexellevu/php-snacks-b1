<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$calendario=[
'tappa1' => [
    'squadra_casa' => 'Olimpia Milano',
    'squadra_ospite' => 'Cantù',
    'punti_sq_casa' => '55',
    'punti_sq_ospite' => '60'
],

'tappa2' => [
    'squadra_casa' => 'Virtus Bologna',
    'squadra_ospite' => 'Venezia',
    'punti_sq_casa' => '50',
    'punti_sq_ospite' => '45'
],

'tappa3' => [
    'squadra_casa' => 'Dinamo Sassari',
    'squadra_ospite' => 'Trento',
    'punti_sq_casa' => '70',
    'punti_sq_ospite' => '65'
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
    <h1>Calendario incontri serie A di Basket</h1>
  
    <?php  
 
    foreach($calendario as $key => $data){ ?>
        <h2> <?php echo $key  ?>:</h2>
        <span> <?php echo $data['squadra_casa'] ?> - </span>
        <span> <?php echo $data['squadra_ospite'] ?> |</span>
        <span> <?php echo $data['punti_sq_casa'] ?>-</span>
        <span> <?php echo $data['punti_sq_ospite'] ?></span>
    <?php } ?>
   
</body>
</html>