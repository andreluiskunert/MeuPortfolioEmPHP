<div class="titulo"> <center> <u>  Operacões com Array: </u></center> </div>
<?php
$dados1 = [
    "nome" => "André Luis",
    "idade"=> 42
     ];
    $dados2 = [
   "naturalidade" => "Foz dp Jordão",
  
    ];
    $dados2["profissao" ] = "Desenvolvedor Full Stack" ;
    $dadosCompletos = $dados1 + $dados2;
    print_r($dadosCompletos);   
    echo'<br> Próximo Exemplo:';
    echo'<br>'.is_array($dadosCompletos);
    echo '<br>'.count($dadosCompletos);
    echo '<br>';
    $indice = array_rand($dadosCompletos);  
    echo"$indice = $dadosCompletos[$indice]";
    echo"<br>";
    echo "{$dadosCompletos['idade']}";
    echo "<br>";
    echo "{$dadosCompletos ['idade']}";
    unset($dadosCompletos["nome"]);   
    echo '<br>';
    print_r($dadosCompletos);
    unset($dadosCompletos);
    echo '<br>';
    var_dump($dadosCompletos);
    echo '<br>';
    $impares = [1, 3, 5, 7, 9];
    $pares = [0, 2, 4, 6, 8];
    $decimas = $impares + $pares ;
    print_r($decimas);
    echo '<br>';
    $decimas = array_merge($pares, $impares);
    echo '<br>';
    print_r($decimas);
    sort($decimas);
    echo'<br>';
    print_r($decimas);

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
$dados1 = [
    "nome" => "André Luis", <br>
    "idade"=> 42 <br>
     ]; <br>
    $dados2 = [ <br>
   "naturalidade" => "Foz dp Jordão", <br>
    ];
    $dados2["profissao" ] = "Desenvolvedor Full Stack" ; <br>
    $dadosCompletos = $dados1 + $dados2; <br>
    print_r($dadosCompletos);   
    echo'<br> Próximo Exemplo:';
    echo'<br>'.is_array($dadosCompletos);
    echo '<br>'.count($dadosCompletos);
    echo '<br>';
    $indice = array_rand($dadosCompletos);  
    echo"$indice = $dadosCompletos[$indice]";
    echo"<br>";
    echo "{$dadosCompletos['idade']}";
    echo "<br>";
    echo "{$dadosCompletos ['idade']}";
    unset($dadosCompletos["nome"]);   
    echo '<br>';
    print_r($dadosCompletos);
    unset($dadosCompletos);
    echo '<br>';
    var_dump($dadosCompletos);
    echo '<br>';
    $impares = [1, 3, 5, 7, 9];
    $pares = [0, 2, 4, 6, 8];
    $decimas = $impares + $pares ;
    print_r($decimas);
    echo '<br>';
    $decimas = array_merge($pares, $impares);
    echo '<br>';
    print_r($decimas);
    sort($decimas);
    echo'<br>';
    print_r($decimas);
</div>
<br>
<marquee> "Estudando PHP7 pela Cod3r..."</marquee>