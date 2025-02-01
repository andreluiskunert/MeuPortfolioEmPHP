<div class="titulo"> <center> <u> Introdução</u></center></div>

<div>
    <p1> Includes </p1>
    <h2>
    <p>Transcrição: </p> <br>
    Pessoal estamos começando mais um módulo do nosso curso nesse módulo lá vamos trabalhar com múltiplos

arquivos ou seja um arquivo referenciando outro arquivo.

A gente quer ter o uso de fato na verdade se a gente quiser ter uma aplicação de fato esses arquivos

precisam interagem entre si. <br>


Você não dá para criar aplicações composta de múltiplos arquivos e cada arquivo não conhece o conteúdo

de outro arquivo você não consegue usar conteúdo de outros arquivos imagine que você define uma classe

em um arquivo. <br>

Você quer usar essa classe em múltiplos arquivos do seu sistema então para isso vai trabalhar com a

função include com a função em quais ele então gente vai ver.

Alguns aspectos interessantes do PHP para que a gente possa começar a integrar os arquivos mesmo quando

você vai montar uma página HTML com PHP.

Você vai querer quebrar por exemplo a sua página em múltiplas partes.

Quero ter um arquivo que é responsável por gerar apenas o cabeçalho da página. <br>

Eu quero ter um arquivo que é responsável por gerar apenas o puta e você quer numa certa forma usar

isso a gente já usou isso lá no comecinho quando a gente trabalhou com exercício usando o iCloud.

Agora sim nesse capítulo nós vamos ver o iCloud de uma forma mais aprofundada fazer exemplos e mostrar

para vocês os recursos por trás não apenas Likud mas outros mecanismos que a gente tem APP pra fazer

essa integração entre os arquivos então fique por aqui na Palestina lá a gente começa fazer os nossos

exercícios criar uma nova parte e preparar tudo pra mais um capítulo do nosso curso de PHP.
  
<hr>
<?php 
echo "<h1> estou em outra pagina php do include...</h1> <br>";
include('includesArquivos.php');
echo "<br>";    
include('includesArquivos.php');   

echo soma(3, 8);
echo " O conteudo da variavel é {$variavel}<br>";
 

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
 apenas teoria.. 
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>