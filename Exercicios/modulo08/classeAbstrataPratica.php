<div class="titulo"> <center> <u> Classe Abstrata_Pratica</u></center></div>

<div>
   <h1> <p1> Orientação a Objetos_Classe Abstrata_Pratica </p1></h1> 
    <h2>
    Até agora não usamos na prática o conceito de classe abstrata.

Então para isso eu vou criar aqui um novo arquivo chamado abstract ponto PHP.

Vou colocar um título que vai ser classe abstrata e vou mexer também no nosso menu então vou duplicar

no futuro um menu de interface e vou substitui aqui por Abstract. <br>

Finalmente o título também será classe abstrata estão faltando mais um item no nosso Capítulo 8 de paradigma.

Aqui nós vamos voltar para o nosso nosso arquivo que no nosso arquivo ou criar no nosso blog PHP e vou

criar uma classe em nome da nossa classe que a gente vai criar vai ser classe abstrata desaparecendo

no mais óbvio possível.... <br>
    </h2>
<h3>Resultado será:</h3>
<hr>
<?php 
echo "Aqui é mão no código...<br> ";
abstract class Abstrata {
     abstract public function metodo1();
      abstract protected function metodo2($parametro);

}
  abstract class FilhaAbstrata extends Abstrata{
    public function metodo1() {
        echo "Executar Metodo1 <br>";
    }
    abstract public function metodo3();
  }
  class Concreta extends FilhaAbstrata {
        public function metodo1() {
            echo "Executando metodo1 extendido <br>";
            parent::metodo1();
        }
        protected function metodo2($parametro) {
            echo "Executando metodo2, parametro: {$parametro} <br>";
        }
        public function metodo3() {
            echo "Executando metodo3 <br>";
        }
  }
  $c = new Concreta();
  $c -> metodo1();
 // $c -> metodo2('Externo'); metodo protegido;
 $c->metodo3('Interno');
 var_dump($c);
 echo '<br>';
 var_dump($c instanceof Concreta);
 echo '<br>';
 var_dump($c instanceof FilhaAbstrata); 
 echo '<br>';
 var_dump($c instanceof Abstrata); 
 echo '<br>';
 var_dump($c instanceof Concreta);
    echo '<br>';
    
  echo"The end! <br>";

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
 echo "Aqui é mão no código...<br> ";
abstract class Abstrata {
     abstract public function metodo1();
      abstract protected function metodo2($parametro);

}
  abstract class FilhaAbstrata extends Abstrata{
    public function metodo1() {
        echo "Executar Metodo1 <br>";
    }
    abstract public function metodo3();
  }
  class Concreta extends FilhaAbstrata {
        public function metodo1() {
            echo "Executando metodo1 extendido <br>";
            parent::metodo1();
        }
        protected function metodo2($parametro) {
            echo "Executando metodo2, parametro: {$parametro} <br>";
        }
        public function metodo3() {
            echo "Executando metodo3 <br>";
        }
  }
  $c = new Concreta();
  $c -> metodo1();
 // $c -> metodo2('Externo'); metodo protegido;
 $c->metodo3('Interno');
 var_dump($c);
 echo '<br>';
 var_dump($c instanceof Concreta);
 echo '<br>';
 var_dump($c instanceof FilhaAbstrata); 
 echo '<br>';
 var_dump($c instanceof Abstrata); 
  echo"The end! <br>";
 echo '<br>';
 var_dump($c instanceof Concreta);
    echo '<br>';
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>