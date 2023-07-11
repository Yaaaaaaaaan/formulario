<?php

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário - Central</title>
    </head>
    <body>
        <form action="/AppController" method="POST">
            <input type="text" name="matr" placeholder="Matricula">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="ctt" placeholder="Telefone para contato">
            <input type="text" name="acao" value="solicitarCadastro()" hidden> 
            <button type="submit">Enviar</button>
        </form>

    </body>
</html>