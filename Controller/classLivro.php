<?php
require_once '../Controller/classPessoa.php';
require_once '../Controller/interfacePublicacao.php';

class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    function __construct($titulo, $autor,  $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

    public function detalhes(){
        echo "Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "</br> Páginas " . $this->totPaginas  . " atual ". $this->pagAtual;
        echo "</br> Sendo Lido por " . $this->leitor->getNome();

    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($t){
        return $this->titulo = $t;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($a){
        return $this->autor = $a;
    }
    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function setTotPaginas($tp){
        return $this->totPaginas = $tp;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setPagAtual($pa){
        return $this->pagAtual = $pa;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($ab){
        return $this->aberto = $ab;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($l){
        return $this->leitor = $l;
    }

    public function abrir() {
        $this->aberto = true;

    }
    public function fechar(){
        $this->aberto = false;
    }
    public function folhear($p){
        if($p>$this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }
    public function avancarPagina(){
        $this->pagAtual ++;
    }
    public function voltarPagina(){
        $this->pagAtual --;
    }


}
?>