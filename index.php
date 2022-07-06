<?php
include "servicos/servicoMensagemSessao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de inscrição</title>
</head>
<body>
    <h1>Formulário para inscrição de competidores</h1>
    <form action="script.php" method="post">
        <?php

            $mensagemDeSucesso = obterMensagemSucesso();
            if (!empty($mensagemDeSucesso))
            {
                echo $mensagemDeSucesso;
            }

            $mensagemDeErro = obterMensagemErro();
            if (!empty($mensagemDeErro))
            {
                echo $mensagemDeErro;
            }

        ?>
        <p>Seu Nome: <input type="text" name="nome" /></p>
        <p>Sua Idade: <input type="text" name="idade" /></p>
        <p><input type="submit" value="Enviar dados do competidor" /></p>
    </form>
    
</body>
</html>