<div class="titulo"> <center> <u> Classe Abstrata_teoria</u></center></div>

<div>
    <p1> Orientação a Objetos_Classe Abstrata_teoria </p1>
    <h2>
    <p>Transcrição: </p> <br>
   <div> Na próxima aula vamos falar sobre classe abstrata e na aula passada nós falamos sobre interface cérebro

eu queria aqui fazer um desenho bem simples pra tentar deixar claro onde é que esse conceito se encaixam

entre si.

Vou colocar aqui um ponto nessa linha do tempo vou colocar um outro ponto aqui certo aqui.

Vamos imaginar que nem assim nessa linha que irá terminar em qualquer caso.

Nesse ponto eu tenho zero por cento dos métodos. <br>

Qualquer que Métodos implementados e implementados nesse outro lado eu tenho cem por cento dos métodos

a mesma coisa todos implementados e comentados certo.

Então aqui no meio até um zero por cento.

Aqui eu tenho cem por cento e aqui no meio tenho que instalar metade dos Métodos implementados 20 por

cento dos Métodos implementados e tal.  <br>

Quando você tem zero por cento dos Métodos implementados seria o caso aqui da interface tão bem aqui.

Certo.

Aqui você tem um cenário onde a interface se encaixa.

Por quê.

Porque a interface daqui interface nem onde os métodos são implementados.

Certo.
 
Então nós temos a interface como 0% dos Métodos implementados e aqui nessa outros temos você tem a classe

concreta uma classe concreta ou seja uma classe que pode ser distanciada.  <br>

Certo Essa classe obrigatoriamente tem que ter cem por cento dos Métodos implementados e uma interface.

Por outro lado tem zero por cento dos Métodos implementados ou seja a interface definha a assinatura

dos métodos enquanto a classe concreta tem que ter todos os Métodos implementados.

E aqui no meio tanto partindo hoje coloca aqui uma cor diferente tanto partindo daqui do zero por cento

como chegando aos 100 por cento e ocupar o que todo esse meio.

Certo Você tem a classe abstrata.  <br>

Aqui você tem uma classe abstrata ou seja uma classe abstrata ela pode ter todos os métodos sem corpo

ou seja métodos abstratos que definem apenas a assinatura do metro no mais não tem um corpo.

Você pode ter uma classe abstrata que tem todos os Métodos implementados.  <br>

Qual é a primeira consequência quando você define uma classe abstrata a primeira coisa que vai acontecer

quando você define uma classe abstrata é que uma classe abstrata não pode ser distanciada.

Ou seja você coloca uma grande não pode

C distanciar se deu certo ou seja em outras palavras você não pode chamá lo.

Mil usando uma classe abstrata. <br>

Mil não pode ser chamado porque é uma classe abstrata não pode ser distanciada uma classe concreta ela

pode ser distanciada sim mas como um requisito digamos assim com a obrigatoriedade de uma classe concreta

sempre terá todos os métodos implementados.

Uma classe abstrata mesmo que ela tenha todos os métodos implementados ela não pode ser distanciada

mais de uma classe abstrata ela tem a possibilidade se ela quiser ela pode ter métodos abstratos e métodos

abstratos são métodos sem cor ou seja o método não foi definido a implementação para aquele método.

Vamos supor um cenário mais realista você vai criar. <br>

Nós criamos uma interface chamada animal você poderia ter criado uma classe abstrata chamada animal

nessa classe abstrata chamada animal você pode ter o metro respirar como sinal abstrato porque você

não sabe como animal de forma genérica nem todos os animais expiram mas você pode ter por exemplo um

método se locomover e você pode saber implementá lo locomover de uma forma genérica ou o contrário talvez

o respirar você consiga dar implementação mais locomover cada animal se é baixíssimo e movimentar de

uma forma diferente. <br>

O ser humano vai usar as pernas talvez o ameba vai fazer o outro tipo vai usar outro mecanismo para

se mover o cachorro vai usar as patas e o bicho vai usar as nadadeiras e tal.

Então você tem a forma de se locomover se mover é diferente mais a forma de respirar.

Todo mundo usa oxigênio por exemplo então você consiga dar uma implementação genérica.

Então talvez o animal como uma classe abstrata alguns metros alguns comportamentos estarão implementados

