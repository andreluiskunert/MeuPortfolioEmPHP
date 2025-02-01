<?php
echo "<maquee> estou em outra pagina php do include...  </maquee>";
$variavel = "estou definindo uma variável";
if(!function_exists('soma')) {
   function soma($a, $b) {
       return $a + $b;
   }
}
?>