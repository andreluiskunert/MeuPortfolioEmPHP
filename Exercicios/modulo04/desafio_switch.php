<div class="titulo"> <center> <u> Desafio Switch </u></center></div>
<p1> § Formulário: </p1> <br>

  <p1> Conversor de Distancia e Temperatura :  </p1>
  <br>
 <form action="#" method="post">
    <input type="text" name="param">
        <select name="conversao" id="conversao">
            <option value="km-milha"> KM > Milha </option>
               <option value="milha-km">Milha > KM</option>
                     <option value="metro-km"> Metro >  KM </option>
                        <option value="km-metro"> KM > Metro  </option>
                            <option value="cel-fah"> Celsius > Fahrenheit  </option>
                               <option value="fah-cel">Fahreneit > Celsius </option>
                            
     </select> 
     <button>Calcular</button>
 </form>
 
<?php
 /* echo $_POST['param'] .'<br>';
 echo $_POST['conversao'] .'<br>'; */
 
 const FATOR_KM_MILHA = 0.621371;
 const FATOR_METRO_KM = 1000;
 // 2ª desafio Switch 
 const FATOR_CEL_FAH = 1.8;

 $param = $_POST['param'] ?? 0;
  switch ($_POST['conversao']) {
    case'km-milha':
        $distancia =  $param * FATOR_KM_MILHA;
        $mensagem = "$param km(s) = $distancia Milha(s)";
        break;
        case'milha-km':
            $distancia = $param / FATOR_KM_MILHA;
            $mensagem = " $param  milha(s) = $distancia KM(s)";
            break;
        case'metro-km':
            $distancia = $param / FATOR_METRO_KM;
            $mensagem = " $param metro = $distancia KM(s)";
            break;
        case'km-metro':
            $distancia = $param * FATOR_METRO_KM;
            $mensagem = " $param km(s) = $distancia Metro(s)";
            break;
        case 'cel-fah':
            $conversao = $param * FATOR_CEL_FAH + 32;
            $mensagem = "{$param}º Celsius = {$conversao}º ";
            break;
        case 'fah-cel':
            $conversao = ($param - 32) / FATOR_CEL_FAH;
            $mensagem = "{$param}º Fahrenheit {$conversao}º Celsius";
            break;
        default:
        $mensagem = "Nenhum valor calculado!!!";

      }
      echo "<p1>$mensagem</p1>";

   
?>
<style>
    hr {
        margin-bottom: 0px;
    }
    p {
        background-color: aqua;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 400;
        
    }
    p1 {
       
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 400;
        font-size: 30px;

    }
    form > * {
        font-size: 1.8rem;
    }
</style>
<br>
<br>
<marquee> Daqui veremos os códigos em PHP...  </marquee>
<br>
<div><p>  Por trás do PHP</p></div>
<div>
/* echo $_POST['param'] .'<br>';
 echo $_POST['conversao'] .'<br>'; */
 
 const FATOR_KM_MILHA = 0.621371; <br>
 const FATOR_METRO_KM = 1000; <br>
 $param = $_POST['param'] ?? 0; <br>
  switch ($_POST['conversao']) {
    case'km-milha': <br>
        $distancia =  $param * FATOR_KM_MILHA;
        $mensagem = "$param km(s) = $distancia Milha(s)";
        break; <br>
        case'milha-km':
            $distancia = $param / FATOR_KM_MILHA;
            $mensagem = " $param  milha(s) = $distancia KM(s)";
            break; <br>
        case'metro-km':
            $distancia = $param / FATOR_METRO_KM;
            $mensagem = " $param metro = $distancia KM(s)";
            break; <br>
        case'km-metro':
            $distancia = $param * FATOR_METRO_KM;
            $mensagem = " $param km(s) = $distancia Metro(s)";
            break; <br>
            case 'cel-fah': <br>
            $conversao = $param * FATOR_CEL_FAH + 32; <br>
            $mensagem = "{$param}º Celsius = {$conversao}º "; <br>
            break; <br>
        case 'fah-cel': <br>
            $conversao = ($param - 32) / FATOR_CEL_FAH; <br>
            $mensagem = "{$param}º Fahrenheit {$conversao}º Celsius"; <br>
            break <br>
        default: <br>

      } <br>
      echo "<p1>$mensagem</p1>"; <br>

</div>
<marquee> "Estudando PHP7 pela Cod3r..."</marquee>
