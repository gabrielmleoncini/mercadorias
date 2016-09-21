<?php
//Gabriel Mazzi Leoncini
//Incluindo a conexao com o banco de dados
include './conexao/conexaobd.php';

//Valores provenientes do formulário pelo método POST
$codigo = $_POST["codmercadoria"];
$tipo = $_POST["tipomercadoria"];
$nome = $_POST["nomemercadoria"];
$quantidade = $_POST["quantidade"];
$preco = $_POST["preco"];
$tiponegocio = $_POST["seltiponegocio"];

//Atributo recebendo os dados para inserção no banco de dados
$string_sql = "INSERT INTO mercadoria (codmercadoria,tipomercadoria,nomemercadoria,quantidade,preco,tiponegocio) "
        . "VALUES ('$codigo','$tipo','$nome','$quantidade','$preco','$tiponegocio')";
//Envio do Insert com os valores
mysql_query($string_sql, $conexao); 

//Verificação de gravação no banco de dados
if (mysql_affected_rows() == 1) { //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
echo'<script> alert("Cadastro realizado com Sucesso!"); window.location.href="listaMercadorias.php";</script>'; //Redirecionamento para lista de mercadorias cadastradas
} else {
   echo'<script> alert("Erro, Não foi possivel gravar!"); window.location.href="index.php";</script>';// Erro, volta para a pagina inicial
}

mysql_close($conexao); //fecha conexao com banco de dados 
?>