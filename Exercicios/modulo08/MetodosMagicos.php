<div class="titulo"> <center> <u> Metódos Magicos</u></center></div>

<div>
   <h1> <p1> Orientação a Objetos_Metódos Magicos </p1></h1> 
    <h2>
    Agora vou falar pra vocês sobre os métodos mágicos do pega certo esse é um termo relativamente engraçado

mais exatamente o nome desse tipo de método que é dado como coloca ou pega a pé.

Métodos mágicos. <br>

Você pode olhar um pouco mais na documentação e você vai ter aqui alguns métodos mágicos à disposição.

Por exemplo o consultor é um deles esses métodos que começam com 2 andar mais na frente.

Tem um truque e a gente vai falar especificamente nessa aula também do método GET IT do método 7.... 
    </h2>
<h3>Resultado será:</h3>
<hr>
<?php 
  class Pessoa {
     public $nome;
     public $idade;
      function __construct($nome, $idade) {
          echo'Convocando todos os thundercats...<br>';
          $this->nome = $nome;
            $this->idade = $idade;   
      }
        function __destruct() {
            echo ' <br> Lion precisa de ajuda...<br>';
     }
        public function __toString() {
            return "{$this->nome} tem {$this->idade} anos. <br>";
        }
        public function apresentar() {
            echo $this . '<br>';
        }
        public function __get($atr) {
            echo "Lendo atributo não declarado: {$atr}<br>";
            return $atr;
        }
        public function __set($atr, $valor) {
            echo "Alterando atributo não declarado: {$atr}/{$valor}<br>";
        }
        public function __call($metodo, $params) {
            echo "Cadê a espada Justiceira... {$metodo} <br>";
            echo "Precisamos do Lion: ";
            print_r($params);
        }

  }
    $pessoa = new Pessoa('Lion', 30);
    echo $pessoa;
    $pessoa->apresentar();
    echo $pessoa, '<br>';
    $pessoa->nome = 'Thundera';
    $pessoa->apresentar();
    /* echo "Pausa para descanso...<br>";
    echo "voltei.... ..<br>"; */
    echo $$pessoa->nomeCompleto;
    $pessoa->nomeCompleto = 'tiger';
     echo $pessoa->nome .'<br>';
     $pessoa->exec(1, 'teste', true) .'<br>';
     $pessoa->NULL;
    echo "Fim do programa...<br>";

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

 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>