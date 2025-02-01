<div class="titulo"> <center> <u> Operadores Lógicos  </u></center></div>
<?php
echo"<p> Desafio _1ª Parte: </p>";
// -> explica ...
echo "<p> V Ou F: </p> ";
var_dump(true);
echo '<br>';
var_dump(!true);
echo "<p> Tabela verdade 'AND' (E): </p>  ";
var_dump(true && false);
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && true);
echo '<br>';
var_dump(false && false);
echo '<br>';
echo " AND :  ";
echo"<br>";
var_dump(true and false);
echo '<br>';
var_dump(true and false);
echo '<br>';
var_dump(false and true);
echo '<br>';
var_dump(false and false);
echo '<br>';
//var_dump(true and 3 > 2 &&  3 === '3'); exemplo 
echo "<p> Tabela verdade 'OR' (OU): </p>  ";
var_dump(true || false);
echo "<br>";
var_dump(true || false);
echo "<br>";
var_dump(false|| true);
echo "<br>";
var_dump( false || false);
echo "<br>";
echo "or";
var_dump(true or false);
echo "<br>";
var_dump(true or false);
echo "<br>";
var_dump(false or true);
echo "<br>";
var_dump( false or false);
echo "<br>";
echo "<p> Tabela verdade 'XOR' (OU Exclusivo): </p>  ";
var_dump( false xor false);
echo "<br>";
var_dump( true xor false);
echo "<br>";
var_dump( false xor true);
echo "<br>";
echo"<br> != :";
echo"<br>";
var_dump( false != false);
echo "<br>";
var_dump( true != false);
echo "<br>";
var_dump( false != true);
echo "<br>";
echo "<br>";
echo'<hr>';
echo "<p>  Desafio_2ª Parte: </p>";
echo "<p class= divisao> Exemplos: </p>";
$idade = 65;
$sexo = 'M';
$pagouPrevidencia =  true;
$criterioHomem =  ($idade >= 65 && $sexo === 'M') ; 
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atinguirCriterior = $criterioHomem || $criterioMulher;
 $podeSeAposentar = $pagouPrevidencia && $atinguirCriterior ;
 echo "Pode ser aposentar -> $podeSeAposentar .<br> ";


if($idade >= 60 && $sexo === 'F'){
    echo "<br> Pode se aposentar... -> $sexo";
} elseif($idade >= 65 && $sexo === 'M'){
    echo "<br> Pode se aposentar... -> $sexo";
}  else{
    echo '<br> ... trabalhar um pouco...';
}

   
?>
<style>
    hr {
        margin-bottom: 0px;
    }
    p {
        background-color: aqua;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        
    }
  
</style>
<br>
<br>
<marquee> Daqui veremos os códigos em PHP...  </marquee>
<br>
<div><p>  Por trás do PHP</p></div>
<div>
echo"<p> Desafio _1ª Parte: </p>";
// -> explica ...
echo "<p> V Ou F: </p> ";
var_dump(true);
echo '<br>';
var_dump(!true);
echo "<p> Tabela verdade 'AND' (E): </p>  ";
var_dump(true && false);
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && true);
echo '<br>';
var_dump(false && false);
echo '<br>';
echo " AND :  ";
echo"<br>";
var_dump(true and false);
echo '<br>';
var_dump(true and false);
echo '<br>';
var_dump(false and true);
echo '<br>';
var_dump(false and false);
echo '<br>';
//var_dump(true and 3 > 2 &&  3 === '3'); exemplo 
echo "<p> Tabela verdade 'OR' (OU): </p>  ";
var_dump(true || false);
echo "<br>";
var_dump(true || false);
echo "<br>";
var_dump(false|| true);
echo "<br>";
var_dump( false || false);
echo "<br>";
echo "or";
var_dump(true or false);
echo "<br>";
var_dump(true or false);
echo "<br>";
var_dump(false or true);
echo "<br>";
var_dump( false or false);
echo "<br>";
echo "<p> Tabela verdade 'XOR' (OU Exclusivo): </p>  ";
var_dump( false xor false);
echo "<br>";
var_dump( true xor false);
echo "<br>";
var_dump( false xor true);
echo "<br>";
echo"<br> != :";
echo"<br>";
var_dump( false != false);
echo "<br>";
var_dump( true != false);
echo "<br>";
var_dump( false != true);
echo "<br>";
echo "<br>";
echo'<hr>';
echo "<p>  Desafio_2ª Parte: </p>";
echo "<p class= divisao> Exemplos: </p>";
$idade = 65;
$sexo = 'M';
$pagouPrevidencia =  true;
$criterioHomem =  ($idade >= 65 && $sexo === 'M') ; 
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atinguirCriterior = $criterioHomem || $criterioMulher;
 $podeSeAposentar = $pagouPrevidencia && $atinguirCriterior ;
 echo "Pode ser aposentar -> $podeSeAposentar .<br> ";


if($idade >= 60 && $sexo === 'F'){
    echo "<br> Pode se aposentar... -> $sexo";
} elseif($idade >= 65 && $sexo === 'M'){
    echo "<br> Pode se aposentar... -> $sexo";
}  else{
    echo '<br> ... trabalhar um pouco...';
}

   

</div>


<marquee> "Estudando PHP7 pela Cod3r..."</marquee>
