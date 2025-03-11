<?php
define('HOST', 'localhost:3306');
define('USUARIO', 'root');
define('SENHA', '27291116');
define('DB', 'lista_tarefas');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>