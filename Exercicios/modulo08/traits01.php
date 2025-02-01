<div class="titulo"> <center> <u> Traits #01 </u></center></div>

<div>
   <h1> <p1> Orientação a Objetos_ Traits #01</p1></h1> 
    <h2>
    Na sala vão marchar para vocês o conceito de French.

Certo é um conceito muito legal PHP.

Nas duas fases é mais um exemplo de sucesso o primeiro na próxima aula de rapazes.

Um exemplo pra resolver eventual eventuais conflitos que possa acontecer quando você usa trens é mais

um conceito muito legal em projetos reais e que eu já desenvolvi em PHP.

Eu usava em muitos contextos diferentes e é um recurso bastante interessante da linguagem estavam lá... 
    <br>
    </h2>
<h3>Resultado será:</h3>
<hr>
<?php
trait validacao {
	public $a = 'Valor A';
	public function validarString($str) {
		return isset($str) && $str !== '';
	}
}

trait validacaoMelhor {
	public $b = 'Valor B';
	private $c = 'Valor C (privado)';
	public function validarStringMelhor($str) {
		return isset($str) && trim($str);
	}
}

class Usuario {
	use validacao, validacaoMelhor;
	public function imprimirValorC() {
		echo $this->c;
	}
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a, '<br>', $usuario->b, '<br>', $usuario->imprimirValorC();
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

 </div>
 <marquee> "Estudando PHP7 pela Cod3r..."</marquee>