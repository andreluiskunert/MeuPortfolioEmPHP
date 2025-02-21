<div class="titulo"> <center> <u> Introdução ao modulo</u></center></div>

<div>
    <p1> Sessão e Cookie </p1>
    <h2>
    <p>Transcrição: </p> <br>
    Agora nós vamos começar um novo capítulo do nosso curso que nós vamos trabalhar o conceito de estação

e também vamos trabalhar com Kuki certo.

Se você passou pelo capítulo de fundamentos lá tem um capítulo que eu falo de conceitos da web.

é um desses. <br>

Um desses vídeos lá nesse capítulo eu falo sobre protocolo HTTP o protocolo HTTP é um protocolo estabelecido

que significa sem Estado ou seja cada nova requisição que você faz não é um protocolo HTTP ele é baseado

em requisição e resposta cada nova requisição que você faz e recebe a resposta é como se fosse a primeira

vez que você está comunicando com um servidor. <br>

Ou seja não há um estado associado a essa conversa você mandou a requisição e o servidor manda a resposta.

Depois você manda uma requisição para o servidor como se fosse a primeira e ele manda a resposta.

Não há um estado associado à comunicação do ponto de vista do protocolo HTTP mas o PHP vai prover funcionalidades

para você guardar o estado da sua aplicação. <br>

Imagine que você tem um carrinho de compra e você vai colocar um item no carrinho depois você coloca

um segundo item quando você coloca o segundo item o primeiro para continuar no carrinho.

Quando você colocar o terceiro item os dois primeiros devem continuar é exatamente sobre isso que nós

vamos trabalhar a sessão e Kuki para que você consiga também armazenar um estado de tal forma que quando

você fechar o Brasil e abrir novamente o estado da aplicação continua ativo.

Então nós vamos ver isso nesse capítulo. <br>

Para que a gente possa incrementar nós vamos fazer um projeto muito legal associado a essa parte de

exercício que acrescentar o login nessa aplicação de exercício.

Ainda não vai ter relação com o banco de dados CET porque a gente não viu tempo de banco de dados ainda

mas a gente vai fazer um login com o usuário comecei e a gente também vai persistir essa informação

de tal forma que se você fechar o Brasil e abrir de novo você vai continuar logado na aplicação.

Então fique por aqui na próxima.

A gente continuou rápido de sessão e aqui até lá.
    </h2>
  
<hr>
<?php 

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