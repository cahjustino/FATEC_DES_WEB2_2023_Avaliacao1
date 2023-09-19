<?php
    session_start();

    if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
        header("location: index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="styles/style.css">
    <title>Navegação</title>
    <style>
        h1{
            color: white;
            margin-bottom: 15px;
        }
        .container{
            text-align: center;
        }
        .container a{
            text-decoration: none;
            color: purple;
        }

        .container .logout{
            color: red;
        }

    </style>

</head>
<body>
    <div class="container">
        <h1>Olá, Usuário(a) Bem vindo(a)</h1>

        <a href="cadastro.php">Cadastrar veiculo</a><br><br>
        
        <a class="logout" href="logout.php">Sair da conta</a>
    </div>
</body>
</html>