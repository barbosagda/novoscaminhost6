<?php

session_start();

function verificaAutenticacao() {
    if(!isset($_SESSION["USUARIO"])){
        //redirecionar para login
        header("Location: login.php");
    }
}

verificaAutenticacao();

if(isset($_GET["acao"])) {
    if($_GET["acao"] == "sair"){
        //para eliminar somente uma váriavel de sessão
        //unset($_SESSION["USUARIO"]);
        session_destroy();//mata tudo!
        header("Location: login.php");
    }
}

// $nome = "";

// //vetor (array)
// $_SESSION["USUARIO"] = "Rodrigo";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Seja bem-vindo!</h1>
    <h2><?php echo $_SESSION["USUARIO"]; ?></h2>
    <p>
        <a href="index.php?acao=sair">Sair</a>
    </p>
</body>
</html>