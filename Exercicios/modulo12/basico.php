
<div class="titulo"> <center> <u> Sessão $ Cookie - Sessão   </u></center></div>

<div>
    <p1> Sessão $ Cookie - Sessão </p1>
    <h2>
    <p>Transcrição: </p> <br> <h4>
    Agora nós vamos começar o nosso capítulo de sessão então pra isso nós vamos criar uma nova pasta como

a gente tem feito em todos os capítulos e o nome da pasta será sessão dentro dessa pasta.

Eu vou criar um arquivo chamado básico lá em sessão pop PHP mas vamos definir o nosso título que será

sessão e nós vamos agora criar mais um menu aqui ou duplicar esse menu ou fechar com ele e vou fechar

também a dívida aqui nesse caso mas vamos trocar o nome para 12 pontos ação.

Vou substituir juntar e repetir nas cores verde vermelho azul gentios ou verde no bolo passado aqui
    </h4>
    <marquee> Daqui veremos os códigos em PHP...  </marquee>
    <h3> Resposta:</h3>
  
<hr>
<?php 
  session_start();
    print_r($_SESSION);
    echo '<br>';
    if(!$_SESSION['nome']){
        $_SESSION['nome'] = 'André Luis';
    }
    if(!$_SESSION['email']){
        $_SESSION['email'] = 'altkecno@gmail.com';  }
    echo '<br>';
?>
<p>
    <a href='/modulo12/alterar_sesao.php'> Alterar Sessão</a>
</p>
<a href="alterar_sessao.php"> Mais </a>
<p> <a href="alterar_sessao.php"> Voltando...</a></p>
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