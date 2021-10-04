<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação Orientada a Objeto em PHP</title>
</head>
<body>
    <pre>
    <?php
    require_once '../Controller/classPessoa.php';
    require_once '../Controller/classLivro.php';

    $p[0] = new Pessoa("Pedro", 22, "M");
    $p[1] = new Pessoa("Maria", 31, "F");
    $p[2] = new Pessoa("Fabio", 31, "M");

    $l[0] = new Livro("PHP", "Jose de Maria Trindade", 300, $p[0]);
    $l[1] = new Livro("POO php", "Ortencia de Machado", 500,  $p[2]);
    $l[2] = new Livro("JSEcma6", "Ana Freitas", 800, $p[1]);

    //$l[0]->detalhes();
    //print_r($l);
    $l[0]->abrir();
    $l[0]->folhear(80);
   // $l[0]->avancarPagina();
    //$l[0]->voltarPagina();
    $l[0]->detalhes();
    $l[1]->detalhes();
    $l[2]->detalhes();
    
    ?>
    </pre>
</body>
</html>