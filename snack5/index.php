<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php 

$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis officia tenetur unde deserunt nostrum nulla quam reiciendis alias maiores ipsam nihil repudiandae nesciunt. recusandae consectetur itaque illum voluptates quos Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto omnis distinctio modi aperiam dignissimos. Dicta dolor consequatur alias perferendis itaque. Temporibus animi minima praesentium rerum quibusdam. laboriosam accusantium consectetur! Voluptates.';

var_dump(explode('.',$paragrafo));
$frasi=explode('.',$paragrafo);
var_dump($frasi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suddivisione_Paragrafo</title>
</head>
<body>
    <h1>Suddivisione paragrafo</h1>
    <?php for($i=0; $i<count($frasi);$i++){ ?>
    <p> <?php echo $frasi[$i] ?> </p>
    <?php } ?>
</body>
</html>