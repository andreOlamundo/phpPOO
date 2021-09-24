<?php
interface Controlador {
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function MaisVolume();
    public function MenosVolume();
    public function LigarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
}

?>