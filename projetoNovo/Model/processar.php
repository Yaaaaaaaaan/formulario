<?php

include_once ("conexao.php"); 

$email = filter_input(INPUT_POST, 'email', FITER SANITIZE_STRING);
$matrícula = filter_input(INPUT_POST, 'matricula', FILTER_SANTIZE_NUMBER);


//echo ' nome: $email