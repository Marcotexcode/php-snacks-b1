<?php

    $partite = [

        [
            'squadra' => 'Pescara',
            'punti' => '20',
        ],
        [
            'squadra' => 'Roma',
            'punti' => '30',
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

    <p>
        
        <?php echo $partite[0]['squadra'];?> -  
        <?php echo $partite[1]['squadra'];?> |
        <?php echo $partite[0]['punti'];?> -
        <?php echo $partite[1]['punti'];?>   

    </p>

</body>
</html>













<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->