<div class="titulo"> <center> <u>Desafio e Resposta Recursividade </u></center></div>

<div>
    <p1> Desafio e Resposta Recursividade</p1>
    <h2>
        <p>Transcrição: </p> <br>
        Pensar na sala mostrar para vocês o desafio da recursividade é um desafio relacionado à função que tem

recursividade.

Eu vou apresentar o desafio na sala e na próxima logo a resposta ao clicar com o botão direito.

Nós vamos criar aqui o desafio da recursão.

O desafio da recursividade tanto faz.

Vou colocar aqui dividido.

Então desafio recursão e eu vou colocar também mais links aqui no nosso nosso menu que vai apontar para

esse arquivo que é o desafio da recursão o coloca a caminho do título.

Desafio recursão salvando hacking voltando para o nosso arquivo.

Desafio execução.
<br>



    </h2>
    <h3> Resposta em baixo: </h3>
</div>
<hr>
<?php 
/*
 $array = [1, 2,[3, 4, 5], 6, [7, [8, 9]], 10];
 > 1
 > 2
 >> 3
 >> 4
 > 6
 >> 7
 >>> 8
 >>> 9
 > 10
*/
$array = [1, 2,[3, 4, 5], 6, [7, [8, 9]], 10];
function imprimirArray($array, $nivel = '>') {
    foreach($array as  $elemento){
        if(is_array($elemento)) {
            imprimirArray($elemento, $nivel . $nivel[0]);
        } else{
            echo "$nivel  $elemento <br>";
        }
    }
}
imprimirArray($array);
imprimirArray($array, '#');



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
 /*
 $array = [1, 2,[3, 4, 5], 6, [7, [8, 9]], 10];
 > 1
 > 2
 >> 3
 >> 4
 > 6
 >> 7
 >>> 8
 >>> 9
 > 10
*/
$array = [1, 2,[3, 4, 5], 6, [7, [8, 9]], 10];
function imprimirArray($array, $nivel = '>') {
    foreach($array as  $elemento){
        if(is_array($elemento)) {
            imprimirArray($elemento, $nivel . $nivel[0]);
        } else{
            echo "$nivel  $elemento <br>";
        }
    }
}
imprimirArray($array);
imprimirArray($array, '#');


 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>