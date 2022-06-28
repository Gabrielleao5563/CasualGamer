<?php
define('HOST', '192.168.1.5');
define('USUARIO', 'root');
define('SENHA', 'senhadeteste');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar!');
?>