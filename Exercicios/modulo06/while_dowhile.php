<div class="titulo"> <center> <u>   While / Do While </u></center></div>
<div>
    <p1>    While / Do While </p1>
    <h2>
        Explica passa a passo  a aula sobre   While / Do While  : <br>
    </h2>
    <h3><nr> Bora para os exemplos </nr>:</h3>
</div>
<hr>
<?php
echo "While somente while: <br>";
   const VALOR_LIMITE = 5;
   $contador = 0;
    while($contador < VALOR_LIMITE)  {
    echo "While $contador <br>";
    $contador++; 
 };
 echo 'FOR outro exmplo de laço:<br>';
 $contador = 0;
 for(;$contador < VALOR_LIMITE; $contador++) { echo "FOR $contador <br>";  };
 echo'Voltando para o While Do While: <br>';
 $contador = 0;
 do {
 echo "While $contador <br>";
 $contador++; 
} while($contador < VALOR_LIMITE);
 $contador = 0;
 while(true) {
    echo "While(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;
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
 echo "While somente while: <br>";
   const VALOR_LIMITE = 5;
   $contador = 0;
    while($contador < VALOR_LIMITE)  {
    echo "While $contador <br>";
    $contador++; 
 };
 echo 'FOR outro exmplo de laço:<br>';
 $contador = 0;
 for(;$contador < VALOR_LIMITE; $contador++) { echo "FOR $contador <br>";  };
 echo'Voltando para o While Do While: <br>';
 $contador = 0;
 do {
 echo "While $contador <br>";
 $contador++; 
} while($contador < VALOR_LIMITE);
 $contador = 0;
 while(true) {
    echo "While(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;
 } 
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>