<?php




// seleciona o banco de dados ----------------------------------------------------------------------------------------

mysql_select_db($nome_de_banco_de_dados); // banco de dados

// -------------------------------------------------------------------------------------------------------------------




// nome de tabela ----------------------------------------------------------------------------------------------------

$nome_de_tabela = $tabela_banco[15]; // nome de tabela

// -------------------------------------------------------------------------------------------------------------------




// comando para criar a tabela ---------------------------------------------------------------------------------------

$campos = null; // limpando campo antigo
$campos .= "idusuario text, "; // campos da tabela
$campos .= "url_imagem text, "; // campos da tabela
$campos .= "url_imagem_miniatura text"; // campos da tabela

// -------------------------------------------------------------------------------------------------------------------




# COMANDO ------------------------------------------------------------------------------------------------------------

$query = "create table $nome_de_tabela($campos);"; // comando para criar a tabela

// -------------------------------------------------------------------------------------------------------------------




// cria a tabela -----------------------------------------------------------------------------------------------------

$comando = comando_executa($query); // executa o comando

// -------------------------------------------------------------------------------------------------------------------




?>
