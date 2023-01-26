<?php

    $dbHost= 'Localhost';
    $dbUsername= 'root';
    $dbPassoword = '' ;
    $dbName= 'formulario-adega';

    $conexao = new mysqli ($dbHost, $dbUsername, $dbPassoword, $dbName);

   // if ($conexao->connect_errno)
   // {
      //  echo "erro";
   // }
   // else
   // {
    //    echo "conexão efetuada com sucesso";
   // }

?>