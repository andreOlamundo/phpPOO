<?php 

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        //$saldo = 0;
        //$status = false;
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "Conta criada Com sucesso!";
        
    }

    public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t =="CC") {
                $this->setSaldo(50);
            } elseif ($t == "CP") {
                $this->saldo = 150;
            }
    } 
    public function fecharConta(){
        if ($this->getSaldo() > 0) {
            echo "<p>Não pode fechar conta</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta fechada<p/>";
        } else {
            $this->setStatus(false);
        }
        
    } 
    public function depositar($v){
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            // OU -- $this->saldo = $this->saldo +v;

        } else {
            echo "Conta fechada";
        }
        
    } 
    public function sacar($v){
        if ($this->getStatus()) {
            if ($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de ".$v."autorizado na conta de ".$this->getDono()."</p>";
            } else {
                echo "<p>Saldo insuficiente</p>";
            }
        } else {
            echo "<p>Não permitido, Conta Fechada</p>";
        }
        
    } 
    public function pagarMensal(){
        if ($this->getTipo() == "CC")  {
            $v = 12;
        } else if ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
       echo "<p>Mensalidade de R$".$v." Debitada na conta de ".$this->getDono()."</p>";
        }
        else {
            echo "<p>Problemas com a conta</p>";
        }
        
    } 

    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($n){
        return $this->numConta = $n;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($t){
        return $this->tipo = $t;
    }
    
    public function getDono(){
        return $this->dono;
    }

    public function setDono($d){
        return $this->dono = $d;
    }
        
    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($s){
        return $this->saldo = $s;
    }
        
    public function getStatus(){
        return $this->status;
    }

    public function setStatus($st){
        return $this->status = $st;
    }

    
}



?>