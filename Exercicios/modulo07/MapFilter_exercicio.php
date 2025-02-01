<div class="titulo"> <center> <u> Map e Filter - Exercicio </u></center></div>

<div>
    <p1> Map e Filter - Exercicio  </p1>
    <h2>
    <p>Transcrição: </p> <br>
    Agora que a gente vê a teoria na aula passada nós vamos aplicar na prática o uso de Mac.

Ele filtra inicialmente de vai para aplicá lo em função vou fazer implementar para vocês uma forma mais

manual de fazer o mapeamento de uma rede para outro dispositivo e usar um Mac. <br>

E finalmente nós vamos na sala também aplicar o filtro pra vocês entenderem a lógica né.

Como você pode passar uma função para outra função e como isso pode te ajudar na prática é esse o objetivo

de.
    </h2>
    <h3> Resposta em baixo: </h3>
</div>
<hr>
<?php 
 $notas = [5.8,  7.3,  9.8,  6.7];
 $notasFinais =[];
 foreach($notas as $nota){
    $notasFinais1[] = round($nota);
 } 
 print_r($notasFinais1);
 echo '<br>';
 // $notasFinais2 = array_map(round, $nota);
// deu erro no "round"
// print_r($notasFinais2);
$apenasOsAprovados1 = [];
 foreach($notas as $nota){
    if($nota >= 7){
        $apenasOsAprovados1[]= $nota;
    }
 }
 print_r($apenasOsAprovados1);
 // função -> Filter
 function aprovados($nota) {
    return $nota >= 7;
 };
 echo '<br>';
 $apenasOsAprovados2 = array_filter($notas, //aprovados//
 );
 print_r($apenasOsAprovados2);
function calculoLegal($nota) {
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;

};
//$notasFinais3 = array_map(calculoLegal, $nota); 
print_r($notasFinais3)


?>
<hr>
<style>
    hr {
        margin-bottom: 0px;
    }
    p {
        background-color: aqua;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        
    }
    .p1{
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
      font-size: 1.9rem;
    }
    .p2 {
        font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
      font-size: 1.5rem;


    }
    [center] {
       display: flex;
       justify-content: center;
    }
    h2{
        font-weight: 200;
        font-family:'Courier New', Courier, monospace;
        font-size: 1.3rem;
    }
</style>
<br>

<marquee> Daqui veremos os códigos em PHP...  </marquee>
<br>
<div><p>  Por trás do PHP</p></div> <br>
 <div>

 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>