<?php

    if(isset($_POST['submit']))
    {
       // print_r('Nome: ' . $_POST['nome']);
       // print_r('<br>');
        //print_r('Email: ' . $_POST['Email']);
       // print_r('<br>');
       // print_r('Telefone: ' . $_POST['Telefone']);
       // print_r('<br>');
       // print_r('Sexo: ' . $_POST['genero']);
       // print_r('<br>');
       // print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
       // print_r('<br>');
       // print_r('Cidade: ' . $_POST['cidade']);
       // print_r('<br>');
       // print_r('Estado: ' . $_POST['estado']);
       // print_r('<br>');
       // print_r('Endereço: ' . $_POST['endereco']);

       include_once('config.php');
       
       $id = $_POST['id'];
       $produto = $_POST['produto'];
       $cod_barras = $_POST['cod_barras'];
       $quantidade = $_POST['quantidade'];
       //$data_nasc = $_POST['data_nascimento'];
       //$cidade = $_POST['cidade'];
       //$estado = $_POST['estado'];
       //$endereco = $_POST['endereco'];

       $result = mysqli_query($conexao, "INSERT INTO estoque(id,produto,cod_barras,quantidade,) VALUES ('$id','$produto','$cod_barras','$quantidade')");
    }

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
    <Style>
         
        header{
            text-align: center;
            padding: 30px;
        }
         
         body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient( 45deg, cyan, yellow);
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 1.0);
            padding: 15px;
            border-radius: 15px;
            width: 70%; 
            margin-top:60px;     
        }
        fieldset{
            border: 5px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white ;
            outline: none;
            color: white;
            font-size: 15px;
            letter-spacing: 2px;
            width: 100%;
        }
        .laberInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
            outline: none;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient( 45deg, cyan, yellow);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;

            
        }
    </Style>
</head>
<body>
    <header>
        <h1>Cadastro de Produtos</h1>
    </header>
    <div class="box">
        <form action="estoque.php" method="POST">
            <fieldset>
                <legend><strong>Cadastro de Produtos</strong></legend>
                <br>
                <div class="inputBox">
                    <label for="id" class="labelInput" >id</label>
                    <input type="id"name= "id" id="id" class="inputUser" required>
                    
                </div><br>
                <div class="inputBox">
                    <label for="produto" class="labelInput" >Produto</label>
                    <input type="produto"name= "produto" id="produto" class="inputUser" required>
                    
                </div><br>
                
                <div class="inputBox">
                    
                    <label for="barras" class="labelInput"> barras </label><input type="cod_barras"name= "cod_barras" id="cod_barras" class="inputUser" required>    
                </div><br>
                <div class="inputBox">
                    
                    <label for="quantidade" class="labelInput">quantidade</label><input type="quantidade"name= "quantidade" id="quantidade" class="inputUser" required>    
                </div><br>
                <input type="submit" name="submit" id="submit" >
    
                </fieldset>
        </form>

    </div>
                
    
</body>
</html>