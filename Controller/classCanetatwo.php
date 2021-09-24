<?php
class Caneta {

      public $modelo;
      private $cor;
      
      public function getModelo() {
        return $this->modelo;
      } 
      public function setModelo($m) {
        $this->modelo = $m;
      } 
      public function getCor() {
        return $this->cor;
      } 
      public function setCor($c) {
        $this->cor = $c;
      } 
   }
   

?>