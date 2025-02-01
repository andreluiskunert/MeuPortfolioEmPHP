<div class="titulo"> <center> <u>   Classes </u></center></div>

<div>
    <p1> Orientação a Objetos  1ª Classe: </p1>
    <h2>
    <p>Transcrição: </p> <br>
    Agora nós vamos fazer o nosso primeiro exemplo a gente já viu aí alguns minutos de teoria e agora ele

vai fazer nosso primeiro exemplo no capítulo de orientação a objeto.

Então para isso eu vou criar aqui uma nova pasta.

Nós vamos fazer uma classe bem simples uma classe cliente então o nome da nossa pasta e classes Vanderlan

objetos exatamente o tema do nosso capítulo e aqui nós vamos criar um arquivo chamado classe ponto PHP

7 ou criar o nosso título dividido na primeira classe...
<h3>Resultado será:</h3>
<hr>
<?php 
class Cliente { 
      // atributos:
      public $nome = 'Anômino';
      public $idade = 45;
      public $profissao = 'Desenvolvedor Full Stack';
    

      public function apresentar(){
       return  "Nome: {$this->nome} <br> Idade:{$this ->idade} anos <br> Profissão:{$this-> profissao} <br>" ; // This -> esse ou desse ...
        
      }

}
$cliente1 = new Cliente();
$cliente1->nome = 'André Luis Kunert';
echo $cliente1 -> apresentar();
echo  " <br>";
 $cliente2 = new Cliente;
 $cliente2-> nome ='Gabriel';
 $cliente2-> idade = 25;
 $cliente2-> profissao;
echo $cliente2 -> apresentar()

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
 class Cliente { 
      // atributos:
      public $nome = 'Anômino';
      public $idade = 45;
      public $profissao = 'Desenvolvedor Full Stack';
    

      public function apresentar(){
       return  "Nome: {$this->nome} <br> Idade:{$this ->idade} anos <br> Profissão:{$this-> profissao} <br>" ; // This -> esse ou desse ...
        
      }

}
$cliente1 = new Cliente();
$cliente1->nome = 'André Luis Kunert';
echo $cliente1 -> apresentar();
echo  " <br>";
 $cliente2 = new Cliente;
 $cliente2-> nome ='Gabriel';
 $cliente2-> idade = 25;
 $cliente2-> profissao;
echo $cliente2 -> apresentar()

 
 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>