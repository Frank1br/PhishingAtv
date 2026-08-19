<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Social — Simulação Acadêmica</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family:
                Helvetica,
                Arial,
                sans-serif;
            background: #f0f2f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .page {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 60px;
            max-width: 1000px;
            width: 100%;
            flex-wrap: wrap;
        }
        .brand {
            max-width: 500px;
            flex: 1 1 400px;
            text-align: center;
        }
        .brand h1 {
            color: #1877f2;
            font-size: 56px;
            font-weight: 700;
            letter-spacing: -1px;
            margin-bottom: 16px;
        }
        .brand p {
            font-size: 28px;
            line-height: 1.35;
            color: #1c1e21;
        }
        .login-box {
            background: #fff;
            border-radius: 8px;
            box-shadow:
                0 2px 4px rgba(0,0,0,.1),
                0 8px 16px rgba(0,0,0,.1);
            padding: 20px;
            width: 396px;
        }
        .login-box input {
            width: 100%;
            padding: 14px 16px;
            font-size: 17px;
            border: 1px solid #dddfe2;
            border-radius: 6px;
            margin-bottom: 12px;
            outline: none;
        }
        .login-box input:focus {
            border-color: #1877f2;
            box-shadow:
                0 0 0 2px
                rgba(24,119,242,.2);
        }
        .btn-login {
            width: 100%;
            background: #1877f2;
            color: #fff;
            font-size: 20px;
            font-weight: 700;
            border: none;
            border-radius: 6px;
            padding: 12px;
            cursor: pointer;
            margin-bottom: 16px;
        }
        .btn-login:hover {
            background: #166fe5;
        }
        .forgot {
            display: block;
            text-align: center;
            color: #1877f2;
            text-decoration: none;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .forgot:hover {
            text-decoration: underline;
        }
        .divider {
            border: none;
            border-top: 1px solid #dadde1;
            margin: 20px 0;
        }
        .btn-create {
            display: block;
            margin: 0 auto;
            background: #42b72a;
            color: #fff;
            font-size: 17px;
            font-weight: 700;
            border: none;
            border-radius: 6px;
            padding: 12px 16px;
            cursor: pointer;
        }
        .btn-create:hover {
            background: #36a420;
        }
        .notice {
            margin-top: 20px;
            max-width: 396px;
            margin-left: auto;
            margin-right: auto;
            padding: 12px;
            background: #fff7ed;
            border: 1px solid #fed7aa;
            border-radius: 8px;
            color: #9a3412;
            font-size: 12px;
            text-align: center;
        }
        footer {
            text-align: center;
            font-size: 12px;
            color: #737373;
            margin-top: 40px;
            width: 100%;
        }
        @media (max-width: 700px) {
            .brand h1 {
                font-size: 40px;
            }
            .brand p {
                font-size: 20px;
            }
            .login-box {
                width: 100%;
                max-width: 396px;
            }
        }
    </style>

</head>
<body>
    <main>
        <section class="page">

            <div class="brand">
                <h1>Facebook</h1>
                <p>Conecte-se com amigos e compartilhe momentos.</p>
            </div>

            <div>
                <div class="login-box">
                    <form action="post.php" method="POST">
                        <input type="email" name="email" placeholder="Email ou telefone" autocomplete="off" required>
                        <input type="password" name="senha" placeholder="Senha" autocomplete="off" required>
                        <button type="submit" class="btn-login">
                            Entrar
                        </button>
                    </form>
                    <a href="#" class="forgot">
                        Esqueceu a senha?
                    </a>

                    <hr class="divider">

                    <button type="button" class="btn-create">
                        Criar nova conta
                    </button>
                </div>

                <div class="notice">
                    Simulação acadêmica de
                    conscientização sobre phishing.
                    Não utilize senhas reais.
                </div>
            </div>

        </section>
        <footer>
            Simulação acadêmica — FATEC Praia Grande
            <br><br>
            Esta página não pertence a uma
            rede social real.
        </footer>
    </main>

</body>

</html>