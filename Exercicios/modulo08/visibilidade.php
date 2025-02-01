<div class="titulo"> <center> <u> Visibilidade </u></center></div>

<div>
    <p1> Orientação a Objetos_Visibilidade </p1>
    <h2>
    <p>Transcrição: </p> <br>
    <div>
    O próximo exemplo que nós vamos fazer é sobre encapsulamento.

Nós vamos trabalhar especificamente com os níveis de visibilidade.

Gente hábil na teoria vai trabalhar na prática. <br>

Então nós vamos criar um novo arquivo nome do arquivo será visibilidade ponto PHP.

Eu vou colocar aqui o nosso título que vai ser visibilidade e nós vamos entrar no desporto PHP para

duplicar o nosso menu colocando aqui para mudar essa visibilidade e eu vou colocar aqui também o título

do nosso menu para a visibilidade são salvando. <br>

Vou voltar aqui para não achar que o PHP volta mas teremos mais um link que é para gente trabalhar nos

níveis de visibilidade PHP ou seja o princípio da programação orientada a objeto que é o encapsulamento

    </div>
    <h3>Resultado será:</h3>
    <hr>
<?php
class A {
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';
    public function mostrarA(){
        $this->naoMostrar();
        echo "Class A) Ṕublico = {$this-> publico}<br>";
       echo "Class A) Protegido ={$this-> protegido} <br>";
       echo "Class A) Privado = {$this->privado} <br>";
        }
       // obs:. fui fazer um café e dar um pausar na mente..
       public function vaiPorHeranca(){
        echo ' Herdou do avo teimoso...';
       
    }
       
     private   function naoMostrar(){
            echo ' : Acesso negado; <br>';
            echo 'Entre em contato com o administrador do Sistema...<br>';
        }
 }
 $a = new A();
 //echo  $a->protegido;
 echo $a-> publico; // 
 $a->mostrarA();
 echo "===============<br>";
// $a ->naoMostrar(); gera erros;
  class B extends A{
     public function mostrarB(){
       echo "Class B) Publico = {$this-> publico} <br>";
       parent:: vaiPorHeranca();
     }
    }
    $b = new B();
    $b->mostrarA();
    echo" o valor de B é:<br> ";
    $b->mostrarB();
    $b-> vaiPorHeranca();

   // $b->naoMostrar(); gera erros também...
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
 class A {
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';
    public function mostrarA(){
        $this->naoMostrar();
        echo "Class A) Ṕublico = {$this-> publico}<br>";
       echo "Class A) Protegido ={$this-> protegido} <br>";
       echo "Class A) Privado = {$this->privado} <br>";
        }
       // obs:. fui fazer um café e dar um pausar na mente..
       public function vaiPorHeranca(){
        echo ' Herdou do avo teimoso...';
       
    }
       
     private   function naoMostrar(){
            echo ' : Acesso negado; <br>';
            echo 'Entre em contato com o administrador do Sistema...<br>';
        }
 }
 $a = new A();
 //echo  $a->protegido;
 echo $a-> publico; // 
 $a->mostrarA();
 echo "===============<br>";
// $a ->naoMostrar(); gera erros;
  class B extends A{
     public function mostrarB(){
       echo "Class B) Publico = {$this-> publico} <br>";
       parent:: vaiPorHeranca();
     }
    }
    $b = new B();
    $b->mostrarA();
    echo" o valor de B é:<br> ";
    $b->mostrarB();
    $b-> vaiPorHeranca();

   // $b->naoMostrar(); gera erros também...

 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>