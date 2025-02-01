<div class="titulo"> <center> <u>  Array como mapas: </u></center> </div>
<?php
$dados = array (
    "idade"=> 25,
    "cor"=> "verde",
    "peso"=> 49.8,
    );
print_r($dados);
echo '<br>';
var_dump($dados[0]);
echo '<br>'.$dados ["idade"];
echo '<br>'. $dados ["cor"];
echo "<br>". $dados ["peso"];
echo "<br>";
var_dump($dados["Outras informações.."]);
//
$lista =  array(
    "a",
    "cinco" => "b",
    8 => "d",
    "e",
    6=> "f",
    "g",
    8=> "h",
);
print_r($lista);
echo "<br>";
$lista[] = "i";
echo '<br>';
print_r($lista);
echo '<br>';
$lista['vinte'] = 'j';
print_r($lista);
echo '<br>';
$lista[false] = 'Tentei indexar com false';
print_r($lista);
echo '<br>';
$lista[true] = 'Tentei indexar com true ou verdadeiro';
print_r($lista);
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
    p1{
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
    }
  
</style>
<br>
<br>
<marquee> Daqui veremos os códigos em PHP...  </marquee>
<br>
<div><p>  Por trás do PHP</p></div> <br>
<div>
$dados = array ( <br>
    "idade"=> 25, <br>
    "cor"=> "verde", <br>
    "peso"=> 49.8, <br>
    ); <br>
print_r($dados); <br>
echo '<br>';
var_dump($dados[0]);
echo '<br>'.$dados ["idade"]; <br>
echo '<br>'. $dados ["cor"]; <br>
echo "<br>". $dados ["peso"]; <br>
echo "<br>";
var_dump($dados["Outras informações.."]); <br>
//
$lista =  array(  <br>
    "a", <br> 
    "cinco" => "b",  <br>
    "e", <br>
    6=> "f",  <br>
    "g", <br>
    8=> "h", <br>
); <br>
print_r($lista); 
echo "<br>";
$lista[] = "i";
echo '<br>';
print_r($lista);
echo '<br>';
$lista['vinte'] = 'j';
print_r($lista);
echo '<br>';
$lista[false] = 'Tentei indexar com false';
print_r($lista);
echo '<br>';
$lista[true] = 'Tentei indexar com true ou verdadeiro'; <br>
print_r($lista);
</div>
<br>
<marquee> "Estudando PHP7 pela Cod3r..."</marquee>