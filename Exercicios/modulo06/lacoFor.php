<div class="titulo"> <center> <u> Laço For </u></center></div>
<div>
    <p1> For:  </p1>
    <h2>
        Explica passa a passo o exercicio sobre For : 
    </h2>
</div>
<hr>
<?php
echo"<p1> primeiro exemplo: </p1> <br>";
for($cont =1; $cont <= 5; $cont++) {
 echo "$cont <br>";

}
echo'<br>';
echo"<p1> segundo exemplo: </p1> <br>";
for(;$cont <= 10; $cont++ ) {
    echo "$cont <br>";
}
 echo"<br> ";
 echo"<p1> terceiro exemplo: </p1> <br>";
 for(;$cont <= 15; $cont++ ) {
    echo "$cont <br>";
 }
 echo "<br>";
 echo"<p1> quarto exemplo: </p1> <br>";
  $array = [1 => 'domingo','segunda','terça','quarta','quinta','sexta','sabado'];
  print_r($array);
  echo'<br>';
  for($i = 1; $i < count($array); $i++ ) {
      echo "{$array[$i]} <br>";
  };
echo "<br>";
echo"<p1> quinto exemplo: </p1> <br>";
 $matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
 ];
  for($i = 0; $i < count($matrix); $i++ ) {
     
       echo "<br> $matrix[$i]";
    for($j = 0; $j < count($matrix[$i]); $j++ ) {

        echo " {$matrix[$i] [$j]}";
    }
    echo "<br>";
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
 echo"<p1> primeiro exemplo: </p1> <br>";
for($cont =1; $cont <= 5; $cont++) {
 echo "$cont <br>";

}
echo'<br>';
echo"<p1> segundo exemplo: </p1> <br>";
for(;$cont <= 10; $cont++ ) {
    echo "$cont <br>";
}
 echo"<br> ";
 echo"<p1> terceiro exemplo: </p1> <br>";
 for(;$cont <= 15; $cont++ ) {
    echo "$cont <br>";
 }
 echo "<br>";
 echo"<p1> quarto exemplo: </p1> <br>";
  $array = [1 => 'domingo','segunda','terça','quarta','quinta','sexta','sabado'];
  print_r($array);
  echo'<br>';
  for($i = 1; $i < count($array); $i++ ) {
      echo "{$array[$i]} <br>";
  };
echo "<br>";
echo"<p1> quinto exemplo: </p1> <br>";
 $matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
 ];
  for($i = 0; $i < count($matrix); $i++ ) {
     
       echo "<br> $matrix[$i]";
    for($j = 0; $j < count($matrix[$i]); $j++ ) {

        echo " {$matrix[$i] [$j]}";
    }
    echo "<br>";
  }

 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>