<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
    $array_random = [];
   for ($i=0; $i<15; $i++){
        
    $number = rand(1, 100);
        if(!in_array($number, $array_random )){
            
            $array_random[$i] = $number;
        }

    }
   var_dump($array_random);
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
    <h1>L'Array con i 15 numeri casuali è:</h1>
    <?php  for ($j=0; $j < count($array_random); $j++){ ?>
      <span >{<?php   echo $array_random[$j] ?>}</span>  
    <?php } ?>

</body>
</html>