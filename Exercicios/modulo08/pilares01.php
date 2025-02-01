<div class="titulo"> <center> <u>   Pilares #01 </u></center></div>

<div>
    <p1> Orientação a Objetos_Pilares #01 </p1>
    <h2>
    <p>Transcrição: </p> <br>
    <div>
    Nas 11 da sala falar sobre os pilares da orientação a objeto todo o paradigma como orientação objeto

um paradigma programação funcional paradigma programação procedural não paradigma procedural também

é outra forma de pensar de organizar o seu corpo cada paradigma tem princípios.

Entender esses princípios é essencial para que você possa programar de acordo alinhado com esses princípios

em cima desses princípios podem surgir outras coisas como por exemplo padrões de projeto.

Mais uma vez que esses padrões de codificação habitualmente vão surgir muito importante portanto qualquer

coisa que você faça dentro de um código esteja alinhado com os paradigmas com os princípios daquele

paradigma ou seja os princípios do qual aquela forma de pensar se baseia.

Dessa forma você vai estar programando alinhado com um paradigma. <br>

Nesse caso a orientação objeto ela possui alguns pilares.

Algumas pessoas colocam três pilares eu vou referenciar quatro pilares aqui.

O primeiro é uma encapsulamento.

O segundo é herança o terceiro polimorfismo é o quarto pilar e a abstração encapsulamento nada mais

é do que você não precisará entendê entender.

A implementação interna de um determinado objeto lembrando que eu estou falando do paradigma de orientação

objeto um objeto bio de uma classe a partir de uma classe C gera um objeto ou instância ou seja a classe

estrutura de dados e o objeto e o dado gerado a partir.

Dada a classe a partir do molde ou seja como você chama o construtor e distanciado o novo objeto que

esse objeto representa um dado.

Então para você usar um objeto distanciado ou para você referenciar uma classe pré existente você não

precisa conhecer os detalhes internos de implementação para usar ela basta você entender como funciona

a interface de comunicação.

Da mesma forma que você não precisa entender como o motor a combustão de um carro funcionou como um

motor elétrico de um carro funcional para dirigir um carro se você entender como funciona a interface

de comunicação entre o motorista e o carro você será apto a dirigir um carro mesmo que você não saiba

se o carro tem um motor elétrico o seu carro tem o motor a combustão.

Se o carro tem um motor híbrido com os dois com as duas tecnologias dentro do carro.

Se o carro é oito válvulas 16 válvulas se ele é 3 pontos 0 2 0 não importa se você conseguir interagir

com o carro seja um carro automático seja um carro manual ou seja a marcha circular ou a marcha senão

a alavanca se você entender como se comunicar com o carro você não precisa entender os detalhes interno

mesmo coisa objeto ele pode ser visto nela a classe que cria um objeto pode ser visto como uma caixa

preta.  <br>

Você simplesmente vai precisar interagir com os métodos e os atributos que estão visíveis para fora

do objeto e você precisa aprender a chamar esses metros.

Quando eu digo chamar o metro que é que você precisa conhecer quais são os parâmetros que esse método

recebe.

Que tipo de retorno ele vai devolver ele vai devolver um triângulo ele vai devolver um valor inteiro

vai devolver um valor real por exemplo ou não vai devolver um rei.

Então você precisa saber quais são os parâmetros para passar para um determinado Metro você precisa

saber o que você recebe como resposta a chamada desse Metro você precisa saber o nome do metro mas você

não precisa entender como aquele metro foi implementado internamente.

Isso a quem chama de encapsulamento além disso dentro de um objeto desse.

é possível que você tenha também outras coisas dentro por exemplo você pode ter um atributo privado

que só é visível dentro do objeto coloquei vermelhinho para dar a ideia de que você não tem acesso de

fora.

Você pode ter um outro método aqui dentro que não é visível para fora.

Você pode ter um outro atributo então você pode ter uma constante então várias coisas dentro do objeto

