<?php

class Luta {

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovado;

    public function marcarLuta($l1, $l2) {
        if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;            
        } else {
            $this->aprovado = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar(){
        if($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();            
            $vencedor = rand(0,2);
            switch ($vencedor){
                case 0: //Empate
                    echo "<p>Empatar Luta</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                    case 1: //Desafiado Vence
                        echo "<p>".$this->desafiado->getNome(). "Venceu</p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                        case 2://Desafiante Vence
                            echo "<p>".$this->desafiante->getNome(). "Venceu </p>";
                            $this->desafiante->ganharLuta();
                            $this->desafiado->perderLuta();
                            break;                          
            }
        } else {
            echo "<p>Luta não pode ocorrer</p>";
        }
            
        
    }

    public function getDesafiado(){
        return $this->desafiado;
    }
    public function setDesafiado($d){
        return $this->desafiado = $d;
    }
    public function getDesafiante(){
        return $this->desafiante;
    }
    public function setDesafiante($dt){
        return $this->desafiante = $dt;
    }
    public function getRounds(){
        return $this->rounds;
    }
    public function setRouns($r){
        return $this->rounds = $r;
    }
    public function getAprovado(){
        return $this->aprovado;
    }
    public function setAprovado($a){
        return $this->aprovado = $a;
    }
}

?>
