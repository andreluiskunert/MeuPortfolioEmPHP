<div class="titulo"> <center> <u> Funções e Escopos </u></center></div>
<div>
    <p1>  Função e Escopo </p1>
    <h2>
        Explica passa a passo o exercicio sobre  Função e Escopo : 
    </h2>
</div>
<hr>
<?php
  echo "Função:<br> ";
  function imprimirMensagens(){
    echo "Boa noite <br>";
    echo "Desenvolvedores Full Stack, <br>";
    echo "Borar codar um pouquinho... <br>";
    echo "================== <br> ";
  }
  imprimirMensagens();
  imprimirMensagens();
  imprimirMensagens();

  echo "=============================================================================================<br> ";
 echo "Escopo: <br>";
  $variavel = 1;
  function trocarValor() {
    $variavel = 2; 
    echo "Durante a função: $variavel <br>";
  }
  echo "Antes: $variavel <br>";
  trocarValor();
  echo "Depois: $variavel <br>";
  echo "=========================================<br> ";
  function trocarValorDeVerdade(){
    global $variavel;
    $variavel =3;
    echo "Durante a função: $variavel <br>";

  }
  echo "Antes: $variavel <br>";
  trocarValorDeVerdade();
  echo "Depois: $variavel <br>";
 // var_dump(trocaValorDeVerdade()); NULL

?>
<style>
    hr {
        margin-bottom: 0px;
    }
    p {
        background-color: aqua;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        
    }
    p1{
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
      font-size: 1.7rem;
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