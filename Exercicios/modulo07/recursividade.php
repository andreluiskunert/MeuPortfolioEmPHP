<div class="titulo"> <center> <u> Recursividade </u></center></div>

<div>
    <p1> Recursividade </p1>
    <h2>
        <p>Transcrição: </p> <br>
    Pessoal nesse exemplo nós vamos entender e a recursividade em nós vamos implementar o problema recursivo

o primeiro quer explicar pra você o que é recursividade e as duas coisas importantes pra você ter recursividade

que é a condição de parada e a função CHAMAR ELA MESMO.

Achar pra vocês aqui vou criar um arquivo e esse arquivo não será usado por enquanto só pra explicar

pra vocês o que dá um exemplo de execução é o problema regressivo e depois eu vou mostrar também o exemplo

que nós vamos implementar.

Um exemplo clássico de recursividade é o fatorial e eu não vou implementar o fatorial e serve de desafio

pra vocês.
<br>



    </h2>
    <h3> Resposta em baixo: </h3>
</div>
<hr>
<?php 
function SomaUmAte($numero){
    $soma = 0;
    for($i = 1; $i <= $numero; $i++ ) {
        $soma += $i;
    } 
    return $soma;
}
 echo SomaUmAte(150). '<br>';
 
 function somaRecursivaUmAte($numero){
    // Condição de Parada: 
    if($numero ===1){
        return 1;
    } else{
         return $numero + somaRecursivaUmAte($numero -1); 
    }
  

 }
 echo somaRecursivaUmAte(300) . '<br>';
// 
function somaRecursivaEconomica($numero){
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);

}
echo somaRecursivaEconomica(450) . '<br>';
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