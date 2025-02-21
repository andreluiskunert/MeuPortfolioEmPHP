


<div class="titulo"> <center> <u> Error Handler </u></center></div>

<div>
    <p1> Error Handler </p1>
    <h2> Transcrição  </h2>

<h4> 
Nós vamos agora falar do gerenciador de erro do PHP com o erro Android que é um nome também que é uma

tecnologia em inglês que a gente usa muito no dia a dia.

Você já olhou lá e o Android do sistema pra saber se ele já suporta essa acessada aprende um primor

aquele trabalho com esse conceito não é a linguagem também. <br>

No caso da HP a gente chama de ingerência do dinheiro o erro da linguagem.

Vão achar pra vocês um pouquinho como a gente pode personalizar em algumas situações aquilo que vai

ser mostrado ou não e eventualmente a gente pode filtrar mensagens fáceis e McDonald's ou mostrar isso

nesse exemplo.
    </h4>
    <hr>
    
<?php 
// Vou deixar um pouquinho para amnahã...
ini_set('display_errors', 1);
//echo 4 / 0 . '<br>';
error_reporting(E_ERROR);
//echo 4 / 0 . '<br>';
error_reporting(E_ALL);
// echo 4 / 0 . '<br>';
error_reporting(~E_ALL);
// echo 4 / 0 . '<br>';
error_reporting(E_ALL);
8 / 0 .'<br>';
include 'Arquivos para ser daqui a pouco..php';
//
function filtrarMensagem($errno, $errstring){
     $text = 'include';
      return !!stripos("$errstring",  $text);

}
set_error_handler('filtrarMensagem', E_WARNING);
echo '<hr>';
 echo 4 / 0 . '<br>';
 include 'aquivo_inexistente.php';
 









 
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