<div class="titulo"> <center> <u>   Break/Continue </u></center></div>
<div>
    <p1>   Break/Continue   </p1>
    <h2>
        Explica passa a passo o exercicio sobre Break/Continue  : 
    </h2>
   
</div>
<hr>
<?php
 echo 'Primeiro Laço <br>';
  $cont = 15;
  for(;;){
     echo "$cont <br>";
     $cont++;
     if($cont >20){
        break;
     }
  } 
  echo  'Segundo laço <br>';
   for(;;) {
    $cont++;
    if($cont %2 === 1) {
        continue;
    }
    echo "$cont <br>";
    if($cont >= 30) {
        break;
    }
  }
  echo 'Usando ForeaCh: <br>';
  foreach(array(1, 2, 3, 4, 5, 6, 7, 8, 9) as $valor){
    if($valor === 5)break;
    if($valor % 2 === 0)  continue;
    echo "$valor <br>";

  }
  echo "Fim!!!";
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
 echo 'Primeiro Laço <br>';
  $cont = 15;
  for(;;){
     echo "$cont <br>";
     $cont++;
     if($cont >20){
        break;
     }
  } 
  echo  'Segundo laço <br>';
   for(;;) {
    $cont++;
    if($cont %2 === 1) {
        continue;
    }
    echo "$cont <br>";
    if($cont >= 30) {
        break;
    }
  }
  echo 'Usando ForeaCh: <br>';
  foreach(array(1, 2, 3, 4, 5, 6, 7, 8, 9) as $valor){
    if($valor === 5)break;
    if($valor % 2 === 0)  continue;
    echo "$valor <br>";

  }
  echo "Fim!!!";
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>