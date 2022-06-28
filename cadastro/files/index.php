<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazer Login</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            border: 0px;
        }
        main {
            background-color: rgb(255, 70, 85);
            min-height: 100vh;
        }
        section.login {
            background-color: lightgray;
            padding: 8px;
            border-radius: 6px;
            box-shadow: rgba(60, 60, 60, 0.750) 5px 10px 15px;
            width: 10000000px;
            max-width: 40%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        h1.big_title {
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            font-size: 2.3em;
            text-align: center;
            font-weight: bolder;
        }
        p.erro {
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            background-color: rgb(255, 70, 85);
        }
        .usuario_input, .senha_input {
            width: 100%;
            line-height: 200%;
            text-align: center;
            color: red;
            background-color: lightgray;
            border: 2px black solid;
            border-radius: 6px;
        }
        .submit_login_info {
            margin: auto;
            width: 100%;
            padding: 4px;
            border-radius: 6px;
            text-align: center;
            background-color: rgb(255, 70, 85);
            color: white;
            cursor: pointer;
            transition-duration: 0.5s;
        }
        .submit_login_info:hover {
            background-color: red;
            transition-duration: 0.5s;
        }
    </style>
</head>
<body>
    <main>
        <section class="login">
            <h1 class="big_title">FAZER LOGIN</h1>
            <br>
            <?php
            if(isset($_SESSION['nao_autenticado'])):
            ?>
            <div class="erro">
                <p class="erro">Informações inválidas!</p>
            </div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>
            <br>
            <div class="essential">
                <form action="login.php" method="post">
                    <div class="campo">
                        <div class="controle">
                            <input type="text" name="usuario" name="texto" class="usuario_input" placeholder="Usuário..." autofocus="">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="campo">
                        <div class="controle">
                            <input type="password" name="senha" class="senha_input" placeholder="Senha...">
                        </div>
                    </div>
                    <br>
                    <div style="width: 60%; margin: auto; position: relative;">
                        <button type="submit" class="submit_login_info">ENTRAR</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
<script>

</script>
</html>