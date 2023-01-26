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
       
       $nome = $_POST['nome'];
       $senha = $_POST['senha'];
       $email = $_POST['Email'];
       $telefone = $_POST['Telefone'];
       $sexo = $_POST['genero'];
       $data_nasc = $_POST['data_nascimento'];
       $cidade = $_POST['cidade'];
       $estado = $_POST['estado'];
       $endereco = $_POST['endereco'];
       

       $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
       header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
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
            width: 30%; 
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


        
       
    </style>
</head>
<body>
<a href="home.php">Voltar</a>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><strong>Formulário Funcionários</strong></legend>
                <br>
                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome </label>
                    <input type="text"name= "nome" id="senha" class="inputUser" required>
                    
                </div><br>
                <div class="inputBox">
                    <label for="senha" class="labelInput">senha</label>
                    <input type="passowrd"name= "senha" id="id" class="inputUser" required>
                    
                </div><br>
                <div class="inputBox">
                    <label for="Email" class="labelInput" >Email</label>
                    <input type="Email"name= "Email" id="Email" class="inputUser" required>
                    
                </div><br>
                
                <div class="inputBox">
                    
                    <label for="Telefone" class="labelInput">Telefone</label><input type="tel"name= "Telefone" id="Telefone" class="inputUser" required>    
                </div><br>
                <p>Sexo</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label><br>
                
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label><br>
                
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label><br><br>
                
                
                    <label for="data_nascimento"><strong>Data de Nascimento :</strong></label>
                    <input type="date"name= "data_nascimento" id="data_nascimento" required>
                   <br><br>

                   <div class="inputBox">
                    <label for="cidade" class="labelInput">Cidade</label>
                    <input type="text"name= "cidade" id="cidade" class="inputUser" required>
                    
                </div><br>

                <div class="inputBox">
                    <label for="estado" class="labelInput">Estado</label>
                    <input type="text"name= "estado" id="estado" class="inputUser" required>
                    
                </div><br>
                

                <div class="inputBox">
                    <label for="endereco"class="labelInput">Endereço</label>
                    <input type="text"name= "endereco" id="endereco" class="inputUser" required>
                    
                </div><br>
                <input type="submit" name="submit" id="submit" >

                


            </fieldset>
        </form>

    </div>
    
</body>
</html>