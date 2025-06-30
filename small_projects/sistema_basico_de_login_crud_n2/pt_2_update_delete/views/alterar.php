<?php

include('conecta_bd.php');

$nomeUsuario = $_POST['nomeLogado'];
$senhaUsuario = $_POST['senhaLogada'];
$novoNomeUsuario = $_POST['novoNome'];
$novaSenhaUsuario = $_POST['novaSenha'];



$sql = "UPDATE usuario SET";
if($bd->query($sql) === true) {
    echo "O usuário foi cadastrado";
}else {
    echo "Erro: ". $sql . "<br>" . $bd->error;
}

$bd->close();

?>