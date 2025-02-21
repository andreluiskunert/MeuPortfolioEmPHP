
<div class="titulo"> <center> <u> Erros Personalizados </u></center></div>

<div>
    <p1> Erros Personalizados </p1>
    <h2>
    <p>Transcrição: </p> <br> <h4>
    Miniatura da aula
0:01 / 13:39
Transcrição

Agora mas vamos aprender como criar um erro personalizado nosso certo exige um robô classe troll ou

existe uma hierarquia.

Essa é uma hierarquia de herança ou seja sabichão era de robô. <br>

Se você criar uma exceção específica à sua idade e sexo então você vai usar as mesmas técnicas que a

gente já aprendeu na orientação objeto.

Ou seja quem te faz herança em PHP herança entre classes você usa a palavra existentes.

é exatamente essa palavra que nós vamos usar para criar uma herança. <br>

Ou seja quando você tem uma relação e se você cria uma seção específica de validação ou uma exceção ... 
    </h4>
    <marquee> Daqui veremos os códigos em PHP...  </marquee>
    <h3> Resposta:</h3>
  
<hr>
<?php 
   class FaixaEtariaException extends Exception {
      public function __construct($message, $code = 0, $previous = null) {
            
            parent::__construct($message, $code, $previous);
      } 
     
   }
   function CalcularTempoAposentadoria($idade) {
      if($idade < 18) {
         throw new FaixaEtariaException('Ainda falta muito..para pegar a esmola do Governo...');
      }
     if($idade > 70){
         throw new FaixaEtariaException('Chegou a hora da esmolas kkkkk');
         }
         return 70 - $idade;
      }
   // finalizar de noite...
   $idadesAvaliadas = [15, 30, 60, 80];
    foreach($idadesAvaliadas as $idade){
        try {
            $tempoRestante = CalcularTempoAposentadoria($idade);
            echo "Idade, $idade, $tempoRestante anos restantes<br>";
        } catch(FaixaEtariaException $e){
            echo "Não foi possivel calcular para $idade anos.<br>";
            echo "Motivo: {$e->getMessage()}<br> ";

        }
    }
   echo "<br> Fim!!!"
   // Amanha vou analise para buscar o erro...
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
 class FaixaEtariaException extends Exception {
      public function __construct($message, $code = 0, $previous = null) {
            
            parent::__construct($message, $code, $previous);
      } 
     
   }
   function CalcularTempoAposentadoria($idade) {
      if($idade < 18) {
         throw new FaixaEtariaException('Ainda falta muito..para pegar a esmola do Governo...');
      }
     if($idade > 70){
         throw new FaixaEtariaException('Chegou a hora da esmolas kkkkk');
         }
         return 70 - $idade;
      }
   // finalizar de noite...
   $idadesAvaliadas = [15, 30, 60, 80];
    foreach($idadesAvaliadas as $idade){
        try {
            $tempoRestante = CalcularTempoAposentadoria($idade);
            echo "Idade, $idade, $tempoRestante anos restantes<br>";
        } catch(FaixaEtariaException $e){
            echo "Não foi possivel calcular para $idade anos.<br>";
            echo "Motivo: {$e->getMessage()}<br> ";

        }
    }
   echo "<br> Fim!!!"
   // Amanha vou analise para buscar o erro...
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>