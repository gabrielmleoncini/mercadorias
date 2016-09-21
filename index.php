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

        <script language="javascript" type="text/javascript">
            function validar() {
                var cod = formulario.codmercadoria.value;
                var tipo = formulario.tipomercadoria.value;
                var nome = formulario.nomemercadoria.value;
                var qtd = formulario.quantidade.value;
                var preco = formulario.preco.value;

                if (cod == "") {
                    alert("Digite o código da mercadoria");
                    formulario.codmercadoria.focus();
                    return false;
                }
                if (tipo == "") {
                    alert("Digite o tipo da mercadoria");
                    formulario.tipomercadoria.focus();
                    return false;
                }
                if (nome == "") {
                    alert("Digite o nome da mercadoria");
                    formulario.nome.focus();
                    return false;
                }
                if (qtd == "" || qtd < 0) {
                    alert("Digite a quantidade");
                    formulario.nome.focus();
                    return false;
                }
                if (preco == "") {
                    alert("Digite o preço");
                    formulario.nome.focus();
                    return false;
                } else if (preco < 0) {
                    alert("Digite um valor acima de zero");
                    formulario.nome.focus();
                    return false;
                }
            }
        </script>

    </head>
    <body>
        <div id="main" class="container-fluid">
            <img alt="Brand" src="css/imagens/logo.png" class="img-responsive" />

            <h3 class="page-header">Sistema de Mercadorias - Valemobi</h3>

            <form name="formulario" id="formulario" method="post" action="insereDados.php">

                <div class="row">
                    <div class="form-group col-md-2">
                        <label for="codmercadoria">Código da Mercadoria:</label>
                        <input name="codmercadoria" type="text" class="form-control" id="codmercadoria" placeholder="Digite o código">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="tipomercadoria">Tipo da Mercadoria:</label>
                        <input name="tipomercadoria" type="text" class="form-control" id="tipomercadoria"  placeholder="Digite o tipo">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="nomemercadoria">Nome da Mercadoria:</label>
                        <input name="nomemercadoria" type="text" class="form-control" id="nomemercadoria"  placeholder="Digite o nome">
                    </div>

                </div>

                <div class="row">
                    <div class="form-group col-md-1">
                        <label for="quantidade">Quantidade:</label>
                        <input name="quantidade" type="text" class="form-control" id="quantidade"  placeholder="Digite a Qtd.">
                    </div>

                    <div class="form-group col-md-1">
                        <label for="preco">Preço:</label>
                        <input name="preco" type="text" class="form-control" id="preco"  placeholder="Digite preço R$">
                    </div>

                    <div class="form-group col-md-1">
                        <label for="seltiponegocio">Tipo do Negócio:</label>
                        <select name="seltiponegocio" class="form-control" id="seltiponegocio">
                            <option>Compra</option>
                            <option>Venda</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" onclick="return validar()" class="btn btn-primary">Enviar</button>
                            <button type="reset"  class="btn btn-danger">Limpar</button>
                        </div>
                    </div>
                </div>

            </form>

            <form action="listaMercadorias.php">
                <button type="submit" class="btn btn-primary">Operações</button>
            </form>
        </div>

        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>