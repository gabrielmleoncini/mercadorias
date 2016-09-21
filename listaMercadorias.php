<!DOCTYPE html>
<!--Gabriel Mazzi Leoncini -->
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Mercadorias</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>
    <body>
        <div id="main" class="container-fluid">
            <a href="index.php"> 
                <img alt="Brand" src="css/imagens/logo.png" class="img-responsive" /> 
            </a>   

            <form name="listaMercadoria" id="listaMercadoria" method="get" action="listaMercadorias.php">
                <button name="compra" value="compra" type="submit" class="btn btn-primary">Compra</button>
                <button name="venda" value="venda" type="submit" class="btn btn-success">Venda</button>
                <button name="todos" value="todos" type="submit" class="btn btn-default">Todos</button>
            </form>
            <?php
            //Incluindo a conexao com o banco de dados
            include './conexao/conexaobd.php';

            $btn = implode("", $_GET);
            //Verificação das açoes dos botões de ordenação
            if ($btn == "compra") {
                $sql = "SELECT * FROM `mercadoria` WHERE tiponegocio = 'compra'";
                $qr = mysql_query($sql) or die(mysql_error());
            } else if ($btn == "venda") {
                $sql = "SELECT * FROM `mercadoria` WHERE tiponegocio = 'venda'";
                $qr = mysql_query($sql) or die(mysql_error());
            } else {
                $sql = "SELECT * FROM mercadoria ORDER BY reg DESC";
                $qr = mysql_query($sql) or die(mysql_error());
            }
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Código da Mercadoria</th>
                        <th>Tipo da Mercadoria:</th>
                        <th>Nome da Mercadoria:</th>
                        <th>Quantidade:</th>
                        <th>Preço:</th>
                        <th>Tipo do Negócio:</th>

                    </tr>
                </thead>
                <?php
                //Enquanto houver linhas irá montar a tabela
                while ($ln = mysql_fetch_assoc($qr)) {
                    $r = $ln['reg'];
                    echo '<tr>';
                    echo '<td>' . $ln['codmercadoria'] . '</td>';
                    echo '<td>' . $ln['tipomercadoria'] . '</td>';
                    echo '<td>' . $ln['nomemercadoria'] . '</td>';
                    echo '<td>' . $ln['quantidade'] . '</td>';
                    echo '<td>' . $ln['preco'] . '</td>';
                    echo '<td>' . $ln['tiponegocio'] . '</td>';
                    echo '</tr>';
                }
                ?>

            </table>
        <form action="index.php">
            <button type="submit" class="btn btn-primary">Voltar</button>
        </form>
        </div>


    </body>
</html>