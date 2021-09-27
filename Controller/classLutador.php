<?php

class Lutador {

    private $nome;
    private $nascionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitoria;
    private $derrotas;
    private $empates;

  public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        //$saldo = 0;
        //$status = false;
        //$this->setPeso(15);
        //$this->setNome("André");
        //echo "Lutador criado Com sucesso!,</br>";
        $this->nome = $no;
        $this->nascionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        //$this->peso = $pe;
        $this->setPeso($pe);
        $this->vitoria = $vi;
        $this->derrotas = $de;
        $this->empates = $em;

    }
    public function apresentar() {
        echo "<h1>Lutador</h1></br><p>".$this->getNome()."</p>";
        echo "<p>Nascionalidade</p></br><p>".$this->getNascionalidade()."<p/>";
        echo "<p>Idade ". $this->getIdade()." - ".$this->getPeso()."</p>";
        echo "<p>Vitoria ".$this->getVitoria()."</p>";
        echo "<p>Derrotas</p></br><p>".$this->getDerrotas()."- ".$this->getEmpates()."</p>";

    }
    public function status() {
        echo "<h1>Lutador</h1></br><p>".$this->getNome()."</p>";
        echo "<h1>Categoria</h1></br><p>".$this->getCategoria()."</p>";
        echo "<h1>Vitorias</h1></br><p>".$this->getVitoria()."</p>";
        echo "<h1>Derrotas</h1></br><p>".$this->getDerrotas()."</p>";
        echo "<h1>Empates</h1></br><p>".$this->getEmpates()."</p>";        

    }
    public function ganharLuta() {
        $this->setVitoria($this->getVitoria() + 1);
        //$this->vitoria = $this->vitoria + 1;
        
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
        
    }
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() +1);
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome($n) {
        return $this->nome = $n;
    }
    public function getNascionalidade() {
        return $this->nascionalidade;
    }
    public function setNascionalidade($nasc) {
        return $this->nascionalidade = $nasc;
    }    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        return $this->idade = $idade;
    }    
    public function getAltura() {
        return $this->altura;
    }
    public function setAltura($altura) {
        return $this->altura = $altura;
    }   
    public function getPeso() {
        return $this->peso;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }    
    public function getCategoria() {
        return $this->categoria;
    }
    private function setCategoria() {
        if ($this->peso < 52.2) {
            return    $this->categoria = "Invalido";
        } elseif ($this->peso <= 70.2) {
            return $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            return $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            return $this->categoria = "Pesado";
        } else {
            return  $this->categoria = "inválido";
        }
    }    
    public function getVitoria() {
        return $this->vitoria;
    }
    public function setVitoria($v) {
        return $this->vitoria = $v;
    }    
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function setDerrotas($derrotas) {
        return $this->derrotas = $derrotas;
    }    
    public function getEmpates() {
        return $this->empates;
    }
    public function setEmpates($empates) {
        return $this->empates = $empates;
    }
} 
?>