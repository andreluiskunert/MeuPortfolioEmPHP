<div class="titulo"> <center> <u> Interface </u></center></div>

<div>
    <p1> Orientação a Objetos_Interface </p1>
    <h2>
    <p>Transcrição: </p> <br>
    <div>
    Pessoal.

Outro recurso interessante que o PHP disponibiliza é a interface.

Nós vamos falar um pouquinho sobre a interface nessa aula, mas já cabe uma observação logo no início,

que é o seguinte. <br>

Interface é um nome que pode ser usado em diferentes contextos.

Por exemplo, se eu estiver falando da tela do meu sistema, eu posso falar de interface gráfica.

Se eu estiver falando no contexto de orientação a objeto, eu posso falar em interface como sendo aquilo

que está visível a partir de um determinado objeto....  <br>

    </div>
    <h3>Resultado será:</h3>
    <hr>
<?php
 echo "§ Revisão de Interface §<br>";
  interface Animal{
      function respirar();
     
  }
  interface Canino extends Animal{
      function latir(): string;
      function correr();
    }
    interface Manifero extends Animal{
        function mamar();
    }
     interface Felino extends Animal{
         function correr();
     }

   class Cachorro implements Animal{
         function respirar(){
             return "Cachorro respira...<br>";
         }  
         function latir(): string{
                return 'Au Au';
            }
            function mamar(){
                return 'cachorro tomando leite...<br>';
            }
            function correr(){
                return 'Cachorro correndo...<br>';
            }
   }
    $animal = new Cachorro();
   echo $animal->respirar(), '<br>';
   echo $animal->latir(), '<br>';
    echo $animal->mamar(), '<br>';
    echo $animal->correr(), '<br>';
    var_dump($animal);
    echo'<br>';
    var_dump($animal instanceof Cachorro);
    echo'<br>';
    var_dump($animal instanceof Canino);
    echo'<br>';
    var_dump($animal instanceof Manifero);
    echo'<br>';
    var_dump($animal instanceof Animal);
    echo'<br>';
    var_dump($animal instanceof Felino);
    echo'<br>';
    var_dump($animal instanceof Cachorro);

    echo'Final da execução...<br>';
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
 echo "§ Revisão de Interface §<br>";
  interface Animal{
      function respirar();
     
  }
  interface Canino extends Animal{
      function latir(): string;
      function correr();
    }
    interface Manifero extends Animal{
        function mamar();
    }
     interface Felino extends Animal{
         function correr();
     }

   class Cachorro implements Animal{
         function respirar(){
             return "Cachorro respira...<br>";
         }  
         function latir(): string{
                return 'Au Au';
            }
            function mamar(){
                return 'cachorro tomando leite...<br>';
            }
            function correr(){
                return 'Cachorro correndo...<br>';
            }
   }
    $animal = new Cachorro();
   echo $animal->respirar(), '<br>';
   echo $animal->latir(), '<br>';
    echo $animal->mamar(), '<br>';
    echo $animal->correr(), '<br>';
    var_dump($animal);
    echo'<br>';
    var_dump($animal instanceof Cachorro);
    echo'<br>';
    var_dump($animal instanceof Canino);
    echo'<br>';
    var_dump($animal instanceof Manifero);
    echo'<br>';
    var_dump($animal instanceof Animal);
    echo'<br>';
    var_dump($animal instanceof Felino);
    echo'<br>';
    var_dump($animal instanceof Cachorro);

    echo'Final da execução...<br>';
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>