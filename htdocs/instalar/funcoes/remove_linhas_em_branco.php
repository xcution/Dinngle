<?php




// remove linhas em branco -------------------------------------------

function remove_linhas_em_branco($conteudo_remover_linhas){




// removendo linhas em branco --------------------------------------

$conteudo_remover_linhas = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $conteudo_remover_linhas); // removendo linhas em branco

// ----------------------------------------------------------------------------




// retorno ------------------------------------------------------------------

return $conteudo_remover_linhas; // retorno

// ----------------------------------------------------------------------------




};

// ----------------------------------------------------------------------------




?>