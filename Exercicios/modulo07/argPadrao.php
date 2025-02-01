<div class="titulo"> <center> <u> Argumento Padrão </u></center></div>
<div>
    <p1> Argumento Padrão  </p1>
    <h2>
        Explica passa a passo o exercicio sobre  Argumento Padrão : 
    </h2>
</div>
<hr>
<?php 
 function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {  // Irei analise esse problema amanhã
    return "boa noite, $nome $sobrenome!<br>";
 }
echo saudacao();
echo saudacao(NULL);
echo saudacao(null, null);
echo saudacao('Mestre', 'Supremo');
echo saudacao('He-mem e os', 'Mestres do Universo');
///
function anotarPedido($comida, $bebida = 'Agua'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}
anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Café');
//
function anotarPedido2($bebida = 'Agua', $comida){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}
//anotarPedido2('Hamburguer');
anotarPedido2('cafe', 'Pizza');

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
 


 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>