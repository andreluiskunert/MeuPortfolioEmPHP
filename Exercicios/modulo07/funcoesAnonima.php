<div class="titulo"> <center> <u> Funções Anônima </u></center></div>

<div>
    <p1>Funções Anônima  </p1>
    <h2>
        Explica passa a passo o exercicio sobre Funções Anônima : 
    </h2>
</div>
<hr>
<?php 
 $soma = function($a, $b ) {
        return $a + $b;
 };
 echo $soma(1, 2). '<br>';
 //
 function executar($a, $b, $op, $funcao) {
   $resultado = $funcao($a, $b);
   echo "$a $op $b = $resultado <br>";

 }
 executar(2, 3, '+', $soma);
 $multiplicacao = function($a, $b) {
    return $a * $b;
 };
 executar(3, 5, '*', $multiplicacao);
 //
$divisao =function($a, $b) {
  return $a / $b;
};
executar(9, 3, '/', $divisao);



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
 $soma = function($a, $b ) {
        return $a + $b;
 };
 echo $soma(1, 2). '<br>';
 //
 function executar($a, $b, $op, $funcao) {
   $resultado = $funcao($a, $b);
   echo "$a $op $b = $resultado <br>";

 }
 executar(2, 3, '+', $soma);
 $multiplicacao = function($a, $b) {
    return $a * $b;
 };
 executar(3, 5, '*', $multiplicacao);
 //
$divisao =function($a, $b) {
  return $a / $b;
};
executar(9, 3, '/', $divisao);



 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>