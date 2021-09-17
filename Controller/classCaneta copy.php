<?php
class Caneta {
   public $modelo;
   public $cor;
   private $ponta;
   protected $carga;
   protected $tampada;
   // var $modelo; assume visibilidade publica;

   public function rabiscar() {
      //$this->; Verificar um atributo dentro da propria classe;
      if ($this->tampada == true) {
         echo "<p>Erro não posso rabiscar estou tampada Hombre...</p>";

      } else {
         echo "<p>Estou Rabiscando...</p>";
      }
     
   } 
   public function tampar() {
      $this->tampada = true;
       
   }
   private function destampar() {
      $this->tampada = false;
   }



}

?>