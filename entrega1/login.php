<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <h1>Autenticação de usuário</h1>

    <form action="login.php" method="post">
        <div>
            <label for="login">Login</label>
            <input type="text" name="login" id="login">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <input type="submit" value="Enviar">
    </form>

    <?php
        //vetor
        //$_SERVER

        //coleções
        // foreach($_SERVER as $chave => $valor){
        //     echo "<br>$chave : $valor";
        // }

        session_start();
        //Mockar o usuário (vai vir do banco de dados)
        $LOGIN = "rodrigo";
        $SENHA = "123vai";
        $USUARIO = "Sandro Alex";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            //echo "processando login...";
            $login = $_POST["login"];
            $senha = $_POST["senha"];
            // echo "O login é $login e a senha é $senha";

            if($login == $LOGIN && $senha == $SENHA) {
                //sucesso!
                $_SESSION["USUARIO"] = $USUARIO;
                //redirecionar
                header("Location: index.php");
            }else{
                echo "Login ou senha incorreto!";
            }

        }

    ?>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>