estão escondidas dentro dele ou seja estão encapsulado dentro do objeto que você não consegue ter acesso

e fora.

Você só consegue ter acesso de fora por exemplo aquilo que está visível externamente que são métodos

e atributos por exemplo públicos vão falar um pouco mais sobre os níveis de visibilidade daqui a pouco.

Então entenda o objeto como sendo parte do objeto ele é conhecido para fora mais parte do objeto interno

ou só está presente dentro dele.

Ou seja quando você vai interagir com a TV você não precisa entender todo o circuito interno basta você

saber como mexer num controle remoto.

O que aquela é a interface pública na televisão aqueles botões exatamente os botões que você pode interagir

com a TV aquilo que está dentro da TV.

é algo que está encapsulado o que está escondido certo dentro do contexto da orientação a objeto.

Se você tem um pilar chamado encapsulamento significa encapsulamento e você coloca algo dentro de uma

cápsula.

Exatamente essa cápsula e o objeto o objeto é a cápsula que agrupa dois tipos de coisa que são os atributos

e os comportamentos.

A gente viu que os membros de uma classe são atributos e comportamentos e métodos e atributos.

Você tem alguns metros especiais como o construtor desfrutou mas de forma geral você tem atributos que

são variáveis e constantes e você tem os métodos então o objeto é exatamente essa cápsula que faz com

que você tenha o encapsulamento você consiga esconder parte dos detalhes de implementação para que você

só interaja com aquilo que foi publicamente disponibilizado.

Com a vantagem disso.  <br>

A vantagem é que você tem um projeto um programa bem complexo e esse programa complexo.

Ele é dividido em pequenas partes por exemplo quando você vai montar um computador.

Você tem uma parte bem específica que é a memória.

Você tem outra parte que é o processador.

Você tem outra parte que é por exemplo você tem lá um controlador das USB selado as saídas do computador.

Então você tem cada parte é responsável por uma parte do todo quer fazer o computador funcionar mas

cada um tem uma responsabilidade da mesma forma.

Quando você vai para um mundo de orientação objeto você tem um programa.

Não é um software mais complexo que é formado por várias dezenas centenas talvez milhares de classes

criando seus objetos.

Cada classe tem uma responsabilidade.

Então por exemplo se a classe A na hora de usar a classe B ela precisasse entender o que está dentro.

Seria muito complicado se você para usar o carro precisasse entender como funciona o motor a combustão.

Pouca gente acaba dirigindo o nível de complexidade seria muito grande então você esconder detalhes

de implementação dentro do objeto é só usar aquilo que foi de forma explícita.

Colocado como o público como visível para fora do objeto é muito interessante o que você coloca só uma

funcionalidade simples sem precisar detalhar a complexidade de determinado objeto.

Imagine um objeto que ele é responsável por finalizar a compra em um site um grande site.

Você tem lá o Amazon.com.

Você tem lá um botão que finalizar compra.

Então muito provavelmente o sistema vai ter uma funcionalidade pode ser uma função pode ser inclusive

um objeto e esse objeto por exemplo é responsável por finalizar uma compra.

Já imaginou o nível de complexidade que existe dentro desse objeto interação com o cartão de crédito

interação com o sistema de estoque e a interação com o sistema de e-mail para enviar o usuário com determinado

em meio a determinada compra foi feita com sucesso ou não.

Então tem várias ações que esse objeto precisa fazer e se quem precisar chamar esse objeto precisará

conhecer cada detalhe.

Seria muito difícil algum código chamar o finalizar cobra o que você precisa passar provavelmente para

finalizar a compra e o cliente. <br>
Quais são os produtos e algumas outras opções que o usuário forneceu.

Que tipo de frete ele quer mais.

Você passa as informações de entrada e todo os detalhes de implementação ficam por conta desse objeto

ou de vários objetos que estejam eventualmente relacionados com esse fluxo.

