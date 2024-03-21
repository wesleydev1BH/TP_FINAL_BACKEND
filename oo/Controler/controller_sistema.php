<?php 
    $estoque = new Estoque();

    function gravaEstoque(){
        $pdo = new PDO("sqlite:estoque.db");

        $queryCriaTabelaEstoque = "CREATE TABLE IF NOT EXISTS estoque (
            id	INTEGER NOT NULL,
            quantidade	INTEGER NOT NULL,
            produto_id	INTEGER,
            FOREIGN KEY(produto_id) REFERENCES produtos(id),
            PRIMARY KEY(id AUTOINCREMENT)
        )";
        $pdo ->query($queryCriaTabelaEstoque);
    

    }
    function inserirProduto($nomeProduto, $categoriaProduto, $descricao, $peco){
        $queryInsereProduto = "INSERT INTO produtos (nome, descricao, peco, categoria_id)
	    VALUES (\"".$nomeProduto."\", 
        \"".$descricao."\",
        ".$peco.",
        ".$categoriaProduto.")";

          $pdo = new PDO("sqlite:estoque.db");
          $pdo->query($queryInsereProduto);

    }
    

    function criaTabelaCategoria(){
        $pdo = new PDO("sqlite:estoque.db");

        $queryCriaTabelaCategorias = "CREATE TABLE IF NOT EXISTS categorias (
        id	INTEGER NOT NULL,
        nome	TEXT NOT NULL,
        PRIMARY KEY(id AUTOINCREMENT)
        )";
            $pdo ->query($queryCriaTabelaCategorias);
    


    }
    function inserirCategoria($nomeCategoria){
        $pdo = new PDO("sqlite:estoque.db");

        $queryInsereCategoria = "INSERT INTO categorias (nome)
        VALUES (\"".$nomeCategoria."\")";
        $pdo ->query($queryInsereCategoria);

    }
?>