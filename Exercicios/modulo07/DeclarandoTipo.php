<div class="titulo"> <center> <u> Declarando Tipo </u></center></div>
<div>
    <p1> Declarando Tipo  </p1>
    <h2>
        Explica passa a passo o exercicio sobre  Declarando Tipo : 
    </h2>
</div>
<hr>
<?php 
function somar1($a, $b){
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}
echo '<p1> 1ª Exemplo </p1> <br>';
echo somar1(1, 2) .'<br>';
echo somar1(1.7, 2.5) .'<br>';
echo somar1(2.5, 2.9) .'<br>';
echo somar1(1, '4dois') .'<br>';
//
function somar2(int $a, int $b ){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo '<p2> 2ª Exemplo </p2> <br>';
echo somar2(1, 2) .'<br>';
echo somar2(1.7, 2.5) .'<br>';
echo somar2(2.5, 2.9) .'<br>';
//echo somar2(1, '4dois').'<br>'; NULL -> Anula o restante da Pagina
/// Amanhã Cedinho resolvo isso...
echo '<p2> 3ª Exemplo </p2> <br>';
function somar3($a, $b): int {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo somar3(1, 2) .'<br>';
echo somar3(1.7, 2.5) .'<br>';
echo somar3(2.5, 2.9) .'<br>';

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
      font-size: 1.7rem;
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
 function somar1($a, $b){
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}
echo '<p1> 1ª Exemplo </p1> <br>';
echo somar1(1, 2) .'<br>';
echo somar1(1.7, 2.5) .'<br>';
echo somar1(2.5, 2.9) .'<br>';
echo somar1(1, '4dois') .'<br>';
//
function somar2(int $a, int $b ){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo '<p2> 2ª Exemplo </p2> <br>';
echo somar2(1, 2) .'<br>';
echo somar2(1.7, 2.5) .'<br>';
echo somar2(2.5, 2.9) .'<br>';
//echo somar2(1, '4dois').'<br>'; NULL -> Anula o restante da Pagina
/// Amanhã Cedinho resolvo isso...
echo '<p2> 3ª Exemplo </p2> <br>';
function somar3($a, $b): int {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo somar3(1, 2) .'<br>';
echo somar3(1.7, 2.5) .'<br>';
echo somar3(2.5, 2.9) .'<br>';



 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>