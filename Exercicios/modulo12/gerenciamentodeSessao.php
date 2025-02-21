
<div class="titulo"> <center> <u> Sessão $ Cookie - Gerenciamento de Sessão </u></center></div>

<div>
    <p1> Sessão $ Cookie - Gerenciamento de Sessão </p1>
    <h2>
    <p>Transcrição: </p>  <h4>
    Agora vamos trabalhar com o tema de gerenciamento e seção certo associado a cada seção existe um Haiti

e esse aí se for conhecido por outra pessoa alguém pode roubar sua sessão e ter acesso aos dados da

sessão.

Eu vou mostrar isso acontecer na prática usando dois brasileiros eu não vou mostrar duas máquinas mas

esse mesmo efeito vai acontecer em múltiplas máquinas. <br>

Eu vou mostrar como é que você pode regenerar o Haiti para que você tenha maior segurança que continue

trabalhando com sessões em PHP.

    </h4>
    <marquee> Daqui veremos os códigos em PHP...  </marquee>
    <h3> Resposta:</h3>
   

<hr>
<?php 
 // session_id(' epg5hchr2a6pqc0jl251rpdqc8');
  session_start();
    echo session_id();
    echo '<br>';
    $contador = &$_SESSION['contador'];
    $contador = $contador ? $contador + 1 : 1;
    echo '<br>'. $_SESSION['contador'];
    if($_SESSION['contador'] % 5 === 0){
        session_regenerate_id();
    }
    if($_SESSION['contador'] > 15){
        session_destroy();
    }

 
?>

<!-- <p>
    <a href=''> Alterar Sessão</a>
</p>
<a href="alterar_sessao.php"> Mais </a>
<p> <a href="alterar_sessao.php"> Voltando...</a></p> -->
<hr>
<style>
    hr {
        margin-bottom: 0px;
    }
    p {
        background-color: aqua;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        
    }
    .p1{
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
      font-size: 1.9rem;
    }
    .p2 {
        font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
      font-size: 1.5rem;


    }
    [center] {
       display: flex;
       justify-content: center;
    }
    h2{
        font-weight: 200;
        font-family:'Courier New', Courier, monospace;
        font-size: 1.3rem;
    }
</style>
<br>


<br>
<div><p>  Por trás do PHP</p></div> <br>
 <div>
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>