<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Produtos</title>
</head>
<body>
    <form action="inserir_produtos.php" method="get">
        <label for="nome">Nome:</label>
        <input type="text" name="nome"><br><br>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao"><br><br>

        <label for="peco">Preço:</label>
        <input type="text" name="peco"><br><br>

       <select name="exibir_categorias">
            <?php
                $pdo = new PDO("sqlite:estoque.db");
                $query_select_categorias = "SELECT * FROM categorias";

                $categorias = $pdo->query($query_select_categorias);
                foreach ($categorias as $categoria){
                    echo "<option value=\"".$categoria["id"]
                    ."\">".$categoria["nome"]."</option>";
                }

            ?>
            
       </select>
       <button type="submit">Enviar</button>
    </form>
</body>
</html>