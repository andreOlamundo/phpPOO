<?php

require_once 'maeClassPessoa.php';

class Professor extends Pessoa {
    private $especialidade;
    private $salario;

    public function receberAumento($aum){
        $this->salario += $aum;
    }


        /**
        * Get the value of especialidade
        *
        * @return  mixed
        */
        public function getEspecialidade()
        {
        return $this->especialidade;
        }

        /**
        * Set the value of especialidade
        *
        * @param   mixed  $especialidade  
        *
        * @return  self
        */
        public function setEspecialidade($especialidade)
        {
        $this->especialidade = $especialidade;
        return $this;
        }

/**
* Get the value of salario
*
* @return  mixed
*/
public function getSalario()
{
return $this->salario;
}

/**
* Set the value of salario
*
* @param   mixed  $salario  
*
* @return  self
*/
public function setSalario($salario)
{
$this->salario = $salario;
return $this;
}
}
?>