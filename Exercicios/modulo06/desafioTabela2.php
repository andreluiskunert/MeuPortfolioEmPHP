<div class="titulo"> <center> <u> Desafio Tabela 2ªparte</u></center></div>
<div>
    <p1> Desafio:  </p1>
    <h2>
        Explica passa a passo o exercicio sobre  Desafio Tabela;
        dividindo em duas aulas;
    </h2>
  
</div>
 <h3> 
     <p> Gerador de Tabelas...</p>
  <form action="#" method="post">
    <div>
      <label for="linhas"> Linhas</label>
      <input type="number" value= <?= $_POST['linhas']  ?? 10 ?> name="linhas" id="linhas">
    </div>
    <div>
       <label for="colunas"> Colunas </label>
    <input type="number"  value=  <?= $_POST['colunas']  ?? 10 ?>  name="colunas" id="colunas">
    </div>
    <button> Gerar Tabela </button>
     </form>
 </h3>
<hr>
<table>
  <?php
echo "<p1> Resultado :</p1> <br>";
/*  var_dump($_POST['linhas']);
 var_dump($_POST['colunas']); */
 $linhas = intval(($_POST['linhas']));
 $colunas = intval(($_POST['colunas']));
 /*  if(!$linhas) $linhas = 10;
  if(!$colunas) $colunas = 10; */
   $num = 1;
   for($i = 0; $i < $linhas; $i++) {
       echo "<tr>";
     for($j = 0; $j < $colunas; $j++) {
          echo "<td>$num </td>";
          $num++; 
     }
      echo "</tr>";
   }

 
?>
</table>

<br>
 <style>
      form * {
        font-size: 1.5rem;
      }
      form > div {
        margin-bottom: 10px;
      }
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
 echo "<p1> Resultado :</p1> <br>";
/*  var_dump($_POST['linhas']);
 var_dump($_POST['colunas']); */
 $linhas = intval(($_POST['linhas']));
 $colunas = intval(($_POST['colunas']));
 /*  if(!$linhas) $linhas = 10;
  if(!$colunas) $colunas = 10; */
   $num = 1;
   for($i = 0; $i < $linhas; $i++) {
       echo "<tr>";
     for($j = 0; $j < $colunas; $j++) {
          echo "<td>$num </td>";
          $num++; 
     }
      echo "</tr>";
   }

 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>