<div class="titulo"> <center> <u> Argumentos Variáveis </u></center></div>
<div>
    <p1> Argumentos Variáveis  </p1>
    <h2>
        Explica passa a passo o exercicio sobre  Argumentos Variáveis : 
    </h2>
</div>
<hr>
<?php 
echo '1ªExemplo.: ';
function soma($a, $b){
 return $a + $b;
}
echo '<br>'.soma(4, 5);
echo '<br>'. soma(14, 15, 16, 17, 18);
echo '<br>';
//
echo '2ªExemplo.: <br>';
function somaCompleta(...$numeros) {
   // print_r($numeros);
   $soma = 0;
   foreach($numeros as $num) {
    $soma += $num;
   }
   return $soma;

}
  echo somaCompleta(1, 2, 3, 4, 5);

//
echo '<br>';
echo '3ª Exemplo.: <br>';
$array = [5, 3, 7, 9];
echo  somaCompleta(...$array);
echo '<br>';
echo '4ªExemplo.:<br>';

function menbros($titular, ...$dependentes){
    echo "Titular: $titular <br> ";
    if($dependentes) {
        foreach($dependentes as $dev ) {
            echo "Dependente: $dev <br>";
        } 
    }
}
echo '<br>';
menbros("Jean Cardoso", "Lucas Camargo", "Luis Carlos", "Andre Luis");
echo '<br>';
menbros("Andre Luis", "Sofia Kunert");



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
 echo '1ªExemplo.: ';
function soma($a, $b){
 return $a + $b;
}
echo '<br>'.soma(4, 5);
echo '<br>'. soma(14, 15, 16, 17, 18);
echo '<br>';
//
echo '2ªExemplo.: <br>';
function somaCompleta(...$numeros) {
   // print_r($numeros);
   $soma = 0;
   foreach($numeros as $num) {
    $soma += $num;
   }
   return $soma;

}
  echo somaCompleta(1, 2, 3, 4, 5);

//
echo '<br>';
echo '3ª Exemplo.: <br>';
$array = [5, 3, 7, 9];
echo  somaCompleta(...$array);
echo '<br>';
echo '4ªExemplo.:<br>';

function menbros($titular, ...$dependentes){
    echo "Titular: $titular <br> ";
    if($dependentes) {
        foreach($dependentes as $dev ) {
            echo "Dependente: $dev <br>";
        } 
    }
}
echo '<br>';
menbros("Jean Cardoso", "Lucas Camargo", "Luis Carlos", "Andre Luis");
echo '<br>';
menbros("Andre Luis", "Sofia Kunert");



 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>