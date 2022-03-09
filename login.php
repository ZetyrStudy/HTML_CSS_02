<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/favicon.png">
    <title>Login</title>
    <style>
        * {
            /* 
            Força o tamanho do elemento conforme definido no CSS,
            ignorando os tamanhos de margin, padding e border.
            */
            box-sizing: border-box;
        }

        html,
        body {
            font-family: sans-serif;
            /* Define "1rem" */
            font-size: 16px;
            position: relative;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;

            background-image: url(/img/bg_01.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: top right;
        }

        .login-form {
            background-color: rgb(207, 226, 243);
            border: 1px solid black;
            border-radius: 0.5rem;
            padding: 0 2rem;
            display: table;
            max-width: 400px;
        }

        .login-form h2 {
            text-align: center;
        }

        .login-form label {
            display: block;
            padding-left: .25rem;
            padding-bottom: .25rem;
        }

        .login-form input[type="email"],
        .login-form input[type="password"],
        .login-form button {
            width: 100%;
            padding: .5rem;
            font-size: inherit;
            border: 1px solid grey;
            border-radius: .2rem;
        }

        .login-form input[type="password"] {
            -webkit-text-security: square;
        }

        .login-form button {
            background: linear-gradient(rgb(17, 131, 231), rgb(6, 45, 80));
            color: white;
            font-size: 1.2rem;
            border: none;
            border-radius: .45rem;
        }

        .login-form button:hover {
            background: linear-gradient(rgb(255, 112, 60), rgb(136, 36, 0));
            color: white;
            font-size: 1.2rem;
            border: none;
            border-radius: .45rem;
        }

        .login-form a {
            text-decoration: none;
            color: steelblue;
        }

        .login-form form p:last-child {
            display: flex;
            justify-content: space-between;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .5);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            /* display: none; */
        }

        .modal-content {
            background: white;
            padding: 1rem;
        }
    </style>
</head>

<body>


    <div class="login-form">

        <h2>Login / Entrar</h2>

        <form action="login_process.php" method="post">

            <p>
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" title="Endereço de e-mail cadastrado." placeholder="Seu e-mail.">
            </p>

            <p>
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" title="Senha do usuário." placeholder="Sua senha.">
            </p>

            <p>
                <label title="Marque para manter-se logado no site.">
                    <input type="checkbox" name="login" id="login" value="yes">
                    Mantenha-me logado.
                </label>
            </p>

            <p>
                <button type="submit" title="Clique para fazer login">Entrar</button>
            </p>

            <p>
                <a href="criar.php" title="Clique se ainda não se cadastrou">Criar conta</a>
                <a href="lembrar.php" title="Clique se esqueceu suas credenciais">Esqueci a senha</a>
            </p>

        </form>

    </div>

    <?php // modal para exibir mensagens de erro! ?>
    <div class="modal">

        <div class="modal-content">
            <h3>Oooops!</h3>
            <p>Verifique as credenciais e tente novamente.</p>
        </div>

    </div>

</body>

</html>