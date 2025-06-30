<?php

include('conecta_bd.php');

$nomeUsuarioLog = $_POST['nomeLogado'];
$senhaUsuarioLog = $_POST['senhaLogado'];
$emailUsuarioLog = $_POST['emailLogado'];

echo "$nomeUsuarioLog";

$sql = "SELECT * FROM usuario WHERE nome='$nomeUsuarioLog' and senha='$senhaUsuarioLog'";
if($bd->query($sql)->num_rows > 0) {
    echo "Boas vindas! Login efetuado com sucesso.";
}else {
    echo "Usuário não existe ou a senha se encontra incorreta!";
}

$bd->close();


?>