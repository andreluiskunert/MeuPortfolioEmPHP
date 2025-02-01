<div class="titulo"> <center> <u>   Break/Continue </u></center></div>
<div>
    <p1>  Desafio Impresão Break/Continue   </p1>
    <h2>
        Explica passa a passo o como será o desafio  Break/Continue  : <br>
        Enunciado: <br>
        § Imprima apenas os valores do array que  contém indice Par; <br>
        § Desafio adicional:Resolver com for e foreach; <br>
        § Valores esperados : AAA, CCC, EEE; <br>
    </h2>
    <h3><nr> A resposta correta é </nr>:</h3>
</div>
<hr>
<?php
   $array = [
    "AAA", // 0
    "BBB",
    "CCC", // 2
    "DDD",
    "EEE", // 4
    "FFF"
   ];
   for($i = 0;  $i <  count($array); $i++) {
     if($i % 2 !==1) continue;
      echo "{$array[$i]} <br>";
   }; 
   echo '<br>';

   foreach($array as $chave => $valor) {
    if($chave % 2 !==0) continue; 
    echo "$valor <br>";
   } 
 
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
    h3 {
        font-family: 'Courier New', Courier, monospace;
        font-size: 1.5rem;
    

    }
</style>
<br>
<marquee> Daqui veremos os códigos em PHP...  </marquee>
<br>
<div><p>  Por trás do PHP</p></div> <br>
 <div>
  $array = [ <br>
    "AAA", // 0 <br>
    "BBB",  <br>
    "CCC", // 2 <br>
    "DDD", <br>
    "EEE", // 4 <br>
    "FFF" <br>
   ];
   for($i = 0;  $i <  count($array); $i++) { <br>
     if($i % 2 !==1) continue;
      echo "{$array[$i]} <br>";
   };  <br>
   echo '<br>';
   
   foreach($array as $chave => $valor) { <br>
    if($chave % 2 !==0) continue;  <br>
    echo "$valor <br>";
   } 
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>