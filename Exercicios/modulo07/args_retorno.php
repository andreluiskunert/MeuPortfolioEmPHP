<div class="titulo"> <center> <u> Args & Retorno </u></center></div>
<div>
    <p1> Argumentos & Retorno </p1>
    <h2>
        Explica passa a passo o exercicio sobre  Argumentos & Retorno : 
    </h2>
</div>
<hr>
<?php
function obterMensagem(){
    return 'Bom dia Desenvolvedor Full Stack PHP';
}
 echo obterMensagem(); 
 echo '<br>';
 $m = obterMensagem(); 
 echo" $m <br> ";
 var_dump(obterMensagem(). '<br>');
function obterMensagemComnome($nome) {
    return "Bora codar,  {$nome}";
    //  14/ 12/2024 _sábado de manhã
}
echo'<br>', ObterMensagemComNome('André Luis ');
echo'<br>', ObterMensagemComNome('Luan ');
echo'<br>', ObterMensagemComNome('John ');
// Soma de variavel
 function soma($a, $b){
    return $a + $b;
 }
 $x= 7;
 $y = 9;

 echo '<br>', soma(3, 4);
 echo '<br>', soma(5, 7);
 echo '<br>', soma($y, $x);
  function trocarValor($a, $novoValor){
    $a = $novoValor;
  }
  $variavel = 1;
  trocarValor($variavel, 3);
  echo '<br> ',$variavel;
 function trocarValorDeVerdade($a, $novoValor) {
    $a = $novoValor;
 }
 trocarValorDeVerdade($variavel, 5000);
 echo '<br>', $variavel;




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
 function obterMensagem(){
    return 'Bom dia Desenvolvedor Full Stack PHP';
}
 echo obterMensagem(); 
 echo '<br>';
 $m = obterMensagem(); 
 echo" $m <br> ";
 var_dump(obterMensagem(). '<br>');
function obterMensagemComnome($nome) {
    return "Bora codar,  {$nome}";
    //  14/ 12/2024 _sábado de manhã
}
echo'<br>', ObterMensagemComNome('André Luis ');
echo'<br>', ObterMensagemComNome('Luan ');
echo'<br>', ObterMensagemComNome('John ');
// Soma de variavel
 function soma($a, $b){
    return $a + $b;
 }
 $x= 7;
 $y = 9;

 echo '<br>', soma(3, 4);
 echo '<br>', soma(5, 7);
 echo '<br>', soma($y, $x);
  function trocarValor($a, $novoValor){
    $a = $novoValor;
  }
  $variavel = 1;
  trocarValor($variavel, 3);
  echo '<br> ',$variavel;
 function trocarValorDeVerdade($a, $novoValor) {
    $a = $novoValor;
 }
 trocarValorDeVerdade($variavel, 5000);
 echo '<br>', $variavel;




 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>