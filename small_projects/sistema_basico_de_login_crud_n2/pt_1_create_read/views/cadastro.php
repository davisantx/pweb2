<?php

include('conecta_bd.php');

$nomeUsuario = $_POST['nomeCadastrado'];
$senhaUsuario = $_POST['senhaCadastrado'];
$emailUsuario = $_POST['emailCadastrado'];

$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nomeUsuario', '$emailUsuario', '$senhaUsuario')";
if($bd->query($sql) === true) {
    echo "O usuário foi cadastrado";
}else {
    echo "Erro: ". $sql . "<br>" . $bd->error;
}

$bd->close();

?>