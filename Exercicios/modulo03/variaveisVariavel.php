<div class="titulo"> <center> <u> Variaveis Variavel </u></center>  </div>
<?php
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a}"; 
echo '<br>';
echo "$a , {$$a} ,${$a} , $valorA";
echo "<br>";
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!';
echo "$epa , {$opa} , {$$$epa}";



?>
<br>
 <br>
<div> Por trás do PHP </div>
<div>
$a = 'valorA'; <br>
$$a = 'valorAA'; <br>
echo "$a {$$a}";  <br>
echo '<br>';
echo "$a , {$$a} ,${$a} , $valorA"; <br>
echo "<br>";
$epa = 'opa'; <br>
$opa = 'vish'; <br>
$vish = 'eita!!!'; <br>
echo "$epa , {$opa} , {$$$epa}"; <br>
</div>
<marquee> "Estudando PHP7 pela Cod3r..."</marquee>