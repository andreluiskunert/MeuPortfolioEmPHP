<div class="titulo"> <center> <u>  FOREACH </u></center></div>
<div>
    <p1>   ForeacH:  </p1>
    <h2>
        Explica passa a passo o exercicio sobre  FOREACH : 
    </h2>
   
</div>
<hr>
<?php
 $array = [1 => 'domingo',
    'segunda',
    'terça',
    'quarta',
    'quinta',
     'sexta',
    'sabado'
   ];
 print_r($array);
 echo'<br>';
 foreach($array as $valor) {
    echo "$valor <br>";
}
 foreach($array as $indice => $valor){
     echo"$indice => $valor <br> ";
 }
 $matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
 ];
 foreach($matrix as $linha) {
    echo "$linha <br>";
     foreach($linha as $letras){
        echo"$letras";
     }
     echo "<br>";
 }
 $numeros = [3, 5, 7, 9];
 foreach($numeros as &$dobrar) {
 $dobrar *= 2;
   echo "$dobrar <br>";
 }
  print_r($numeros);
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
 $array = [1 => 'domingo',
    'segunda',
    'terça',
    'quarta',
    'quinta',
     'sexta',
    'sabado'
   ];
 print_r($array);
 echo'<br>';
 foreach($array as $valor) {
    echo "$valor <br>";
}
 foreach($array as $indice => $valor){
     echo"$indice => $valor <br> ";
 }
 $matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
 ];
 foreach($matrix as $linha) {
    echo "$linha <br>";
     foreach($linha as $letras){
        echo"$letras";
     }
     echo "<br>";
 }
 $numeros = [3, 5, 7, 9];
 foreach($numeros as &$dobrar) {
 $dobrar *= 2;
   echo "$dobrar <br>";
 }
  print_r($numeros);
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>