<?php 
    class Estoque{
    private $id;
    private $listaProdutos;

    function __construct(){
    $this->listaProdutos = array();
    }
    public function cadastraProdutos($produto){
        array_push($this->listaProdutos, $produto);
    }

    

    }

?>