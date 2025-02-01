<div class="titulo"> <center> <u> Desafio Data Classes </u></center></div>

<div>
    <p1> Orientação a Objetos- Desafio Data Classes: </p1>
    <h2>
    <p>Transcrição: </p> <br>
    Pessoal vou lançar um desafio pra vocês para vocês criarem a classe.

DATA CERTA certo novo ao criar o menu eu não vou criar o artigo eu não vou criar o blog bloco PHP.

Quero que vocês façam tudo certo e vocês vão criar uma classe chamado Data.

A data terá o atributo dia mês e ano.

Por padrão o dia será primeiro por padrão mês será janeiro o valor inteiro e o ano padrão será 1970.
terça-feira 31/12/2024 .... finalizar o ano estuad
<h3>Resultado será:</h3>
<hr>
<?php 
  Class Data {
     public $dia = 31;  // 01
     public $mes = 12; // 01
     public $ano = 2024; //1970
     public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
     }
  }
  $aniversario = new Data;
  $aniversario-> dia = 02;
  $aniversario-> mes = 06;
  $aniversario-> ano = 2025; 
  echo "Aniversário: <br>";
  echo $aniversario->apresentar();
    echo '<br>';
   echo  "formatura do curso de Desenvolvimento Full Stack pela estacio: <br>";
   $formaturadocursodeDesenvolvimentoFullStack_estacio = new Data;
   $formaturadocursodeDesenvolvimentoFullStack_estacio-> dia = 15;
   $formaturadocursodeDesenvolvimentoFullStack_estacio-> mes =  12;
   $formaturadocursodeDesenvolvimentoFullStack_estacio-> ano = 2027; 
 echo $formaturadocursodeDesenvolvimentoFullStack_estacio->apresentar();

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
 Class Data {
     public $dia = 31;  // 01
     public $mes = 12; // 01
     public $ano = 2024; //1970
     public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
     }
  }
  $aniversario = new Data;
  $aniversario-> dia = 02;
  $aniversario-> mes = 06;
  $aniversario-> ano = 2025; 
  echo "Aniversário: <br>";
  echo $aniversario->apresentar();
    echo '<br>';
   echo  "formatura do curso de Desenvolvimento Full Stack pela estacio: <br>";
   $formaturadocursodeDesenvolvimentoFullStack_estacio = new Data;
   $formaturadocursodeDesenvolvimentoFullStack_estacio-> dia = 15;
   $formaturadocursodeDesenvolvimentoFullStack_estacio-> mes =  12;
   $formaturadocursodeDesenvolvimentoFullStack_estacio-> ano = 2027; 
 echo $formaturadocursodeDesenvolvimentoFullStack_estacio->apresentar();
 
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>