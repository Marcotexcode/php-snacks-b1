
<?php

    $nome = $_GET['nome'];
    $mail = $_GET['mail'];
    $eta = $_GET['eta'];

    if(strpos($mail, '@') !== false && strpos($mail, '.') !== false  &&  strlen($nome) > 3 && is_numeric($eta)){

        $stringa = 'Accesso riuscito';

    } else {

        $stringa = 'Accesso negato';

    }    

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

    <p><?php echo $stringa ?></p>

</body>
</html>


<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
 che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->