<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança programando Orientado a Objeto em PHP</title>
</head>
<body>
    <pre>
    <?php    
    require_once '../Controller/childrenClassAlunoTwo.php';    
    require_once '../Controller/childrenClassAlunoBolsista.php';    


     $a1 = new Aluno();
     $a1->setNome("Pedro");
     $a1->setMatricula(25);
     $a1->setSexo("M");
     $a1->setIdade(16);
     $a1->setCurso("informatica");
     $a1->pagarMensalidade();

    print_r($a1);

    $a2 = new Bolsista();
    $a2->setNome("Pedro");
    $a2->setMatricula(25);
    $a2->setSexo("M");
    $a2->setIdade(16);
    $a2->setBolsa(12.5);
    $a2->setCurso("informatica");
    $a2->pagarMensalidade();

   print_r($a2);


    
    ?>
    </pre>
</body>
</html>