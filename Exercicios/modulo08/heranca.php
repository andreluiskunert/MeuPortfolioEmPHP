<div class="titulo"> <center> <u> Herança </u></center></div>

<div>
    <p1> Orientação a Objetos_Herança </p1>
    <h2>
    <p>Transcrição: </p> <br>
    <div>
    Agora vamos fazer um exemplo sobre herança é certo que a gente já viu na pasta que agora a gente vai

aplicar esses conceitos de orientação a objeto na prática usando PHP.

Então nós vamos clicar com o botão direito criar um novo arquivo chamado herança ponto PHP deixar que

eu vou colocar aqui o nosso título aquela rotina que a gente faz em praticamente todas as aulas.

Vou definir o que mais novo menu para nossa aplicação colocar aqui o nome do arquivo a pasta continua

a mesma.

Certo......

    </div>
    <h3>Resultado será:</h3>
    <hr>
<?php 
 class Pessoa {
     public $nome;
     public $idade;
     function __construct($novoNome, $idade){
           $this -> nome = $novoNome;
           $this -> idade = $idade;
           echo 'Pesssoa Criada! <br>';
     }
     function __destruct(){
         echo 'Good Bye my brother or Good Nigth <br>';
     }
     public function apresentar() {
        return "{$this->nome}. {$this->idade} anos <br>";
     }
 }
 class Usuario extends Pessoa{
    // usando também JS
     public $login;
      function __construct($nome, $idade, $login){
         $this->nome=$nome;
         $this->idade=$idade;
         $this->login=$login;
         echo 'Cadastro concluido com sucesso! <br>';

      }
      function __destruct(){
        echo 'Good Bye my brother or Good Nigth <br>';
        parent::__destruct();
    }
    public function apresentar(){
        
        echo "@{$this->login}:";
        parent::apresentar();
        
    }

}
$usuario = new Usuario('Andre Luis', 42, 'ALKTecn_alktecn');
$usuario->apresentar();
unset($usuario);


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
 class Pessoa {
     public $nome;
     public $idade;
     function __construct($novoNome, $idade){
           $this -> nome = $novoNome;
           $this -> idade = $idade;
           echo 'Pesssoa Criada! <br>';
     }
     function __destruct(){
         echo 'Good Bye my brother or Good Nigth <br>';
     }
     public function apresentar() {
        return "{$this->nome}. {$this->idade} anos <br>";
     }
 }
 class Usuario extends Pessoa{
    // usando também JS
     public $login;
      function __construct($nome, $idade, $login){
         $this->nome=$nome;
         $this->idade=$idade;
         $this->login=$login;
         echo 'Cadastro concluido com sucesso! <br>';

      }
      function __destruct(){
        echo 'Good Bye my brother or Good Nigth <br>';
        parent::__destruct();
    }
    public function apresentar(){
        
        echo "@{$this->login}:";
        parent::apresentar();
        
    }

}
$usuario = new Usuario('Andre Luis', 42, 'ALKTecn_alktecn');
$usuario->apresentar();
unset($usuario);


 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>