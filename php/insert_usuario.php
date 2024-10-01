<?php

include 'conexao.php';

//receber os dados do formulário
$nome = $_POST['Nome'];
$email = $_POST['Email'];
$cargo = $_POST['Cargo'];
$senha = $_POST['Senha'];


$sql = "INSERT INTO tb_user VALUES (null,'$nome','$email','$cargo','$senha')";

if ($conexao->query($sql)) {
    echo "<script>alert('Inserido com Sucesso!'; history.back(); <script>";
}else{
    echo" Falha na conexão com banco de dados";
}



?>