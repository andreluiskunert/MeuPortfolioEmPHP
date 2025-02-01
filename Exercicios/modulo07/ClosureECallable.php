<div class="titulo"> <center> <u> Closure e Callable</u></center></div>

<div>
    <p1> Closure e Callable </p1>
    <h2>
        Explica passa a passo o exercicio sobre  Closure e Callable: 
    </h2>
</div>
<hr>
<?php 
 $soma1 = function ($a, $b){
    return $a + $b;
 };
 function soma2($a, $b) {
    return $a + $b;
 }
 echo $soma1(2, 3).' ';
 echo ( is_callable($soma1)? 'Sim' : 'Não').'<br>';
 /* $soma1 = 1;
 echo (is_callable($soma1)? 'Sim' : 'Não') .'<br>';
 */
echo soma2(3, 4) . ' ';
//echo (is_callable(soma2)? 'sim' : 'não') . '<br>';
echo '<br>';
var_dump($soma1);
function executar($a, $b, $op, callable $funcao) {
    $resultado = $funcao($a, $b)?? 'Nada';
    echo "$a $op $b = $resultado <br>";
 
  }
  executar(2, 3, '+', $soma1);
 // executar(2, 3, '+', soma2);função 

  
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
 

 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>