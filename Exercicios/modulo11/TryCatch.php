<?php namespace App;

use DivisionByZeroError;
use Error;
use Exception;

  ?>
<div class="titulo"> <center> <u> Try / Catch</u></center></div>

<div>
    <p1> Try / Catch</p1>
    <h2>
    <p>Transcrição: </p> <br> <h4>
    Duas palavras são extremamente importantes um tratamento de erro são essenciais no tratamento de erros

em PHP que trai o CAT.

Essas são palavras usadas também em muitas outras linguagens por exemplo JavaScript.

Uso traficante Java também ilustra a questão. <br>

Muitas linguagens usam essa mesma essa mesma filosofia essa mesma lógica exatamente se você tiver o

goleiro a linguagem que já trata os erros de uma forma diferente.

No caso se você estiver acostumado com o tratamento que ocorre em Java em JavaScript você vai ter uma

boa noção de como é feito exatamente também em PHP.
    </h4>
    <marquee> Daqui veremos os códigos em PHP...  </marquee>
  
<hr>
<?php 
 // echo 7 / 0 {gerou um erro};
  // echo intdiv(7, 0); //{gerou um erro};
 try {
    echo intdiv(7, 0);

 } catch(Error  $e){
    echo 'Teve um erro aqui revise e corrija antes de enviar para o cliente';
 }  /* catch(Exception $e){
    echo 'Teve um erro02 aqui revise e corrija antes de enviar para o cliente' ;
 } */
  try{
     throw new Exception('Um erro estranho..');
     echo intdiv(7, 0); 
  } catch(DivisionByZeroError $e){
     echo "Divisão por zero 0 <br>";
  } catch (trowable  $e) {
    echo "Erro encontrado:" . $e ->get_Message(). '<br>'
  } 
  //  depois de tarde encontrar o erro no código
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


<br>
<div><p>  Por trás do PHP</p></div> <br>
 <div>
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>