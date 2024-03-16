<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Estoque</title>
</head>
<body>
    <form action="iniciar_estoque.php" method="get">
    <select name="exibir_produto">
            <?php
                $pdo = new PDO("sqlite:estoque.db");
                $query_select_produtos = "SELECT * FROM produtos";

                $produtos = $pdo->query($query_select_produtos);
                foreach ($produtos as $produto){
                    echo "<option value=\"".$produto["id"]
                    ."\">".$produto["nome"]."</option>";
                }

            ?>
            
       </select><br><br>
         <label for="quantidade" >Quantidade:</label>      
         <input type="number" name="quantidade">

         <button type="submit">Enviar</button>
    </form>
</body>
</html>