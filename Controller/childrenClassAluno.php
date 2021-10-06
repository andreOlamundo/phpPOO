<?php

require_once 'maerClassPessoa.php';

class Aluno extends Pessoa {
    private $matr;
    private $curso;

    public function cancelarMatr(){
        echo "<p>Matrícula será Cancelada</p>";
    }
    
/**
* Get the value of matr
*
* @return  mixed
*/
public function getMatr()
{
return $this->matr;
}

/**
* Set the value of matr
*
* @param   mixed  $matr  
*
* @return  self
*/
public function setMatr($matr)
{
$this->matr = $matr;
return $this;
}

/**
* Get the value of curso
*
* @return  mixed
*/
public function getCurso()
{
return $this->curso;
}

/**
* Set the value of curso
*
* @param   mixed  $curso  
*
* @return  self
*/
public function setCurso($curso)
{
$this->curso = $curso;
return $this;
}
}
?>