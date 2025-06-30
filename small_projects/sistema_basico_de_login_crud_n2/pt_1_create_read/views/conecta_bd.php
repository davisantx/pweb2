<?php

$bd = new mysqli('localhost', 'root', 'root', 'sistema_bas_login');

if($bd->connect_error) {
    die("A conexão falhou: ". $bd->connect_error);
}

?>