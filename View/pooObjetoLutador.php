<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Composta Lutador</title>
</head>
<body>
    <pre>
    <?php
    require_once '../Controller/classLutador.php';
    require_once '../Controller/classLuta.php';
    //$l = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 11);   
    $l = array();
    $l[0] = new Lutador("Putsscript", "Brasil", 29, 1.85, 68.9, 14, 2, 31);
    $l[1] = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 11); 
    $l[2] = new Lutador("Dead Code", "Ingland", 35, 1.78, 70, 16, 12, 1);
   // $l[2]->status();
    
    //print_r($l);

    $UEC01 = new Luta();
    $UEC01->marcarLuta($l[0], $l[1]);
    $UEC01->lutar();
    $l[0]->status();
    $l[1]->status();
    //print_r($UEC01);
    ?>
    </pre>
</body>
</html>