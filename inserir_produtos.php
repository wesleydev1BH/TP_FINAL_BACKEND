<?php 
echo $_GET["nome"];
echo $_GET["descricao"];
echo $_GET["preco"];
echo $_GET["exibir_categorias"];

    $queryInsereProduto = "INSERT INTO produtos (nome, descricao, peco, categoria_id)
	    VALUES (\"".$_GET["nome"]."\", 
        \"".$_GET["descricao"]."\",
        ".$_GET["preco"].",
        ".$_GET["exibir_categorias"].")";

          $pdo = new PDO("sqlite:estoque.db");
          $pdo->query($queryInsereProduto);
?>