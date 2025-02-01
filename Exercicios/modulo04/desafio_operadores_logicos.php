<div class="titulo"> <center> <u> Desafio Operadores Lógicos </u></center></div>
<!-- *  como será o desafio:
 
*/ -->
<p>  como será o desafio: </p>
<div>
     §  Dois trabalhos -> terça ou na quinta-feira: <br>
    -> Se os dois forem executados -> TV 50' e sorvete <br>
    -> Se apenas um for executado -> TV 32' e sorvete  <br>
    -> se nemhum for executado -> Fica em casa mais saúdavel. <br>
    <br>
</div>
<form action="#" method="post">
    <div>
  <label for="t1">Trabalho 1 (terça):</label>
     <select name="t1" id="t1">
        <option value="1"> Executado</option>
        <option value="0"> Não Executado</option>

     </select>
    </div>
    <br>
    <div>
  <label for="t2">Trabalho 2 (quinta):</label>
     <select name="t2" id="t2">
        <option value="1"> Executado</option>
        <option value="0"> Não Executado</option>

     </select>
    </div>
    <button>Executar</button>
</form>
<?php
/* var_dump(!!$_POST['t1']);
echo " borar compra tv e tornar sorvetes"; 
var_dump(!!$_POST["t2"]);
echo" ficar em casa...cuidar mais da saudade";
 */
if(isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1 = $_POST['t1'] === '1';
    $t2 = $_POST['t2'];
    $tv = '';
    $sorvete = false;
    if($t1 && $t2) {
        $tv = '50';
    } elseif($t1 xor $t2) {
        $tv = '32';
    } if($t1 or $t2) {
        $sorvete = true;
    }
     if($tv) {
        $resultado = "Vamos adquirir uma tv de $tv..";
     } else{
        $resultado = "Sem TV dessa vez.. :(";
     }
     $saudavel = !$sorvete;
     if($saudavel) {
        $resultado .= "<br> Estamos mais saúdaveis... ";
     } else {
        $resultado .= '<br> Sorvete Liberado \0/';
     }
     echo "<p1> O resultado será:<br> $resultado; </p1>";
    
}




echo'<hr>';

?>
<style>
    hr {
        margin-bottom: 0px;
    }
    p {
        background-color: aqua;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 400;
        
    }
    button, select {
        font-size: 1.0rem;
    }
    p1 {
       
       font-family: Arial, Helvetica, sans-serif;
       font-weight: 400;

   }
</style>
<br>
<br>
<marquee> Daqui veremos os códigos em PHP...  </marquee>
<br>
<div><p>  Por trás do PHP</p></div>
<div>
$t1 = $_POST['t1'] === '1'; <br>
$t2 = $_POST['t2'];  <br>
$tv = '';
$sorvete = false; <br>
if($t1 && $t2) {
    $tv = '50';
} elseif($t1 xor $t2) { <br>
    $tv = '32';
} if($t1 or $t2) {
    $sorvete = true;
}  <br>
 if($tv) {
    $resultado = "Vamos adquirir uma tv de $tv..";
 } else{  <br>
    $resultado = "Sem TV dessa vez.. :(";
 }  <br>
 $saudavel = !$sorvete ;
 if($saudavel) {
    $resultado .= "<br> Estamos mais saúdaveis... ";
 } else {
    $resultado .= '<br> Sorvete Liberado \0/';
 }
 echo "<p> $resultado </p>";




echo'<hr>';

</div>

<marquee> "Estudando PHP7 pela Cod3r..."</marquee>
