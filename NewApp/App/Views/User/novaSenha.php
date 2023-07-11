<?php ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário - Central</title>
    </head>
    <body>
    <form action="/AppController" method="POST">
            <input type="text" name="nick" placeholder="Nome de usuário" required>
            <input type="text" name="email" placeholder="Insira seu email" required>
            <input type="text" name="acao" value="novaSenha()" hidden> 
            <button type="submit">Solicitar alteração de senha</button>
        </form> 
    </body>
</html>