<div class="titulo"> <center> <u>Valor vs Referência  </u></center>  </div>
<?php 
  echo "<p> Atribuição por valor:  </p>";
 $variavel = 'Valor inicial';
 echo'<br>'.$variavel;

  $variavel = $variavel;
  echo "<br> $variavel";
  $variavelvalor = 'novo valor';
  echo '<br>'.$variavelvalor;
  echo "<p> Atribuição por referência:  </p>";
  $variavelReferencia = & $variavel;
  echo $variavelReferencia;
  $variavelReferencia =  'mesma referencia';
  echo "<br> $variavel , $variavelReferencia ";

?>
<br>
 <br>
<div> Por trás do PHP </div>
<div>
echo "<p> Atribuição por valor:  </p>";
 $variavel = 'Valor inicial'; <br>
 echo'<br>'.$variavel; <br>

  $variavel = $variavel; <br>
  echo "<br> $variavel";
  $variavelvalor = 'novo valor'; <br>
  echo '<br>'.$variavelvalor; <br>
  echo "<p> Atribuição por referência:  </p>"; <br>
  $variavelReferencia = & $variavel; <br> <br>
  echo $variavelReferencia; <br>
  $variavelReferencia =  'mesma referencia'; <br>
  echo "<br> $variavel , $variavelReferencia "; <br>

</div>
<marquee> "Estudando PHP7 pela Cod3r..."</marquee>