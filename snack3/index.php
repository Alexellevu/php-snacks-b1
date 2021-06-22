<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->
<?php

$posts = [
 '20/06/2021' => [
    [
         'title' => 'post1',
         'author' => 'Mario Rossi',
         'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
    ],
    [
        'title' => 'post2',
        'author' => 'Mario Rossi',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.lorem2'
    ]

    ],
    '21/06/2021' => [
       [ 
        'title' => 'post3',
        'author' => 'Mario Rossi',
        'text' => 'Lorem ipsum dolor sit amet elit.lorem3'
        ]
    ],

    '22/06/2021' => [
        [ 
         'title' => 'post3',
         'author' => 'Mario Rossi',
         'text' => 'Lorem ipsum dolor sit amet elit.sit amet consectetur lorem4'
        ],

        [ 
            'title' => 'post3',
            'author' => 'Mario Rossi',
            'text' => ' dolor sit amet elit.sit amet consectetur lorem5'
        ],
           
        [ 
            'title' => 'post3',
            'author' => 'Mario Rossi',
            'text' => 'Lorem ipsum sit amet elit.sit amet consectetur lorem6'
        ],   
     ]

 ]
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
        <h1>Post dell'utente</h1>
        <?php  
 
        foreach($posts as $key => $post){ ?>
           
                <h3>I post pubblicati in data <?php echo $key  ?> sono:</h3>
                <?php  for($i =0; $i < count($post); $i++){?> 
                    
                    <p> <?php  echo $post[$i]['text'] ?>  </p>
                    <?php } ?>
        <?php } ?>

</body>
</html>