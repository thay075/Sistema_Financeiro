<?php
//Informações para conectar no banco de dados

$servidor = 'localhost';
$username = 'root';
$senha = 'root';
$db = 'db_contabilidade';

$conexao = new mysqli($servidor,$username,$senha,$db);

if ($conexao->connect_error) {
    die('Falha na conexão'. $conexao->connect_error);
}else{
    echo "Conectado com sucesso";
}














?>