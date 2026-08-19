<?php

declare(strict_types=1);

session_start();

/*
|--------------------------------------------------------------------------
| VERIFICAÇÃO DA SIMULAÇÃO
|--------------------------------------------------------------------------
*/

if (
    !isset($_SESSION['simulacao']) ||
    $_SESSION['simulacao'] !== true
) {
    header('Location: index.php');
    exit;
}

$email = $_SESSION['email'] ?? '';

?>
<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Resultado — Simulação Acadêmica</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background:
                linear-gradient(
                    135deg,
                    #eef2ff,
                    #f8fafc
                );

            min-height: 100vh;

            color: #1e293b;

            padding: 30px 20px;
        }

        .container {
            width: 100%;

            max-width: 760px;

            margin: 0 auto;
        }

        .header {
            text-align: center;

            margin-bottom: 25px;
        }

        .logo {
            width: 70px;
            height: 70px;

            margin: 0 auto 20px;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #dc2626;

            color: white;

            font-size: 32px;

            font-weight: bold;
        }

        .header h1 {
            font-size: 30px;

            margin-bottom: 10px;

            color: #0f172a;
        }

        .header p {
            color: #64748b;

            line-height: 1.6;
        }

        .card {
            background: white;

            border-radius: 16px;

            padding: 30px;

            margin-bottom: 20px;

            box-shadow:
                0 10px 35px
                rgba(15, 23, 42, .10);

            border: 1px solid #e2e8f0;
        }

        .danger {
            background: #fef2f2;

            border: 1px solid #fecaca;

            border-left: 5px solid #dc2626;

            border-radius: 10px;

            padding: 20px;

            color: #7f1d1d;

            line-height: 1.6;

            margin-bottom: 25px;
        }

        .danger strong {
            color: #991b1b;
        }

        .success {
            background: #ecfdf5;

            border: 1px solid #a7f3d0;

            border-radius: 10px;

            padding: 18px;

            color: #065f46;

            line-height: 1.6;

            margin-bottom: 25px;
        }

        .email-box {
            background: #f8fafc;

            border: 1px solid #e2e8f0;

            border-radius: 10px;

            padding: 15px;

            margin-top: 10px;

            word-break: break-word;

            color: #334155;
        }

        h2 {
            font-size: 21px;

            margin-bottom: 15px;

            color: #0f172a;
        }

        .checklist {
            list-style: none;
        }

        .checklist li {
            display: flex;

            gap: 12px;

            align-items: flex-start;

            background: #f8fafc;

            border-radius: 9px;

            padding: 15px;

            margin-bottom: 10px;

            line-height: 1.5;

            color: #334155;
        }

        .icon {
            flex-shrink: 0;

            width: 24px;
            height: 24px;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #dcfce7;

            color: #15803d;

            font-weight: bold;
        }

        .warning-icon {
            background: #fef3c7;

            color: #b45309;
        }

        .steps {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 12px;

            margin-top: 20px;
        }

        .step {
            text-align: center;

            background: #f8fafc;

            border-radius: 10px;

            padding: 18px 10px;

            border: 1px solid #e2e8f0;
        }

        .step-number {
            font-size: 22px;

            font-weight: bold;

            color: #4f46e5;

            margin-bottom: 8px;
        }

        .step p {
            font-size: 13px;

            color: #64748b;

            line-height: 1.4;
        }

        .button {
            display: inline-block;

            text-decoration: none;

            background: #4f46e5;

            color: white;

            padding: 13px 20px;

            border-radius: 9px;

            font-weight: bold;

            margin-top: 10px;
        }

        .button:hover {
            background: #4338ca;
        }

        .center {
            text-align: center;
        }

        .footer {
            text-align: center;

            color: #94a3b8;

            font-size: 12px;

            line-height: 1.6;

            margin-top: 25px;
        }

        @media (max-width: 600px) {

            .card {
                padding: 22px;
            }

            .header h1 {
                font-size: 25px;
            }

            .steps {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>

<div class="container">


    <!-- CABEÇALHO -->

    <header class="header">

        <div class="logo">
            !
        </div>

        <h1>
            Simulação concluída
        </h1>

        <p>
            Você acabou de participar de uma
            simulação acadêmica de phishing.
        </p>

    </header>


    <!-- AVISO PRINCIPAL -->

    <section class="card">

        <div class="danger">

            <strong>
                ⚠️ Esta não era uma página de login real.
            </strong>

            <br><br>

            O objetivo desta atividade é demonstrar
            como uma página aparentemente legítima
            pode ser utilizada em uma tentativa de
            engenharia social.

        </div>


        <div class="success">

            <strong>
                Etapa registrada com sucesso.
            </strong>

            <br>

            A aplicação registrou a participação
            no banco de dados local utilizado
            pelo laboratório.

        </div>


        <?php if ($email !== ''): ?>

            <h2>
                Informação utilizada na simulação
            </h2>

            <div class="email-box">

                <?= htmlspecialchars(
                    $email,
                    ENT_QUOTES,
                    'UTF-8'
                ) ?>

            </div>

        <?php endif; ?>

    </section>


    <!-- TÉCNICAS -->

    <section class="card">

        <h2>
            🔎 O que aconteceu?
        </h2>

        <ul class="checklist">

            <li>

                <span class="icon">
                    ✓
                </span>

                <span>

                    <strong>
                        Aparência legítima
                    </strong>

                    <br>

                    A página utiliza elementos visuais
                    que podem transmitir uma sensação
                    de familiaridade e confiança.

                </span>

            </li>


            <li>

                <span class="icon">
                    ✓
                </span>

                <span>

                    <strong>
                        Solicitação de credenciais
                    </strong>

                    <br>

                    O formulário solicita informações
                    normalmente utilizadas em páginas
                    de autenticação.

                </span>

            </li>


            <li>

                <span class="icon">
                    ✓
                </span>

                <span>

                    <strong>
                        Engenharia social
                    </strong>

                    <br>

                    O contexto da página foi utilizado
                    para incentivar o usuário a continuar
                    o processo.

                </span>

            </li>


            <li>

                <span class="icon warning-icon">
                    !
                </span>

                <span>

                    <strong>
                        Confiança não significa segurança
                    </strong>

                    <br>

                    Uma página visualmente semelhante
                    a um serviço conhecido não garante
                    que ela seja legítima.

                </span>

            </li>

        </ul>

    </section>


    <!-- FLUXO -->

    <section class="card">

        <h2>
            📋 Fluxo demonstrado
        </h2>

        <div class="steps">

            <div class="step">

                <div class="step-number">
                    01
                </div>

                <p>
                    Usuário acessa
                    a página.
                </p>

            </div>


            <div class="step">

                <div class="step-number">
                    02
                </div>

                <p>
                    Usuário preenche
                    o formulário.
                </p>

            </div>


            <div class="step">

                <div class="step-number">
                    03
                </div>

                <p>
                    Sistema registra
                    o evento.
                </p>

            </div>

        </div>

    </section>


    <!-- COMO SE PROTEGER -->

    <section class="card">

        <h2>
            🛡️ Como evitar phishing?
        </h2>

        <ul class="checklist">

            <li>

                <span class="icon">
                    ✓
                </span>

                <span>
                    Verifique o endereço do site
                    antes de informar credenciais.
                </span>

            </li>


            <li>

                <span class="icon">
                    ✓
                </span>

                <span>
                    Desconfie de mensagens que
                    utilizam urgência ou ameaças.
                </span>

            </li>


            <li>

                <span class="icon">
                    ✓
                </span>

                <span>
                    Nunca reutilize senhas importantes
                    em sites desconhecidos.
                </span>

            </li>


            <li>

                <span class="icon">
                    ✓
                </span>

                <span>
                    Confira cuidadosamente o domínio
                    antes de fazer login.
                </span>

            </li>

        </ul>

    </section>


    <!-- BOTÃO -->

    <section class="card center">

        <h2>
            Atividade finalizada
        </h2>

        <p>
            Você pode retornar ao início para
            executar a simulação novamente.
        </p>

        <a
            href="index.php"
            class="button"
        >
            ↻ Reiniciar simulação
        </a>

    </section>


    <footer class="footer">

        FATEC Praia Grande<br>

        Atividade Prática 01 — Phishing<br>

        Laboratório acadêmico de conscientização

    </footer>


</div>

</body>

</html>