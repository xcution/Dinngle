<?php


// funcao para desconectar do mysql ------------

function desconecta_mysql(){


// globals ----------------------------------------------

global $conexao_mysql_conectar; // variavel de conexao mysql

// --------------------------------------------------------


// fechando conexao mysql com o servidor ----

mysql_close($conexao_mysql_conectar); // fechando conexao mysql com o servidor

// ---------------------------------------------------------


};

// --------------------------------------------------------


?>