<?php ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário - Central</title>
    </head>
    <body>
    <form action="../Controller/AppController.php" method="POST">
            <input type="text" name="nick" placeholder="Nome de usuário" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="text" name="acao" value="autenticar()" hidden> 
            <button type="submit">Entrar</button>
        </form> 
    </body>
</html>