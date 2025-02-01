<div class="titulo"> <center> <u> Desafio PI </u></center></div>
<?php
echo"<p> Desafio _1ª Parte: </p>";
echo pi();
$pi = 3.14;
//var_dump(pi($pi));
if ($pi == pi()) {
    echo "<br> Iguais...";
} else {
    echo "<br> Diferentes...";

}

//  Operador Relacional $piErrado = 2.8; para compara com o pi do php...
$piErrado = 2.8; 
echo'<hr>';
echo "<p>  Desafio_2ª Parte: </p>";
echo '<br>'. ($pi - pi());
echo '<br> '.($pi -$piErrado);
echo '<br>';
if($pi - pi() <= 0.01 ) {
    echo '<br> Praticamente iguais...';
}    
 //
 echo '<br> ';
 echo'<br> PI errado...';
 echo '<br>';
if($pi - $piErrado <= 0.01 ) {
    echo '<br> Praticamente iguais !!!';
} else {
     echo '<br> Valor errado!!! ';
}

   
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
</style>
<br>
<br>
<marquee> Daqui veremos os códigos em PHP...  </marquee>
<br>
<div><p>  Por trás do PHP</p></div>
<div>
echo"<p> Desafio _1ª Parte: </p>";
echo pi();
$pi = 3.14;
//var_dump(pi($pi));
if ($pi == pi()) {
    echo "<br> Iguais...";
} else {
    echo "<br> Diferentes...";

}

//  Operador Relacional $piErrado = 2.8; para compara com o pi do php...
$piErrado = 2.8; 
echo'<hr>';
echo "<p>  Desafio_2ª Parte: </p>";
echo '<br>'. ($pi - pi());
echo '<br> '.($pi -$piErrado);
echo '<br>';
if($pi - pi() <= 0.01 ) {
    echo '<br> Praticamente iguais...';
}    
 //
 echo '<br> ';
 echo'<br> PI errado...';
 echo '<br>';
if($pi - $piErrado <= 0.01 ) {
    echo '<br> Praticamente iguais !!!';
} else {
     echo '<br> Valor errado!!! ';
}


</div>
<marquee> "Estudando PHP7 pela Cod3r..."</marquee>
