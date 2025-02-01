<div class="titulo"> <center> <u> Estáticos Vs Dinâmicos</u></center></div>

<div>
    <p1> Orientação a Objetos_Estáticos Vs Dinâmicos </p1>
    <h2>
    <p>Transcrição: </p> <br>
   <div> Outro conceito muito importante que é um conceito que eu comentei com vocês algumas aulas passadas é

o conceito de estático versos dinâmico.

Certo Eu falei sobre isso deixou mostrar aqui Raskin Raskin mostra isso não impede.

Deixa eu ver se eu consigo sei exatamente nesse ponto.

Acho que não foi aqui que eu mostrei.

Não acho que foi dentro de membros certo ou dentro de membros.

Eu falei com vocês sobre os membros de uma classe então nós temos aqueles atributos os atributos podem

ser variáveis pode ser constantes e nós temos variáveis que pertence ao objeto constantes que pertence

a um objeto...
conceito certo.... </div>
<h3>Resultado será:</h3>
<hr>
<?php 
 class A {
      public $naoStatic = 'Variável de Instância';
      public static $static = 'Variável estática';
      public function mostrarA(){
        echo "Não estática = {$this->naoStatic} <br>";
        // 1ª Tentativa:
       // echo "Estática = {$this->static} <br>";
      // 2ª Tentativa:
      // echo "Estática = {self::$static} <br>";
       echo "Estática = " . self::$static . " <br>";
      

      }
       public static function mostrarStaticA(){
        //echo "Não estática = {$this->naoStatic} <br>";
       // echo "Estática = {$static} <br>";
        echo "Estática = " . self::$static . " <br>";

       }
 }
 echo "§ Descansar um ... pouquinho... <br>  ";
 echo " ø sábado 04/01/2025 revisão e finalizar está aula sobre {Orientação a Objetos_Estáticos Vs Dinâmicos}";

 $objetoA = new A();
 $objetoA->mostrarA();
 $objetoA->mostrarStaticA(); // não é IDEAL fazer isso;
 //
 echo '<br>';
 echo A::$static, '<br>';// acessar diretamente a classe;
 A::mostrarStaticA(); //acessar diretamente a classe;
 A::$static = 'Alterado membro da Classe;';
 echo A::$static,'<br>'; //acessar diretamente a classe;
 

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
 apenas teoria.. 
 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>