Mas em outras palavras você tem um objeto bem complexo que simplesmente expõe uma única função finalizar

compra que recebe alguns parâmetros e retorna alguma coisa de volta ou seja a complexidade fique escondida

certo.

Falando da forma prática como de forma prática é implementado o encapsulamento dentro do PHP.

De forma prática ele é implementado a partir dos modificadores de acesso certo então os modificadores

de acesso do PHP são três.

Você tem como definir tanto atributos como métodos privados.

Ou seja quando você usa a palavra drivers você está dizendo que aquele atributo ou aquele método seja

de forma mais geral o membro ele é visível apenas dentro da classe ou seja ninguém fora da classe terá

acesso ao membro que é marcado como modificador de acesso proibido.

Nós já usamos nossos exemplos o público é para tornar algo público visível o Paraíba te garante que

aquele membro estará visível apenas dentro da classe.

Outra palavra reservada que você usa para definir visibilidade é o protesto.

Aqui protesta ele é usado para definir que um determinado atributo ele é visível dentro da própria classe

ou seja aqui eu tenho um nível de visibilidade privada mais interna ou seja só a partir do momento que

ele vai aumentando o nível de visibilidade tudo que tinha antes continua valendo é acrescentado mais

alguma coisa por exemplo protesta.

Ele é visível não apenas para a classe para a própria classe que adora daquele membro mas também é transmitido

por herança.

Eu vou falar um pouco mais de herança.  <br>

No próximo pilar de orientação a objeto a gente tá no primeiro encapsulamento e o segundo.

Tá certo mas ele é transmitido por herança com o olhar qual o que é ou seja ele é visível na própria

classe e também é transmitido por herança.

E o terceiro em vez de visibilidade é exatamente o visual a visibilidade pública.

Público ou seja quando você marca um atributo quando você marca uma constante quando você marca uma

função.

é um método com públicos.  <br>

Em outras palavras você está dizendo que aquele membro certo aquele atributo aquela constante aquele

método ali baixo está bem visível pra todo mundo que tiver acesso àquela classe.

Se você criar um instante daquela classe você vai conseguir chamar os membros públicos está certo.

E aí em resumo você tem o privado visível apenas dentro da própria classe.

Você tem o protesto é visível na própria classe e é transmitido por herança e o público fica mais abrangente.

Ele é visível na própria classe.

O público é transmitido por herança e além disso o público é visível para qualquer outra.

Outro código acessar aquele membro ou seja quando você tem o membro público por exemplo no caso o método

você vai conseguir colocar aquele método. <br>

E se você tem um atributo público você vai conseguir acessar aquele atributo.

Então esses são os três níveis de visibilidade que estão disponíveis dentro do PHP.

Nós chamamos essas palavras reservadas da linguagem de modificadores de acesso ou seja a partir desses

modificadores se você vai definir se um código terá ou não acesso a um determinado membro de uma classe.

Então quando você torna algo privado ele está dizendo que você acabou de encapsular aquela informação

ou seja aquela informação faz parte de algo que pertence somente interno ao objeto.

Se você coloca o privado por exemplo ninguém mais vai conseguir acessar a não ser a própria classe.

Quando você torna público significa que você colocou essa informação disponível para o mundo se essa

informação não está encapsulado não está escondida.

Obviamente você vai ter que colocar algumas coisas públicas para que outros objetos consigam chamar

determinadas funções. <br>

Mas você tem que priorizar ao máximo que você puder esconder os detalhes de implementação é melhor e

eu vou já comentar um pouco mais sobre isso na aula seguinte que eu vou focar um pouco mais o encapsulamento.

O próximo pilar pessoal era nessa mas para não ficar muito grande a aula eu vou focar a herança na próxima

aula.

Então ficamos por aqui na próxima aula falar sobre o segundo pilar de orientação a objeto que era.

    </div>
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