<div class="titulo"> <center> <u> Modificador Final</u></center></div>

<div>
   <h1> <p1> Orientação a Objetos_ Modificador Final </p1></h1> 
    <h2>
    Só nessa aula vou falar pra vocês uma ou outra palavrinha reservada da linguagem PHP que a palavra final

palavra final certo é essa palavra.

Ela vai te ajudar a evitar que determinadas funções ou métodos sejam sobre escritos.

E quando você quer ter uma classe que não deve ser dada a uma classe que não pode ter essa classe.

Você pode usar a classe final não. <br>

Então vamos supor que você tenha um sistema de banco.

Certo O sistema do Banco Itaú do Banco Bradesco do Banco do Brasil e você tem uma classe extremamente<br>
    </h2>
<h3>Resultado será:</h3>
<hr>
<?php 
 abstract class Abstrata {
     abstract public function metodo1();
        public final function metodo2(){
              echo "Não vou mudar! <br>";   
       } 
    }
     class Classe extends Abstrata {
         public function metodo1(){
             echo "Executando metodo1 <br>";
         }
        /*  public function metodo2(){  // erro
             echo "Executando metodo2 <br>";  
         } */
          
     }  
     echo "Não vou mudar! _Metodo 2 não funciona <br>";  
     $classe = new Classe('...');
        $classe->metodo1();
       // $classe->metodo2();
     final class Unica {
         public $att = 'valor';
     }
     $unica = new Unica();
     echo $unica->att;
   /*    class Duplicata extends Unica {
          public $att2;
      }
        $unica = new Unica();
        $unica->att = '...'; */

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
 abstract class Abstrata {
     abstract public function metodo1();
        public final function metodo2(){
              echo "Não vou mudar! <br>";   
       } 
    }
     class Classe extends Abstrata {
         public function metodo1(){
             echo "Executando metodo1 <br>";
         }
        /*  public function metodo2(){  // erro
             echo "Executando metodo2 <br>";  
         } */
          
     }  
     echo "Não vou mudar! _Metodo 2 não funciona <br>";  
     $classe = new Classe('...');
        $classe->metodo1();
       // $classe->metodo2();
     final class Unica {
         public $att = 'valor';
     }
     $unica = new Unica();
     echo $unica->att;
   /*    class Duplicata extends Unica {
          public $att2;
      }
        $unica = new Unica();
        $unica->att = '...'; */
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>