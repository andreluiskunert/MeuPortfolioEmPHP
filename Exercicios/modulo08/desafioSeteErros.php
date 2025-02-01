<div class="titulo"> <center> <u> Desafio dos Sete Erros </u></center></div>

<div>
   <h1> <p1> Orientação a Objetos_Desafio dos Sete Erros </p1></h1> 
    <h2>
    Só na sala nós vamos fazer o desafio do site.

Eu vou colocar um código esse código vai ter sete mil se não estou enganado e você vai resolver os erros

até esse código funcionar corretamente o resultado aparece na tela.

Então na sala nós vamos criar o código. <br>

Vamos criar o arquivo criar o código e aí eu vou deixar para vocês resolverem na próxima aula mostro

a resposta estavam lá o nome do nosso desafio é esse desafio Vanderlan erros.

Ponto PHP. <br>

Vou colocar aqui o nosso título pra esse desafio.

Erros e vou colocá la no nosso menu.

Desculpe HP duplicar aqui ou ali clique aqui ou ali vou trocar o nome da classe para o desafio dela.
    </h2>
<h3>Resultado será:</h3>
<hr>
<?php 
   /* interface Template {
        function metodo1(); 

       
        public function metodo2($parametro);  }
         public function metodo1(){

              }
        abstract class ClassAbstrata implements Template {
            public function metodo3(){
                echo "Estou Funcionando"; 
            }
        } 
         class Classe extends ClassAbstrata {
           function __construct($parametro) {
                echo "Estou Funcionando";
           }
              
         }
$exemplo = Classe();
$exemplo->metodo3(); */
echo "Aqui é mão no código...<br> ";
interface Template {
    function metodo1(); 
    public function metodo2($parametro);  
}

abstract class ClassAbstrata implements Template {
    public function metodo3(){
        echo "Estou Funcionando"; 
    }
    public function metodo1(){
        
    }
}
    

  class Classe extends ClassAbstrata {
    function __construct($parametro) {
       
    }
    
        public function metodo2($parametro){
           
        }
    }
  
  $exemplo = new Classe('...');
    $exemplo->metodo3();
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