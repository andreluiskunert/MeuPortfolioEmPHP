<div class="titulo"> <center> <u> Função em Includes </u></center></div>

<div>
    <p1> Includes Função </p1>
    <h2>
    <p>Transcrição: </p> <br>
    Pessoal nesse exercício agora quero dizer os segundos assisto o capítulo mas vamos mostrar se eles usam

inclusive dentro de uma função ou sei se dentro de uma função.

Por exemplo somo aqui dentro.

Chamar um include.  <br>
Colocar um iPod aqui dentro é exatamente o que quero mostrar como a gente vai se comportar o coelho

o que é que vai acontecer se ele incluiu aquilo a partir de dentro de uma função melhor dizendo estão

lá trás vamos criar um novo arquivo o nome do arquivo será include lá em função do PHP.

Nós vamos definir o nosso título aqui Dive título vou colocar aqui inclusive função. <br>

<h3>Resultado será:</h3>
<hr>
<?php 
 echo 'Carregando: include_funcao.php <br>';
  function carregarArquivo(){
        include('include_funcao.php');
        echo $variavel . '<br>';
        echo soma(2, 5) . '!<br>';
  }
   echo $variavel . '<br>';
   echo 'Novamente no arquivo include_funcao.php <br>';
   // echo soma(1, 8) . '! <br>'; função não está disponível;
    // carregarArquivo(); Deu erro também; 
   // echo "variavel = {$variavel}";
    //var_dump($variavel);
  //  echo '<br>'. soma (3, 8);;





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
 echo 'Carregando: include_funcao.php <br>';
  function carregarArquivo(){
        include('include_funcao.php');
        echo $variavel . '<br>';
        echo soma(2, 5) . '!<br>';
  }
   echo $variavel . '<br>';
   echo 'Novamente no arquivo include_funcao.php <br>';
   // echo soma(1, 8) . '! <br>'; função não está disponível;
    // carregarArquivo(); Deu erro também; 
   // echo "variavel = {$variavel}";
    //var_dump($variavel);
  //  echo '<br>'. soma (3, 8);;


 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>