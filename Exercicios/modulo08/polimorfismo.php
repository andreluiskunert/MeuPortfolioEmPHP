<div class="titulo"> <center> <u> Polimorfismo </u></center></div>

<div>
   <h1> <p1> Orientação a Objetos_ Polimorfismo </p1></h1> 
    <h2>
    Olha só não vou falar para vocês um pouquinho.

Na prática do conceito de polimorfismo embora PHP seja uma linguagem dinâmica e esse conceito do polimorfismo

ele está muito mais presente em linguagens de tipos fortes na linguagem forte como é o Java por exemplo

eu vou mostrar para vocês um exemplo que você vai conseguir ver o uso do polimorfismo na prática.

Só que a gente vai precisar para ter esse uso digamos assim barrado definitivos a gente sabe que não
    </h2>
<h3>Resultado será:</h3>
<hr>
<?php 
 abstract class comida {
     public $peso;
     
  }
    class Arroz extends comida {

    }
    class ArrozAgrega extends Arroz {   

    }
    class Feijao extends comida {

    }
    class repolho extends comida {

    }
    class Pessoa {
        public $peso;
        function __construct($peso) {
            $this->peso = $peso;
        }
        public function comer(comida  $comida) {
            $this->peso += $comida->peso;
        }
        
    }
    $c1 = new Arroz();
    $c1->peso = 0.89;
    $c2 = new ArrozAgrega();
    $c2->peso = 0.85;
    $c3 = new Feijao();
    $c3->peso = 1.50;
    $c4 = new repolho();
    $c4->peso = 0.65;
    $p = new Pessoa(66.85); // o meu peso atual;
    $p->comer($c1);
    $p->comer($c2);
    $p->comer($c3);
    $p->comer($c4);
    echo $p->peso;

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