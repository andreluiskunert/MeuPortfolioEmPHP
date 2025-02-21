


<div class="titulo"> <center> <u> Desafio do módulo </u></center></div>

<div>
    <p1> Desafio </p1>
    <h2> Transcrição  </h2>

<h4> 
Agora nós vamos fazer o desafio proposto na aula passada.

E como eu falei pra você.

De certa forma deu algumas dicas assim falando sobre o uso de para isso essa é importante você usar

memes para isso e nesse desafio porque como nós temos uma função com o mesmo nome que vai conflita com

a função que já está na pedido da HP.

Mas vamos precisar criar um meme especial para que a partir desse meio a gente consiga criar a função

com o mesmo nome.
    </h4>
    <hr>

<?php 
 require_once 'DesafioDiv.php';
 use function \Aritmetica\intdiv;

 try {
    // terça-feira, 04/02/2025
     echo  intdiv(8, 3) .'<br>';
 } catch(\Aritmetica\NaoInteiroException $e)
 {
     echo'  § Não é um número inteiro...<br>';

 }
 try {
    echo intdiv(8, 0).'<br>';
 } catch(DivisionByZeroError $e){
    echo '§ Divisão por Zer0 <br>';
 }
 echo intdiv(8, 2) . '<br>';
 echo \intdiv(8, 2) . '<br>';
    
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


<br>
<div><p>  Por trás do PHP</p></div> <br>
 <div>
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>