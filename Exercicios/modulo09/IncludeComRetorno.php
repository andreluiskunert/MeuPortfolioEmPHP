<div class="titulo"> <center> <u>  Include Com Retorno </u></center></div>

<div>
    <p1> Includes _ Include Com Retorno  </p1>
    <h2>
    <p>Transcrição: </p> <br>
    Nem sabia que era mostrar para vocês que é como você define um arquivo indiretamente nesse aqui você

usa o streaming.

Você vai ter como a partir do include.

Ou o público vai receber o resultado que é retornado a partir de um arquivo até agora a gente criou

por exemplo algo do include em arquivo PHP.

Nós criamos uma função e essa função tem um nome.

Lá só usamos até esse momento estranho associado ao retorno de uma função mas eu também posso usar o

estranho associado ao retorno de um arquivo inteiro ou seja um momento que eu chamaria include chamar </h2>
<h3>Resultado será:</h3> 
<hr>
<?php 
    $valorRetornada = require('IncludeComRetorno.php');
     echo $valorRetornada.'<br>';
     echo "$variavelDeclarada<br>";
        echo "Aqui está o valor da variável declarada: $variavelDeclarada";
    echo __DIR__. '<br>';
    $valorRetornada2 = require(__DIR__ . '/variavelDeclarada.php');
    echo "$variavelDeclarada2<br>";
    echo "$variavelDeclarada<br>";
   // fecho loop no PHP 
   // ver depois... 


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
 
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>