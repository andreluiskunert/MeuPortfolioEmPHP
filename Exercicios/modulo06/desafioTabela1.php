<div class="titulo"> <center> <u> Desafio Tabela 1ªparte </u></center></div>
<div>
    <p1> Desafio:  </p1>
    <h2>
        Explica passa a passo o exercicio sobre  Desafio Tabela;
        dividindo em duas aulas;
    </h2>
  
</div>
<hr>
<?php
  echo "<h3>§ Essa tabela está sem formação:</h3> ";
  $matriz = [
     ['01', '02', '03', '04', '05'],
     ['06', '07', '08', '09', '10'],
     ['11', '12', '13', '14', '15'],
     ['16', '17', '18', '19', '20'],
  ];
   foreach($matriz as $linha ){
    foreach($linha as $valor) {
        echo "$valor";
    }
    echo "<br>";
   }
?>
<br>
 <h3>§ tabela com formatação: </h3>
<table> <!--- 2ª aulas   -->
    <?php
      foreach($matriz as $linha){
        echo '<tr>';
        foreach($linha as $valor) {
            echo "<td> $valor</td>";
        }
        echo '</tr>';
      }
    ?>
</table>
<h3>§ tabela fomatada 2ª parte:</h3>
<table>
<?php
 foreach($matriz as $index => $linha){
    $style = $index % 2 === 1 ? 'background-color: lightblue' :  '';
     echo "<tr style='{$style}'>";
      foreach($linha as $valor) {
        echo"<td> $valor </td>";
      }
      echo '</tr>';
 }
?>
</table>
<style>
       table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
       }
       table tr {
        border: 1px solid #444;
       }
       table td {
        padding: 10px 20px;
       }
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
  
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>