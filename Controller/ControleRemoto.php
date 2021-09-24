<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador 
{
    //Atributo
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    public function getVolume() {
        return $this->volume;
    }
    public function setVolume($v) {
        return $this->volume = $v;
    }
    public function getLigado() {
        return $this->ligado;
    }
    public function setLigado($l) {
        return $this->ligado = $l;
    }
    public function getTocando() {
        return $this->tocando;
    }
    public function setTocando($t) {
        return $this->tocando = $t;
    }
    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    public function abrirMenu() {
        echo "<br>Está Ligado?:".($this->getLigado()?"Sim":"Não");
        echo "<br>Está tocando?:".($this->getTocando()?"Sim":"Não");
        echo "<br>Volume:".$this->getVolume();
        for($i = 0; $i <= $this->getVolume(); $i+=10) {
            echo "|";
        }
    }
    public function fecharMenu() {
        echo "<br>Fechando Menu...";

    }
    public function MaisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 100);
        }
    }
    public function MenosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }

    }
    public function LigarMudo() {
        if ($this->getLigado() && $this->getVolume()>0) {
            $this->setVolume(0);
        }

    }
    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }

    }
    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    public function pause(){
        if ($this->getligado() && $this->getTocando()) {
            $this->getTocando(false);
        }

    }
}
   
?>