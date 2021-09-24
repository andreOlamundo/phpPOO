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
    require_once '../Controller/ContaBanco.php';
   
    $p1 = new ContaBanco();   //Joao
    $p2 = new ContaBanco();   //Cleiton

    $p1->abrirConta("CC");
    $p1->setDono("João");
    $p1->setNumConta(1111);
    $p1->depositar(300);
    $p1->sacar(120);    

    $p2->abrirConta("CP");
    $p2->setDono("Cleiton");
    $p2->setNumConta(2222);
    $p2->depositar(500);
    $p2->sacar(100);

    $p1->pagarMensal();
    $p2->pagarMensal();

    $p1->fecharConta();
    $p2->fecharConta();
   
    print_r($p1);
    print_r($p2);
    
    ?>
</pre>
</body>
</html>