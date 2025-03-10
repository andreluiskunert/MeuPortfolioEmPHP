<?php 
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if($_POST['email']) {
    $usuarios = [
        [
            "nome" => "Aluno Cod3r",
            "email" => "aluno@cod3r.com.br",
            "senha" => "1234567",
        ],
        [
            "nome" => "Outro Aluno",
            "email" => "outro@email.com.br",
            "senha" => "7654321",
        ],
    ];

    foreach($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie('usuario', $usuario['nome'], $exp);
            header('Location: index.php');
        }
    }

    if(!$_SESSION['usuario']) {
        $_SESSION['erros'] = ['Usuário/Senha inválido!'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recurso/css/estilo.css">
    <link rel="stylesheet" href="recurso/css/exercicio.css">


</head>

<body class="exercicio">
   <header class="cabecalho"> 
       <h1> Meu Primeiro Curso de PHP </h1>
      <h2>Visualização do Exercicio</h2>
      <marquee >  "Estou criando meu Portfolio..."</marquee>
    </header>
    <nav class="navegacao">
      <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde"> Sem Formatação</a>
      <a href="index.php" class="vermelho"> voltar </a>
  </nav>
   
    <main class="principal">
      <div class="conteudo"> 
      <marquee> "Estudando PHP7 pela Cod3r..."</marquee>
        <?php
         //include($_GET['dir']."/" . $_GET['file'] . ".php");
        // include("testar/teste.php");
        include(__DIR__ ."/{$_GET['dir']}/{$_GET['file']}.php");
        ?>
       
        
      </div> 

    </main>
    <footer class="rodape"> 
         <h2>ALKTEC</h2>  <br>
         <h3> Responsavel <a href="https://persornalweb.netlify.app/">André Luis Kunert_</a>Técnico em Informatica e Analista de TI e Sistema_Novembro <?= date('Y'); ?>  </h3>
        </footer>

</body>

</html>