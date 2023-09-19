<?php
    session_start();

    if(!isset($_SESSION["logado"]) ||( $_SESSION["logado"] !== true)){
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
    <link rel = "stylesheet" href="styles/style.css">
    <title>Cadastro de veiculo</title>
    <style>
        .container{
            text-align:center;
        }

        h1{
            color: purple;
            margin-bottom: 10px;
        }

        button{
            background-color: purple;
            margin-top: 15px;
            margin-bottom: 10px;
        }
    </style>
 </head>
 <body>
    <div class="container">
        <h1>Cadastro de aluno</h1>
        <form action="dados.php" method="POST">
            <input type="text" name="nome" placeholder="Nome">
            <br><br>
            <input type="text" name="ra" placeholder="ra">
            <br><br>
            <input type="text" name="placa" placeholder="placa">
            <button type="subimit" name="btn-cadastrar">Cadastrar</button>
        </form>
    </div>
 </body>
 </html>       