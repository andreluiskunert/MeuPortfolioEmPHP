<div class="titulo"> <center>  <u>Switch </u></center></div>

<?php
 $categoria = '';
 $preco = 0.0;
  $carro = '';
  if ($categoria == 'luxo') {
    $carro = 'Mercedes';
    $preco = 250000000;
  } else if($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000000;
  } elseif($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 5500000;
  } else{
    $carro = 'Mobi';
    $preco = 33000;
  } 

  $precoFormatado = number_format($preco, 2, ',', '.' );
  echo "<p1> Você poderá compra carro: $carro; <br> Com preço: R$  $precoFormatado .</p>";
 //  descansa um pouco.... 
 // borar codando ... 
 echo '<hr> ';
 $categoria = '????';
 switch (strtolower($categoria)) {
  case 'luxo':
    $carro = 'Mercedes';
    $preco =  250000000;
    // break;
   case 'SUV':
    case 'suv':
    case 'suv basico';
    $carro = 'Bandeirantes';
    $preco = 80000000;
    // break;
    case 'Sedan':
      $carro = 'Etios';
    $preco = 5500000;
  //  break;
    default :
    $carro = 'Mobi';
    $preco = 33000;
  //  break ;


 }
 $precoFormatado = number_format($preco, 2, ',', '.' );
  echo "<p1>voce poderá comprar um  Carro: $carro; <br> Com  preço:R$  $precoFormatado .</p>";

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
    }
  
</style>
<br>
<br>
<marquee> Daqui veremos os códigos em PHP...  </marquee>
<br>
<div><p>  Por trás do PHP</p></div> <br>
<div>

$categoria = ''; <br>
 $preco = 0.0; <br>
  $carro = ''; <br>
  if ($categoria == 'luxo') { <br>
    $carro = 'Mercedes'; <br>
    $preco = 250000000; <br>
  } else if($categoria === 'SUV') { <br>
    $carro = 'Renegade'; <br>
    $preco = 80000000; <br>
  } elseif($categoria === 'Sedan') { <br>
    $carro = 'Etios'; <br>
    $preco = 5500000; <br>
  } else{ <br>
    $carro = 'Mobi'; <br>
    $preco = 33000; <br>
  } 

  $precoFormatado = number_format($preco, 2, ',', '.' ); <br>
  echo "<p1> Você poderá compra carro: $carro; <br> Com preço: R$  $precoFormatado .</p>";
 //  descansa um pouco.... 
 // borar codando ... 
 echo '<hr> ';
 $categoria = '????'; <br>
 switch (strtolower($categoria)) { <br>
  case 'luxo': <br>
    $carro = 'Mercedes'; <br>
    $preco =  250000000; <br>
    // break;
   case 'SUV': <br>
    case 'suv': <br>
    case 'suv basico'; <br>
    $carro = 'Bandeirantes'; <br>
    $preco = 80000000; <br>
    // break; <br> 
    case 'Sedan': <br>
      $carro = 'Etios'; <br>
    $preco = 5500000; <br>
  //  break; <br>
    default : <br> 
    $carro = 'Mobi'; <br>
    $preco = 33000; <br>
  //  break ; <br>


 }
 $precoFormatado = number_format($preco, 2, ',', '.' ); <br>
  echo "<p1>voce poderá comprar um  Carro: $carro; <br> Com  preço:R$  $precoFormatado .</p>"; 

</div>
<br>
<marquee> "Estudando PHP7 pela Cod3r..."</marquee>