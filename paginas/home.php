<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body{
            font-family: Arial;
            background: linear-gradient(45deg, cyan, yellow);
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.9);
            padding: 30px;
            border-radius: 15px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 2px solid rgb(176, 211, 245);
            border-radius: 15px;
            padding: 5px;

        }
        a:hover{
            background-color: dodgerblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Bem vindo ao sistema de PDV</h1>
    <h2>Entre ou crie um usuário</h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastre-se</a> 
        
        

    </div>
    
    
    
</body>
</html>