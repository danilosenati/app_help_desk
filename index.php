<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Help Desk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/boots">

    <style>
        .card-login {
            padding: 30px 0 0 0;
            width: 350px;
            margin: 0 auto;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Help Desk
        </a>
    </nav>

    <div class="container">
        <div class="row">

            <div class="card-login">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="valida_login.php" method="post">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input name="senha" type="password" class="form-control" placeholder="Senha">
                            </div>

                            <!-- SE DIGITAR O USUARIO OU SENHA INVALIDO É EXIBIDO NA TELA A MENSAGEM ABAIXO:  -->
                            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                                <div class="text-danger">
                                    Usuário ou senha inválido(s)
                                </div>

                            <?php } ?>

                            <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

</body>

</html>