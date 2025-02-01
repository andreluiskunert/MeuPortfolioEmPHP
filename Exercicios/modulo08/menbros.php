<div class="titulo"> <center> <u>   Membros</u></center></div>

<div>
    <p1> Orientação a Objetos </p1>
    <h2>
    <p>Transcrição: </p> <br>
    Pessoal na sala para aprofundar um pouco mais nos membros de uma classe essas nomenclaturas são muito

importantes.

Você falar atributo de uma classe metro e de uma classe os membros de uma classe.

Quais são os membros de uma classe.

Exatamente como eu falei atributos e comportamentos atributos e métodos.  <br>

Ou seja eram membros é a palavra que você usa para referenciar tudo aquilo que pertence a uma classe

é exatamente o que quero falar um pouco mais detalhadamente aqui na sala ou seja lá assim você pode

ter variáveis e constantes que são seus dados e como a gente tem variáveis e constantes que foram definidas

diretamente no nosso arquivo PHP dentro de uma classe que você pode ter variáveis e constantes que vão

ser os atributos daquela classe e um atributo ele pode ser variável pode ser constante se você tem por

exemplo uma classe chamada produto então colocar aqui por exemplo uma classe chamada produto e ter um

produto com você na minha classe essa classe produto pode ter um atributo por exemplo um nome e então

o nome do produto eu vou ter que um ou outro atributo chamado preço esse posso ter um ou outro atributo

chamado desconto.   <br>
 
Tanto o preço como o nome como desconto podem ser variáveis ou constantes.

Então por exemplo você tem uma política que na sua um sistema que você modelou fraca para a classe Produto

no sistema todo o desconto é constante e o nome da loja da loja 10 por cento de desconto.

Então sempre os produtos estarão com 10 por cento de desconto e eventualmente você pode colocar o desconto

como sendo uma constante porque aquele negócio.

O sistema que você está implementando funciona dessa forma então você pode colocá lo como uma constante

mas via de regra desconto preço nome. <br>

São atributos provavelmente variáveis assim como você tem variáveis e constantes.

Você tem o custo total em PHP.

Você só pode ter apenas um único construtor assim como você também pode ter um desfrutou desfrutou não

falei até agora mais enxuto é chamado quando um objeto vai ser destruído quando você atribui nulo para

um objeto quando você chama ano 7 para liberar um objeto o da estrutura chamada.

Lá você pode liberar alguma coisa você pode por exemplo ter uma conexão com o banco de dados aberto

quero fechar essa conexão.  <br>

Então você pode fazer qualquer coisa que você queira fazer ou desfrutou para liberar algum recurso fechar

algum arquivo alguma coisa nesse sentido você acaba usando menos o desfrutou na época você não necessariamente

precisa chamar alguém chutou para fazer alguma coisa mas o consultor é muito importante porque sempre

que você for criar um novo objeto o construtor precisa ser chamado construtor.

Nada mais é do que um método especial é um método que é responsável por criar uma nova instância um

novo objeto a partir de uma classe assim como produto tem atributos que são variáveis e constantes.

O produto tem um construtor que é para construir aquele objeto um produto também pode ter um método

por exemplo.  <br>

Um método seria pegar aqui o preço certo o preço com desconto ou seja um metro que vai calcular vai

pegar o preço e pegar o desconto um método só fazer um cálculo matemático pra te entregar o preço com

desconto ou seja é algo extremamente comum e algo fácil de perceber aqui nesse nosso exemplo do produto

é só pagar aqui o nosso produto.

Em resumo esses são os membros de uma classe que são atributos variáveis constantes e os metros que

pode ser chutou.  <br>

Métodos normais que não são consultores nem destruidores e métodos de produtores.

Mas todos esses três aqui certo todos esses são métodos que pertencem ao objeto certo.

Métodos.

Então você pode ter apenas um consultor apenas um desfrutou e você pode ter contra os outros métodos

você quiser.

Uma observação com relação ao construtor é a da estrutura e qualquer outro método enterra até arquivo.

Como você tem a possibilidade de ter parâmetros com valores já definidos e abalou o padrão.

Você consegue chamar o construtor de formas diferentes então se você já tem um valor padrão aquele valor

pode ser passado ou não então você pode passar.  <br>

Você tem três parâmetros no construtor.

Os dois últimos têm um valor padrão.

Você pode criar um objeto passam só o primeiro você pode criar um objeto passando apenas dois parâmetros

e você pode criar o objeto passamos três parâmetros ou seja você tem formas diferentes de chamar o mesmo

construtor.

O que você tem e se esse uso do parâmetro padrão da mesma forma que você tem uma função que tem alguns

parâmetros como valor padrão.

Você pode chamar a função de várias formas diferentes. <br>

Isso também acontece com o construtor ou qualquer outro membro da classe deve ser um pouco mais.

Eu vou entrar em um detalhe aqui que não necessariamente vocês vão entender nessa aula mas só pra referenciar

