<div class="titulo"> <center> <u> Desafio Palindromo e Resposta </u></center></div>
<div>
    <p1> Desafio Palindromo e Resposta</p1>
    <h2>
        Explica passa a passo o exercicio sobre Desafio Palindromo e Resposta  : <br>
        palindromo é "ANA"  , usando laço for... 
    </h2>
</div>
<hr>
<?php
 function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'não';
        }
    }
    return 'sim';
 }
 echo '# Usando FOR : <br>';
 echo palindromo('arara') . '<br>';
 echo palindromo('bola') . '<br>';
 echo palindromo('ana') . '<br>';
 echo palindromo('paula') . '<br>';
echo ' # proximo exemplo com API do PHP: <br>';
function palindromoSimples($palavra){
     return $palavra === strrev($palavra) ? 'sim' : 'não';
}
echo palindromoSimples('arara') . '<br>';
 echo palindromoSimples('bola') . '<br>';
 echo palindromoSimples('ana') . '<br>';
 echo palindromoSimples('paula') . '<br>';

 

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
 function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'não';
        }
    }
    return 'sim';
 }
 echo '# Usando FOR : <br>';
 echo palindromo('arara') . '<br>';
 echo palindromo('bola') . '<br>';
 echo palindromo('ana') . '<br>';
 echo palindromo('paula') . '<br>';
echo ' # proximo exemplo com API do PHP: <br>';
function palindromoSimples($palavra){
     return $palavra === strrev($palavra) ? 'sim' : 'não';
}
echo palindromoSimples('arara') . '<br>';
 echo palindromoSimples('bola') . '<br>';
 echo palindromoSimples('ana') . '<br>';
 echo palindromoSimples('paula') . '<br>';

 
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>