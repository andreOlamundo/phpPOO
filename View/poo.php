<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Classes instânciamentos</title>
</head>
<body>
    <pre>
    <?php
    require_once '../Controller/classCaneta.php';
     $c1 = new Caneta;
     $c1->modelo = "Big";
     $c1->cor = "Verde";


    //$c1 = new Caneta;
    //$c1->modelo = "Big";
    //$c1->cor = "Verde";
    //$c1->ponta = 0.5;
    //$c1->carga = false;
    //$c1->tampada = false; 
    //$c1->tampar();
    //$c1->destampar();
    //$c1->rabiscar();
    ////var_dump($c1);
    print_r($c1);

    //$c2 = new Caneta;
    //$c2->modelo = "Big";
    //$c2->cor = "Vermelha";
    //$c2->ponta = 0.5;
    //$c2->carga = false;
    //$c2->tampada = false; 
    //$c2->tampar();
    //$c2->destampar();
    //$c2->rabiscar();
    ////var_dump($c2);
    //print_r($c2); 

    ?>
</pre>
</body>
</html>