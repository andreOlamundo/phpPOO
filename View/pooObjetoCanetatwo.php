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
    require_once '../Controller/classCanetatwo.php';
   
    $c1 = new Caneta();   
    $c1->setModelo("BIC");
    $c1->setCor("Verde");

    echo "Minha caneta {$c1->getModelo()} - {$c1->getCor()}"
    
    ?>
</pre>
</body>
</html>