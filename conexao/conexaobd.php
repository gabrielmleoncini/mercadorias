<?php
//Gabriel Mazzi Leoncini
$conexao = mysql_connect("localhost", "root", "1234") //porta, usuário, senha
        or die("Erro na conexão com banco de dados"); //caso não consiga conectar mostra a mensagem de erro.
mysql_set_charset('utf8',$conexao);
$select_db = mysql_select_db("mydb"); //banco de dados


?>