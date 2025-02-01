<div class="titulo"> <center> <u> Constantes </u></center>  </div>
<?php 
 define('TAXA_DE_JUROS', 5.9);
 echo TAXA_DE_JUROS;
 echo '<br>' .TAXA_DE_JUROS . '!';
 // TAXA_DE_JUROS = 2.5; -> ERROR
 //echo TAXA_DE_JUROS . 'ERROR';
const NOVA_TAXA = 2.5;
echo '<br>'.NOVA_TAXA;
$valorVariavel = 2.8;
//const NOVISSIMA_TAXA = $valorVariavel; Deu erro
//define(' NOVISSIMA_TAXA', $valorVariavel);
const  NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>'.NOVISSIMA_TAXA;
//
echo '<br>'.PHP_VERSION;
echo '<br>'.PHP_INT_MAX;
echo '<br>'.PHP_INT_MIN;
echo '<br>'.__LINE__;
echo '<br>'.__FILE__;
echo '<br>'.__DIR__
?>
<br>
 <br>
<div> Por trás do PHP </div>
<div>
define('TAXA_DE_JUROS', 5.9); <br>
 echo '<br>' .TAXA_DE_JUROS . '!';
 // TAXA_DE_JUROS = 2.5; -> ERROR <br>
 //echo TAXA_DE_JUROS . 'ERROR'; <br>
const NOVA_TAXA = 2.5; <br>
echo '<br>'.NOVA_TAXA;
$valorVariavel = 2.8; <br>
//const NOVISSIMA_TAXA = $valorVariavel; Deu erro <br>
//define(' NOVISSIMA_TAXA', $valorVariavel); <br>
const  NOVISSIMA_TAXA = 2.8 + 1.2; <br>
echo '<br>'.NOVISSIMA_TAXA;<br>
// <br>
echo '<br>'.PHP_VERSION;
echo '<br>'.PHP_INT_MAX;
echo '<br>'.PHP_INT_MIN;
echo '<br>'.__LINE__;
echo '<br>'.__FILE__;
echo '<br>'.__DIR__
</div>
<marquee> "Estudando PHP7 pela Cod3r..."</marquee>