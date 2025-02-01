<div class="titulo"> <center> <u> Desafio Includes  </u></center></div>

<div>
    <p1> Includes _ Desafio Includes  </p1>
    <h2>
    <p>Transcrição: </p> <br>
    Pessoal um bom desafio pra vocês embora não vá resolver esse desafio aqui.

Certo é você criar algum exemplo passado como por exemplo no capítulo de classes e objetos nós definimos

exemplos relacionados à herança.

Criamos aqui uma classe Pessoa criamos uma classe usuário. <br>

Que tal você criar arquivos separados e um arquivo para a classe Pessoa um arquivo pra classe usuário

um outro arquivo que vai ser o arquivo que vai ser carregado ele vai carregar por exemplo o usuário

e você fazer um arquivo requerer o outro arquivo. <br>

Então você pode definir um arquivo chamado pessoa como PHP e definir sua pessoa dentro dela.

Você vai ter um arquivo chamado usuário ponto PHP que vai fazer o qual o Anzhi por exemplo do arquivo

pessoal aponta PHP e aí você vai conseguir uma vez tendo importando. </h2>
<h3>Resultado será:</h3> 
<hr>
<?php 
require_once('usuario.php');
// ini_set('display_errors', 1);
 $usuario = new Usuario('Andre Luis', 42, 'ALKTecn_alktecn');
 $usuario->apresentar();
 unset($usuario);


?>
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

<marquee> Daqui veremos os códigos em PHP...  </marquee>
<br>
<div><p>  Por trás do PHP</p></div> <br>
 <div>
 require_once('usuario.php');
// ini_set('display_errors', 1);
 $usuario = new Usuario('Andre Luis', 42, 'ALKTecn_alktecn');
 $usuario->apresentar();
 unset($usuario);
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>