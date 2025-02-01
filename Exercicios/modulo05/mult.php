<div class="titulo"> <center> <u>  Multidimensionais </u></center> </div>
<?php
   $dados = [ ["nome"=> "André Luis",
    "idade"=> 42,
    "Profissiao"=> "Desenvolvedor Full Stack"
] ,
 [
    "nome"=> "Gabriel",
    "idade"=> 25,
    "Profissao"=> "Desgner Gráfico"
 ]
    
 ];
 print_r($dados);
 echo '<br>'. $dados[0]['idade'];
 echo '<br>'. $dados[1]['idade'];
//
$dados[]= [
    "nome"=> "Jean Cardoso",
    "idade"=> 27,
     "profissiao" => "Arquiteto"
];
 echo '<br>';
 print_r($dados);
 echo '<br>'. $dados[2]['idade'];
 $dados[2] ["Formatado pela "]= "MaterDei";
 echo '<br>';
 print_r($dados[2]);
 unset($dados[1]);
 echo '<br>';
 print_r($dados[1]);
 var_dump($dados[1000]);

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
    [center] {
       display: flex;
       justify-content: center;
    }
</style>
<br>
<marquee> Daqui veremos os códigos em PHP...  </marquee>
<br>
<div><p>  Por trás do PHP</p></div> <br>
 <div>
 $dados = [ ["nome"=> "André Luis",
    "idade"=> 42,
    "Profissiao"=> "Desenvolvedor Full Stack"
] ,
 [
    "nome"=> "Gabriel",
    "idade"=> 25,
    "Profissao"=> "Desgner Gráfico"
 ]
    
 ];
 print_r($dados);
 echo '<br>'. $dados[0]['idade'];
 echo '<br>'. $dados[1]['idade'];
//
$dados[]= [
    "nome"=> "Jean Cardoso",
    "idade"=> 27,
     "profissiao" => "Arquiteto"
];
 echo '<br>';
 print_r($dados);
 echo '<br>'. $dados[2]['idade'];
 $dados[2] ["Formatado pela "]= "MaterDei";
 echo '<br>';
 print_r($dados[2]);
 unset($dados[1]);
 echo '<br>';
 print_r($dados[1]);
 var_dump($dados[1000]);
 </div>
<marquee> "Estudando PHP7 pela Cod3r..."</marquee>