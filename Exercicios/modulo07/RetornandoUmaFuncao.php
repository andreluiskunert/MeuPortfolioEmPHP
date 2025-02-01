<div class="titulo"> <center> <u> Retronando Uma Função </u></center></div>

<div>
    <p1> Retronando Uma Função</p1>
    <h2>
        <p>Transcrição: </p> <br>
        Nesse exemplo vou mostrar para vocês como uma função pode retornar uma outra função certo.

E aí durante a qual alguns conceitos algumas questões interessantes sobre esse tipo de recurso estão...
<br>



    </h2>
    <h3> Resposta em baixo: </h3>
</div>
<hr>
<?php 
// algoritmo (30 segundos)
 function soma($a) {
    return function ($b) use ($a) {
        return $a + $b; // 03 segundos
    };
 }
 echo soma(14) (3);
 //
 $doisMais = soma(3);
 echo '<br>', $doisMais(10);
 echo '<br>', $doisMais(18);




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