
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/login.css">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
                            <div class="erros">
                                            <p>Usuário/Senha inválido!</p>
                                    </div>
                        <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    
</body>
<footer class="rodape"> 
         <h2>ALKTEC</h2> <br>
         <h3> Responsavel <a href="https://persornalweb.netlify.app/">André Luis Kunert_</a>Técnico em Informatica e Analista de TI e Sistema_Novembro <?= date('Y'); ?>  </h3>

        </footer>

</html>