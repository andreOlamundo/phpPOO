<?php

require_once 'maeClassPessoa.php';

class Funcionario extends Pessoa {
    private $setor;
    private $trabalhando;

    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }       

/**
* Get the value of setor
*
* @return  mixed
*/
public function getSetor()
{
return $this->setor;
}

/**
* Set the value of setor
*
* @param   mixed  $setor  
*
* @return  self
*/
public function setSetor($setor)
{
$this->setor = $setor;
return $this;
}

/**
* Get the value of trabalhando
*
* @return  mixed
*/
public function getTrabalhando()
{
return $this->trabalhando;
}

/**
* Set the value of trabalhando
*
* @param   mixed  $trabalhando  
*
* @return  self
*/
public function setTrabalhando($trabalhando)
{
$this->trabalhando = $trabalhando;
return $this;
}
}
?>