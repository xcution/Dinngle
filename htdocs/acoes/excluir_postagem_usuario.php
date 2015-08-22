<?php


// abre pasta maniparq -----------------------------

chdir("../maniparq"); // abre pasta maniparq

// --------------------------------------------------------


// carrega bibliotecas ------------------------------

include("bibliotecas_php.php"); // carrega bibliotecas

// -------------------------------------------------------


// carrega dados de servidor ---------------------

include("../servidor/dados_servidor.php"); // carrega dados de servidor

// -------------------------------------------------------


// conecta ao mysql -------------------------------

conecta_mysql(true); // conecta ao mysql

// ------------------------------------------------------


// exclui publicacao -------------------------------

exclui_publicacao(); // exclui publicacao

// ------------------------------------------------------


// excluindo imagens de album -------------

excluir_imagem_album();

// ------------------------------------------------------


// desconecta do mysql --------------------------

desconecta_mysql(); // desconecta do mysql

// ------------------------------------------------------


// chama pagina especifica ---------------------

chamar_pagina_especifica(9); // chama pagina especifica

// ------------------------------------------------------


?>