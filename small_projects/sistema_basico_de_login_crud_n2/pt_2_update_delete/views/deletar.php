<?php

include('conecta_bd.php');

$nomeUsuarioLog = $_POST['nomeLogadoQueSeDesejaDeletar'];
$senhaUsuarioLog = $_POST['senhaLogadaQueSeDesejaDeletar'];

echo "$nomeUsuarioLog";

$sql = "DELETE FROM usuario WHERE nome='$nomeUsuarioLog' and senha='$senhaUsuarioLog'";
if($bd->query($sql) === true) {
    echo "Usuário deletado com sucesso!";
}else {
    echo "Usuário não encontrado";
}

$bd->close();


?>