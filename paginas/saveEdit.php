<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
       
        $id = $_POST['id'];
       $nome = $_POST['nome'];
       $senha = $_POST['senha'];
       $email = $_POST['Email'];
       $telefone = $_POST['Telefone'];
       $sexo = $_POST['genero'];
       $data_nasc = $_POST['data_nascimento'];
       $cidade = $_POST['cidade'];
       $estado = $_POST['estado'];
       $endereco = $_POST['endereco'];

       $sqlUpdate = "UPDATE usuarios SET nome= '$nome',senha='$senha',email='$email',telefone='$telefone',data_nasc='$data_nasc',cidade='$cidade',estado='$estado',endereco='$endereco' WHERE id='$id'";

       $result= $conexao->query($sqlUpdate);
    }
    header('Location: sistema.php');


?>