<?php
    if(isset($_POST['submit']))
    {
        //print_r($_POST['username']);
        //print_r('<br>');
        //print_r($_POST['email']);
        //print_r('<br>');
        //print_r($_POST['texto']);
        //print_r('<br>');
       // print_r($_POST['upload']);
       
       include_once('conexao.php');

       $username = $_POST['username'];
       $email  = $_POST['email'];
       $texto = $_POST['texto'];
       $upload = $_POST['upload'];

       $result = mysqli_query($conexao, "INSERT INTO usuarios(id,email,path,matricula) VALUES('$username','$email','$texto','$upload')");
        
    }
?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Central</title>
    <link rel="stylesheet" href="sytle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wgh@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="conexao.php">
</head>
<body>


    <div class="text-one">
        <section class="header">
            <h2>Formulário Central</h2>
        </section>

        <form action="formulario.php" method="POST" id="form" class="form">
            <div class="form-content">

                <label for="username">Matrícula:  </label>
                <input type="number"
                id="username"
                name="username"
                placeholder="Digite sua matrícula...  "/>

                

                <a>Aqui vai uma mensagem de erro...</a>
            </div>


            <div class="form-content">
                <label for="email">Email: </label>
                <input type="email"
                id="email"
                name="email"
                placeholder="Digite seu email...  "/>

                <a>Aqui vai uma mensagem de erro...</a>
            </div>

           

            <div class="form-content">
                <label for="password">Senha:  </label>
                <input type="password"
                id="upload"
                name="upload"
                placeholder="Digite sua senha...  "/>

                <a>Aqui vai uma mensagem de erro...</a>
            </div>

            <div class="form-content  ">
                <label for="password-confirmation">Confirmação de senha: </label>
                <input 
                type="password"
                placeholder="Digite sua senha novamente...  "
                />
                <a>Aqui vai uma mensagem de erro...</a>


            </div>

            <textarea cols="40" rows="5" id="texto" name="texto"
            placeholder="Área de texto!"></textarea>

            <div class="form-content">
                <input name="upload" type="file" />

                <a>Aqui vai uma mensagem de erro...</a>
            </div>

            

            <button  name="submit"type="submit"> Enviar</button>

        </form>
    </div>

    <script src="./script.js"></script>
    
</body>
</html>