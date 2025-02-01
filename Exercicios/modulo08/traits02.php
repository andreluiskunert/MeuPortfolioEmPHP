<div class="titulo"> <center> <u> Traits #02 </u></center></div>

<div>
   <h1> <p1> Orientação a Objetos_ Traits #02</p1></h1> 
    <h2>
    Agora nós vamos criar o nosso segundo exemplo de três países falar um pouco mais sobre a resolução de

conflitos.

Como é que você pode resolver isso está aqui.

Nós vamos criar o nosso título.

Aí está dois vão lá no nosso desporto até duplicar o nosso treino.

Nesse caso é só colocar dois aqui colocar dois aqui no alto mas temos o segundo exemplo de treinos.

O voltar aqui e aqui nós vamos criar o nosso bloco PHP então coloca aqui nosso blog PHP e nós vamos

definir também mais ou menos a mesma alinhando validação e validação melhor certo.... 
    <br>
    </h2>
<h3>Resultado será:</h3>
<hr>
<?php
 trait validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
 }
   trait validacaoMelhor {
    public function validarString($str) { // Aqui está o conflito de nomes
        return isset($str) && trim($str);
    } 
}
    class Usuario {
        use validacao, validacaoMelhor {
            validacaoMelhor::validarString insteadof validacao;
            validacao::validarString as validacaoSimples;
        }
    }
    $usuario = new Usuario( );
    var_dump($usuario->validarString(' '));
    echo '<br>';
    var_dump($usuario->validacaoSimples(' '));
    echo '<br>';
    var_dump($usuario->validarString('Oi'));
    echo '<br>';
    var_dump($usuario->validacaoSimples('Oi'));
    echo '<br>';

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