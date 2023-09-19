<?php 
    if(isset($_POST['btn-enviar'])){
        $erros = array();

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            session_start();
            if($_POST['nome']  == "portaria" and $_POST['senha'] == 'FatecAraras'){
                $_SESSION['logado'] = TRUE;
                header("location: navegacao.php");
            }else{
                $_SESSION['logado'] = FALSE;
                $erros[] = "<li> Seu login falhou </li>";
               }   
         }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Área de Login</title>
</head>
<body>
    <div class="container">
        <h1>Área do usuário</h1>
        <br>
        <?php 
            if(!empty($erros)):
             foreach($erros as $erro):
                echo $erro;
             endforeach;
            endif;
        ?>

        <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>" method="POST">
            <input type="text" name="nome" placeholder="login">
            <br><br>
            <input type="password" name="senha" placeholder="senha">
            <br><br>
            <button type="submit" name="btn-enviar">Enviar</button>
        </form>
    </div>
</body>
</html>