<?php

require_once 'childrenClassAlunotwo.php';

class Bolsista extends Aluno {
    private $bolsa;
    
    public function renovarBolsa(){
        echo "<p>Matrícula será Cancelada</p>";
    }

    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno bolsista $this->nome</p>";
        } 
    
/**
* Get the value of bolsa
*
* @return  mixed
*/
public function getBolsa()
{
return $this->bolsa;
}

/**
* Set the value of bolsa
*
* @param   mixed  $bolsa  
*
* @return  self
*/
public function setBolsa($bolsa)
{
$this->bolsa = $bolsa;
return $this;
}
}
?>