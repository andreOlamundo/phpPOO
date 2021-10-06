<?php

require_once 'abstractSuperClassPessoa.php';

class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    public function pagarMensalidade(){
    echo "<p>Pagando mensalidade do aluno $this->nome</p>";
    }  
    /*public final function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno $this->nome</p>";
        } */

/**
* Get the value of matricula
*
* @return  mixed
*/
public function getMatricula()
{
return $this->matricula;
}

/**
* Set the value of matricula
*
* @param   mixed  $matricula  
*
* @return  self
*/
public function setMatricula($matricula)
{
$this->matricula = $matricula;
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