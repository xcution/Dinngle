<?php


// retorne dados publicacao -----------------------

function retorne_dados_publicacao($idpublicacao){


// globals ----------------------------------------------

global $tabela_banco; // tabela banco

// --------------------------------------------------------


// query -------------------------------------------------

$query = "select *from $tabela_banco[9] where id='$idpublicacao';"; // query

// --------------------------------------------------------


// dados -----------------------------------------------

$dados = retorne_dados_query($query); // dados

// --------------------------------------------------------


// retorno ----------------------------------------------

return $dados; // retorno

// --------------------------------------------------------


};

// --------------------------------------------------------


?>