e outros comportamentos. <br>

Você sabe que obrigatoriamente vai existir mas você não sabe naquele nível de generalização como implementá

la.

Então você tem tanto bons usos para a interface.

Você pode definir interfaces que você simplesmente quer definir.

A assinatura dos metros é a grande vantagem na interface em que você pode ter uma classe de múltiplas

interfaces.  <br>

Como eu falei não seria mais ou menos o resumo assim você tem uma classe aqui e uma classe aqui você

usa a palavra existentes e só pode ter uma classe herdando de uma classe no outro cenário você tem aqui

uma classe e você tem diversas interfaces interface 1 2 e 3 então Interface Interface 2 interface 3.

Você pode ter uma mesma classe em implementando múltiplas interfaces.

Já comentei sobre isso.  <br>

Você também tem um cenário que você tem uma interface aqui e tem várias outras interfaces que encima

a interface 1 2 e 3 ou interface.

A interface B interface C e você tem uma interface em X aqui embaixo.

Qualquer site tem interface X que herda da interface a que era da interface B que era da interface C

ou seja a interface pode implementar ou estender múltiplas interfaces uma classe pode implementar múltiplas

interfaces mais um clássico só herda só estende uma única classe.

Mesmo sendo abstrato não importa se a classe aqui é uma classe abstrata ou se a classe de cima abstrata

classe para a classe A pode dar uma única vez.  <br>

Por isso que só o fato de ter classe abstrata não é totalmente flexível porque uma interface a mesma

tarde tem interface porque você consegue ter essa herança múltipla entre aspas.

Você consegue da obrigatoriedade de implementar determinadas funcionalidades.

Isso é interessante.  <br>

Então nós vemos um pouco do conceito algo de classe abstrata na próxima aula nós vamos implementar.

Um exemplo bem simples para a gente vê o uso de abstrato na prática usando a palavra abstract em PHP

um modificador abstrato modificador de acesso e mais um modificador de membro.

No caso o que é modificador de função de método para marcar um metro como abstratos ou mesmo uma classe

com uma abstração que vai te permitir criar métodos abstratos e uma vez criando metros abstratos uma

classe baixa está incompleta. <br>

Se você tem uma determinada classe ou gente concluiu você tem uma determinada classe e eu vou dizer

que um método concreto um metro está implementado e o verde é um método abstrato seria amarelo.

Então se você tem uma classe que tem 1 2 3 tem 4 metros certos.

Essa classe pode ser uma classe abstrata Sim eu posso ter uma classe abstrata.

Ainda assim eu posso ter uma classe que eu abstract ambos abstratos ou seja mesmo com todos os métodos

concretos. <br>

Eu posso ter uma ou outra classe aqui que eu vou colocar que também é uma classe abstratos exceto uma

classe abstrata que ela pode ter um método concreto pode ter um método abstrato ou seja Metro abstrato

ou colocar só como se fosse uma linha para dizer que não tem um método abstrato pode ter um método concreto

que pode ter outro método mais dois métodos abstratos. <br>

Não tem problema porque uma casa passo abstrata pode ter métodos abstratos como também pode ter métodos

concretos criando aqui um outro cenário você tem uma classe abstrata então coloca naquele novo abstract

para escrever escrevendo então acabou demorando mais café no rap mais uma uma classe abstrata pode ter

todos os métodos abstratos sem problema nenhum funciona mais ou menos como interface.

Nenhum método foi definido certo também pode ser um cenário de uso.

O que você não pode ter.  <br>

Você não pode ter até nada classe em que você quer que ela seja concreta e aí uma classe concreta obrigatoriamente

todos os métodos têm que ser implementado ou seja todos os métodos têm que ser concreto um pouco mais

que essa implementação seja implementação simplesmente retornar nulo ou você ter um método vazio não

tem problema mas esses métodos precisam estar definidos no caso de um interfone uma classe concreta

certo. <br>

Então alguns exemplos algumas ideias sobre a parte teórica em relação à classe abstrata e na proximal

a gente vai ver a prática daquilo que a gente vê na teoria na sala.
 </div>
<h3>Resultado será:</h3>
<hr>
<?php 
echo "é só teoria... ";

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