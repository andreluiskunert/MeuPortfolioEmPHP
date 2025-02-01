<div class="titulo"> <center> <u>  Include Once </u></center></div>

<div>
    <p1> Includes _ Include Once  </p1>
    <h2>
    <p>Transcrição: </p> <br>
    Só no primeiro exercício desse capítulo achei pra vocês que quando você tenta carregar o mesmo arquivo

mais uma vez você não pode redefinir uma função isso gera um problema no PHP certo.

Eu vou mostrar para vocês que existe uma versão do Equador que é o Equador da LAN houses e tem o include

Mandalay.

Mas quando você quer garantir mesmo que você tenha duas chamadas ou duas chamadas no Equador que esse

arquivo será carregado apenas uma única vez. </h2>
<h3>Resultado será:</h3> 
<hr>
<?php 
ini_set('display_errors', 1);

  include('Include_once_arquivo.php');
 //  require('Include_once_arquivo.php'); -> deu erro..
 echo "Variável = '{$variavel}' <br>";
 $variavel = "variavel definida"; 
 echo "Variável = '{$variavel}' <br>";  
 include('Include_once_arquivo.php');
    echo "Variável = '{$variavel}' <br>";
    include_once('Include_once_arquivo.php');
    echo "Variável = '{$variavel}' <br>";
    include_once('Include_once_arquivo.php');
    echo "Variável = '{$variavel}' <br>";
    include_once('Include_once_arquivo.php');
    echo "Variável = '{$variavel}' <br>";
    include_once('Include_once_arquivo.php');
    echo "Variável = '{$variavel}' <br>";

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