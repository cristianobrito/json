
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>
            Produtos - Full Stack Eletro
        </title>
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="./script/funcoes.js"></script>
    </head>

    <body>
    <?php
        include('menu.html');
    ?>
        <header>
            <h1>Produtos</h1>
        </header>
        <hr>

        <div class="categorias">

            <h3 >Categorias</h3>
            <ul>
                <li onclick="exibir_todos()" class="g1">Todos (8)</li>
                <li onclick="exibir_categoria('geladeira')" class="g1">Geladeiras (2)</li>
                <li onclick="exibir_categoria('fogao')" class="f1">Fogões (2)</li>
                <li onclick="exibir_categoria('microondas')" class="m1">Microondas(2)</li>
                <li onclick="exibir_categoria('lavaroupa')" class="lr1">Lava roupas(2)</li>
            </ul>

        </div>
        <div class="produtos">
        <?php

           $dados_json = file_get_contents("http://localhost/fullstackeletro/getContent.php?table=produtos");

            $dados = json_decode($dados_json, true);
           // print_r( $dados);

            foreach($dados as $key => $row){
              //  print_r($rows);

            ?>
        <div class="box_produto" id="<?php echo $row["categoria"]; ?>">
                <img src="<?php echo $row["imagem"]; ?>" width="150px" onclick="destaque(this)">
                <div class="descricao"><?php echo  $row["descricao"]; ?></div>
                <hr>
                <div class="descricao">De:<s><?php echo $row["preco"]; ?></s></div>
                <div class="preco"><b class="precofinal">Por:R$<?php echo  $row["precofinal"]; ?></b></div>
                <br><br><br><br>
        </div>
        
        <?php
                }
        ?>
            
        </div>  
            <br><br><br>
            <?php
                 include('rodape.html');
            ?>
</body>

</html>