<div class="titulo"> <center> <u>  Includes Vs Require </u></center></div>

<div>
    <p1> Includes _ Includes Vs Require  </p1>
    <h2>
    <p>Transcrição: </p> <br>
    Pessoal nesse exercício agora quero dizer os segundos assisto o capítulo mas vamos mostrar se eles usam

inclusive dentro de uma função ou sei se dentro de uma função.

Por exemplo somo aqui dentro.

Pessoal além do include tem outra função que a função é quais as duas funções são muito parecidas na

verdade o que vai mudar.

Como a HP lida com os eventuais erros que essa função pode gerar.

O principal erro é quando você tenta carregar um arquivo e esse arquivo não está presente digamos assim

então o include ele vai gerar uma advertência se um arquivo estiver inexistente.

Já o Equador como o próprio nome diz não é requerido.

Ele vai gerar um erro fatal caso um arquivo que você esteja tentando carregar não esteja presente.

Via de regra você vai querer que a sua aplicação para de funcionar caso você esteja referenciando um

arquivo que não existe. </h2>
<h3>Resultado será:</h3> 
<hr>
<?php 
    ini_set('display_errors', 1);
 echo "Usando o include com arquivo inexistente...com includes:<br>";
    include('arquivo_inexistente.php');
    echo "Usando o include com arquivo inexistente...com require:<br>";
    require('arquivo_inexistente.php');
    echo "Não achou o arquivo... neneeeee <br>";



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
 ini_set('display_errors', 1);
 echo "Usando o include com arquivo inexistente...com includes:<br>";
    include('arquivo_inexistente.php');
    echo "Usando o include com arquivo inexistente...com require:<br>";
    require('arquivo_inexistente.php');
    echo "Não achou o arquivo... neneeeee <br>";
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>