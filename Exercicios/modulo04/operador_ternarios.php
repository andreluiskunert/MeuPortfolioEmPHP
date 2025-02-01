<div class="titulo"> <center>  <u>Operador Ternário </u></center></div>

<?php
$idade = 70;
$status;

if($idade >= 18){
    $status = "Maior de Idade";
} else {
    $status = "Menor de Idade";
}
echo "$status <br>";
$status = $idade >= 18 ? 'Maior de idade ' : 'Menor de idade';
echo "$status <br>";
$status = $idade >= 18 ? ($idade >= 65 ? 'Aposentado' : 'Maior de Idade') : 'Menor de Idade';
echo "$status <br>";
echo '<hr>';
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
$idade = 70; <br>
$status; <br>

if($idade >= 18){
    $status = "Maior de Idade"; <br>
} else {
    $status = "Menor de Idade"; <br>
}
echo "$status <br>";
$status = $idade >= 18 ? 'Maior de idade ' : 'Menor de idade'; <br>
echo "$status <br>";
$status = $idade >= 18 ? ($idade >= 65 ? 'Aposentado' : 'Maior de Idade') : 'Menor de Idade'; <br>
echo "$status <br>";
echo '<hr>';

</div>
<br>
<marquee> "Estudando PHP7 pela Cod3r..."</marquee>