que é o seguinte os membros de uma classe você tem atributos você tem métodos e você tem um metro os

especiais que são os construtores e dois fatores.

E aí olhando tanto pelos métodos como para os atributos você tem no caso os atributos.

Nós temos os atributos e esses atributos podem ser variáveis ou constantes certo a gente já viu isso.

A constante que você coloca como X definiu o nome do atributo e ele não vai poder ser modificado nem

da classe.  <br>

E aí existe uma outra.

Outro nível de organização e subdivisão que são variáveis que pertencem à classe variáveis que pertencem

a um objeto ou a instância.

Então existe uma nomenclatura chamada.

Essa é uma variável de classe.

Ou seja essa é uma variável de instância ou variável de objeto é o que define uma variável de classe

uma variável de objeto e uma palavrinha chamada estática.

Certo que não está ajudando muito essa palavra que está aqui e que define se um atributo ele pertence

à classe ou pertence a um objeto.  <br>

E o que é que significa isso agora ficou totalmente confuso na minha mente não se preocupe.

Inicialmente nós vamos focar nos atributos de objetos seja focar no atributo de objeto e também vou

focar nos métodos de objeto então tudo que eu for criar nas próximas aulas será métodos de objeto atributos

de objeto e constante de objetos.

Quando a gente for mais para frente eu vou falar o que é que significa a palavra estática.

E aí Sabino da palavra Estácio você vai perceber que vai haver uma mudança entre o método não pertencem

mais ao objeto e pertence à classe. <br>

Mas esse é um tema que a gente vai abordar numa aula específica vou mostrar para vocês bem detalhadamente

a diferença que existe entre o método de classe e o método de objeto entre os atributo de classe.

Atributos de objeto para a gente acessar os membros e é isso que a gente vai ver na próxima aula.

Você usa a sétima série em algumas linguagens por exemplo algumas linguagens como Java você usa o ponto

né.

Então você tem aqui o nome da classe ponto e o nome do membro que pode ser um atributo um comportamento

já em PHP a gente usa certinha para acessar os membros de instância os membros de objeto seja métodos

ou atributos. <br>

E quando a gente vai precisar acessar membros estáticos conforme mencionei para vocês né.

Membros de classe que não é algo que a gente vai precisar entender agora pode ficar tranquilo que vai

ter uma aula que eu vou mostrar bem a diferença para você entender exatamente o que significa mais quando

você basta acessar membros estáticos você usa duas vezes os dois pontos e o duplo dois pontos dois pontos

dois pontos exatamente o operador que faz com que você acesse membros que pertencem à classe mas inicialmente

vai focar nessa sétima que são os membros que pertence a um objeto na próxima aula e vai fazer um exemplo

para a gente pegar tudo aquilo que a gente via na parte teórica e aplicar na prática.

Eu tenho certeza que vai ficar tudo um pouco mais claro para vocês. <br>

Esse é um tema só para deixar aqui registrado rapidinho o tema de orientação objeto um tema que demanda

um certo tempo o que demanda por mais que você assista o capítulo inteiro em uma sentada só.

O ideal é que você se você estava vendo pela primeira vez orientação objeto que você em um outro dia.

Depois de descansar depois de dormir e ir lá assistir novamente o capítulo para que você possa ver nova

perspectiva uma cabeça descansada já depois de uma noite de sono.

Por quê.

Porque isso você precisa de um determinado tempo para todos esses conceitos serem digamos assim absorvidos

pela sua mente.  <br>

Eu acho que já algum curso que eu estava uma vez no teclado que eu estava tentando tocar um ritmo chamado

Bug o que tem lá embaixo.

Oitavo para tal e estava muito difícil sincronizar as duas mãos né.

A mão esquerda como direita não estava dando certo.

Passei sete horas praticamente o dia inteiro na frente do teclado tentando fazer isso com a aula na

televisão e nada é voltar ao vídeo aula e não conseguia fazer.

E aí descansei dormi quando foi em outro dia quando sentei no no teclado para a primeira tentativa que

eu fiz eu consegui executar.  <br>

Por quê.

Porque eu já tinha aprendido.

Eu já tinha estudado o suficiente para aprender aquilo mas como eu estava tão envolvido e tão estressado

e cansado das múltiplas tentativas frustradas no dia seguinte eu consegui fazer da primeira vez que

eu precisei de tempo de descanso para conseguir absorver aquele conhecimento e aí consegui aplicar.

Então a orientação a objeto não é alto você vai aprender do dia pra noite não é uma noite de sono que

vai fazer com que você aprenda mas é muito importante que você veja os conceitos que você faz dos exercícios

que você tenta resolver os desafios e aí dois dias com o passar das semanas eu tenho certeza que todos

esses conceitos vão ficando meio mais claros para vocês e tudo vai fazer bem mais sentido.

Então fico por aqui na sala e até próximo para a gente praticar aquilo que a gente já viu na parte teórica

de orientação a objeto só o começo tem muita coisa para a gente ver durante o capítulo.


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