<div class="titulo"> <center> <u> Construtor e Destrutor  </u></center></div>

<div>
    <p1> Orientação a Objetos- Construtor e Destrutor  </p1>
    <h2>
    <p>Transcrição: </p> <br>
    o construtor o construtor um metro e como método você vai passar os parâmetros desse método dentro dos

parênteses a gente não passou de nenhum parâmetro para o nosso construtor de data nem o construtor da

classe data.

Assim como a gente também não passou nenhum parâmetro para o cliente a gente criou o cliente.

Só depois foi que a gente alterou o nome e só depois que a gente alterou na verdade alterou o nome aqui

e alterou a idade da série.

Foi só a partir do momento que já estava construído o objeto que foi lá e alterou de forma explícita.

Nesse caso eu vou querer alterar o nome e a idade no momento da construção e para isso eu preciso definir....
<h3>Resultado será:</h3>
<hr>
<?php 
  Class Pessoa{
      public $nome;
      public $idade;
      function __construct($novoNome, $idade =18){
         echo 'Construtor invocado! <br>';
         $this->nome = $novoNome;
         $this-> idade = $idade;
      }
     function __destruct()
     {
        echo ' E morreu!' ;
     }  
     public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos";
     }
  }
  $pessoa = new Pessoa('André Luis', 42 );
  $pessoa->apresentar();
  echo '<br>';
  // $pessoa = new Pessoa( ); -> gera erro e trava o sistema....
  $pessoab= new Pessoa('Luis Andre', 41 );
  $pessoab->apresentar();
  unset($pessoab);
  echo '<br>';
  $pessoac = new Pessoa('Ze Carlos', 40 );
  $pessoac->apresentar();
  $pessoac = null;


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
 Class Pessoa{
      public $nome;
      public $idade;
      function __construct($novoNome, $idade =18){
         echo 'Construtor invocado! <br>';
         $this->nome = $novoNome;
         $this-> idade = $idade;
      }
     function __destruct()
     {
        echo ' E morreu!' ;
     }  
     public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos";
     }
  }
  $pessoa = new Pessoa('André Luis', 42 );
  $pessoa->apresentar();
  echo '<br>';
  // $pessoa = new Pessoa( ); -> gera erro e trava o sistema....
  $pessoab= new Pessoa('Luis Andre', 41 );
  $pessoab->apresentar();
  unset($pessoab);
  echo '<br>';
  $pessoac = new Pessoa('Ze Carlos', 40 );
  $pessoac->apresentar();
  $pessoac = null;

 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>