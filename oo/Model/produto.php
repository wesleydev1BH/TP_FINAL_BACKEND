<?php 
    class produto{
        private $id;
        private $nome;
        private $descricao;
        private $peco;
        private $categoria;

        function __construct($id,$nome,$descricao,$peco,$categoria){
            $this->id = $id;
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->peco = $peco;
            $this->categoria = $categoria;
        }
    

        public function getId() {
        return $this->id;
    }
        public function setId($id) {
        $this->id = $id;
    }
        public function getNome() {
        return $this->nome;
    }
        public function setNome($nome) {
        $this->nome = $nome;
    }
        public function getDescricao() {
        return $this->descricao;
    }
        public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
        public function getPeco() {
        return $this->peco;
    }
        public function setPeco($peco) {
        $this->peco = $peco;
    }
        public function getCategoria() {
        return $this->categoria;
    }
        public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }
    
}
?>