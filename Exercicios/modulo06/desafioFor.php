<div class="titulo"> <center> <u> Desafio Laço For </u></center></div>
<div>
    <p1> For:  </p1>
    <h2>
        Explica passa a passo o exercicio sobre  Desafio Laço For : 
    </h2>
    <!--
    usar o for:
    #
    ##
    ###
    #####
    #######
    01) Pode usar incremento $i++;
    02) Não Pode Usar incremento $i++;

     --->
</div>
<hr>
<?php
echo 'impressão 01 <br>';
$impressao = '';
 for($cont = 1;$cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}
echo 'impressão 02 <br>';
for($impressao2 ='#'; $impressao2 !== '######'; $impressao2 .= '#') {
 echo"$impressao2<br>";

}

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
      font-size: 1.7rem;
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
 echo 'impressão 01 <br>';
$impressao = '';
 for($cont = 1;$cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}
echo 'impressão 02 <br>';
for($impressao2 ='#'; $impressao2 !== '######'; $impressao2 .= '#') {
 echo"$impressao2<br>";

}
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>