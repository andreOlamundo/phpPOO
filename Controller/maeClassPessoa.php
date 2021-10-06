<?php
class Pessoa {
    private $nome;
    private $sexo;
    private $idade;

    /*function __construct($nome, $sexo, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;

    }*/

    public function fazerNiver() {
        $this->idade ++;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        return $this->nome = $n;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($s){
        return $this->sexo = $s;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($i){
        return $this->idade = $i;
    }
}
?>