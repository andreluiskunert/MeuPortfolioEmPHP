<div class="titulo"> <center> <u>   Pilares #02 </u></center></div>

<div>
    <p1> Orientação a Objetos_Pilares #02 </p1>
    <h2>
    <p>Transcrição: </p> <br>
    <div>
    Só no ano passado nós falamos um pouco sobre encapsulamento.

Agora quero falar sobre o segundo pilar de orientação objeto que é herança certo herança.

Ela surge com a necessidade de uso de código certo falou um pouquinho antes de entrar propriamente na

herança mas temos duas formas três formas básicas e reuso de código.

Uma delas é o contra o ser contra o que você vai copiar o código e colar em outra parte já tem um código

que faz uma coisa preciso usar esse trecho não contra o ser contra o V e coloca em outro ponto pra você

usar.

Esse é um tipo de estratégia não muito boa obviamente você vai duplicar o código é importante que você

não duplique.

Existem situações muito informais digamos assim alto no código que bem simples e um código de duas três

classes que quer fazer um código temporário que eu quero resolver um problema aqui pontual pra selar

para acessar um lixo de arquivos pra fazer alguma coisa.

Eventualmente você acaba usando no dia a dia pra coisas muito pontuais e códigos que não precisam ser

levados a sério então se eu falar pra você rapaz eu nunca usei um contra o ser contra alguém na minha

vida pra duplicar código já usei sim mas essa não é uma forma digamos assim interessante pra você aplicar

em projetos reais então esse tipo de uso de código é muito ruim porque uma vez que esse código precisa

ser alterado precisa ser evoluído. <br>

Tem algum banco nesse código você precisa replicar a correção ou mesmo replicar a modificação em vários

locais e se isso crescer muito fica muito difícil você ter controle do seu código então basicamente

o que nós temos aqui de uso de código é composição e herança e a composição é quando você tem uma relação

tem ou tem ou tem várias alguma coisa ou simplesmente tem eu vou mostrar pra vocês alguns exemplos.

O carro tem um motor ou seja uma relação de composição imaginado o carro na vida real você realmente

percebe que o caldeirão.

E se você for mapear isso para algum de orientação objeto obviamente você vai ter uma classe carro você

vai ter uma classe Motor e a classe Carro.

Um dos atributos de carro é em relação a referência para a classe Motor certo então existe uma relação

tem uma relação e composição no qual um objeto mais complexo é formado por objetos mais simples.

E aí você pode ter o carro tem um objeto do tipo motor o carro tem um ar rei de objetos do tipo porta

o carro tem um objeto chamado direção e aí você vai formando tem um carro tem um arranjo de rodas e

aí você vai formando o objeto mais complexo.

A partir de objetos mais simples e obviamente além de o objeto ter outros objetos objetos também podem

ter dados mais básicos.

Por exemplo um carro tem uma velocidade atual e velocidade atual pode ser um valor ou um valor real

por exemplo um carro ele pode ou não ter um ar condicionado e você pode ter uma variável booleana para

dizer se ele tem ou não ar condicionado e coisas do tipo.

Então quando você tem um uso de código baseado em composição ou composição série barateia o uso de código.

Normalmente você mapeia esse reuso de código nessa composição quando você tem uma relação entre objetos

do tipo tem.

Ou seja quando o carro tem um motor você tem seu uso a partir de composição.

Quando um carro tem portas você tem um uso a partir de uma composição que no caso provavelmente vai

ter uma rede portas na casa.

A casa tem uma cozinha ou seja você tem o objeto mais complexo a casa você pode quebrar esse objeto

mais complexo e vários objetos menores para que você consiga ter o uso.

Eventualmente uma casa tem uma cozinha e um escritório também pode ter uma cozinha ou seja um outro

objeto pode apontar para a cozinha assim como casa ponto para a cozinha certo.

Ou seja uma quitinete ou sei lá uma lanchonete pode ter uma cozinha então eventualmente você pode ter

outros objetos apontando para um objeto mais simples no caso é a cozinha então o carro tem um motor

assim como o Moto tem um motor assim como o avião tem um motor. <br>

Dependendo do mapeamento dependendo a forma como você vai precisar transformar o mundo real em software.

Isso pode ser uma modelagem Valongo certo.

Então quando você tem uma relação de herança normalmente você tem uma frase que é composta pura e então

por exemplo se Vicky é um carro.

Nesse caso você tem uma relação de herança ou seja tudo o que o carro tem sido o que tem ou seja um

carro ele é um conceito mais genérico e o Civic é um conceito mais específico.

Então tudo que o carro tem o Civic tem um carro.

Ele acelera o caule freia o carro tem rodas ou seja características podem ser usadas a partir desse

mecanismo orientação objeto chamado herança.

Assim como você recebe características dos seus pais o objeto também pode receber características de

um objeto de uma classe pai ou seja você tem essa relação de a classe pai para uma classe.

Filho de um Superclássico como o já mencionado para uma subclasse que é uma nomenclatura que a gente

usa então quando você tem esse tipo de relação e eventualmente eu normalmente seria melhor dizer eventualmente

não.

Normalmente você vai mapear para um herança certo não obrigatoriamente você precisa fazer isso.

Você pode usar alguns padrões de projeto substituir herança por oposição como é um padrão de projeto

chamado decorei.

Não vou entrar muito no mérito da questão mas é possível você trocar até porque preferencialmente é

melhor você realizar via composição do que vi herança.

Se você pensar em exemplos do mundo real você vai perceber que tem mais composição do que herança uma

casa feita por quarto um quarto tem parede a parede tem tijolo e o quarto tem um tapete.

O quarto tem cama então você vai ver muito mais no mundo real.

Uma relação de composição do que propriamente uma relação de herança.

Assim também acontece no software certo.

Por exemplo o gato é um mamífero.

A maçã é uma fruta ou seja nesses cenários você pode ter o uso de código.

Você pode aproveitar métodos e atributos a parte de herança.

Porque você tem uma relação tão normalmente herança e quando você tem uma relação e um você mapeia esse

tipo de relação para uma herança.

Ou seja você usa código usando a técnica de herança que é um dos pilares da orientação a objeto.

E quando você tem uma relação tem ou se usa código a partir de composição.

Exemplo de herança por exemplo você tem aqui um conceito não há uma ideia mais genérica de animal é

um conceito bem genérico. <br>

Muitas coisas se encaixam digamos assim nesse conceito de animal.

E aí você começa a especificar mais a partir do medo que você vai descendo na hierarquia.

Você vai especificando e tornando o conceito mais bem definido e ao mesmo tempo você vai especializando

em menos objetos digamos assim vão se encaixar nesse perfil exatamente né.

Por exemplo um animal de baixo animal seguindo na hierarquia você tem por exemplo animal pode ser o

mamífero.

O animal pode ser um grande filho e tem outros tipos de animais dentro de mamífero você já especificou

um pouco mais mas você tem como especificar ainda mais.

Pode ser um mamífero aquático um pode ser um mamífero terrestre assim como você tem um anfíbio.

Você tem outras classificações até chegar por exemplo num sapo então aqui você tem claramente uma relação.

Por exemplo um mamífero aquático é um mamífero mamífero e um animal anfíbio é um animal sapo e um anfíbio.

Ou seja quando você sai do mais específico para o mais genérico sempre será verdadeira essa expressão.

é o contrário nem sempre é animal é um mamífero.

Nem sempre pode ser que seja um mamífero mas dependendo da situação o animal pode ser um anfíbio.

Certo.

Essa relação digamos assim na horizontal ou seja um anfíbio é um mamífero mamífero seu anfíbio não é

verdadeiro.

Certo ou seja um animal mamífero aquático ele é um sapo não um sapo terrestre e não entra essa relação

horizontal não acontece do mais específico para o mais genérico sempre é verdadeiro ou seja mamífero

aquático.

Ele é um mamífero ou seja ele consegue herdar as características de mamífero certo assim como mamífero

terrestre também.

Essas características de mamífero e mamífero e as características de animal a partir do momento que

você vai subindo nessa árvore.

Será que ia por exemplo por exemplo do animal menos métodos e menos atributos.

Você vai ter nas classes mais genéricas.

Por quê.

Porque você só coloca um método ou um atributo dentro de animal.

Se absolutamente todos os animais tiverem aquela característica se todos os animais tiverem aquele comportamento

então se todos os animais respiram então você pode colocar no nível do animal respirar.

Eu posso colocar por exemplo que todos os animais eles mamam.

Não.

Você só vai colocar isso dentro de mamífero porque os mamíferos são caracterizados por seres que mamam

certo. <br>

Dando exemplo aqui você tem alguma exceção aí do ponto de vista da biologia que na minha área está mais.

Você vai colocar apenas o método não apenas o comportamento e o atributo no nível que dali para baixo

todos os animais e todas as subclasses.

Tudo aquilo que vier depois é mais específico atender àquele requisito.

Então quanto mais você vai generalizando tortura mais e menos informações você vai acabar colocando

porque é mais genérico então pra ser mais genérico obrigatoriamente você vai acabar tendo menos funcionalidades

à disposição a partir o momento que você vai descendo na árvore você tanto recebe por herança aquelas

aqueles comportamentos e atributos da classe pai ou seja um mamífero aquático recebe os comportamentos

e atributos definidos em mamífero.

O mamífero aquático também recebe os comportamentos e atributos definidos em animal.

Ou seja tudo o que está em toda a minha era aqui é passado como herança não apenas para o filho mas

para o neto para o bisneto em toda hierarquia de herança.

Outra questão importante é a questão da nomenclatura né.

Você você está sempre com você está comunicando com outros desenvolvedores você tem a nomenclatura clara

na sua cabeça é muito fácil pra você conseguir realmente transmitir uma informação de uma pessoa para

a outra.

Por isso que os termos associados a um paradigma é importante que você conheça os conceitos básicos

que futuro de dados.

O que algorítimo o que é um laço e repetição o que era encapsulamento polimorfismos pilares da hora

tudo isso é importante você ter na cabeça pra você comunicar bem entre os desenvolvedores.

Outro conceito é o conceito de super classes subclasse quando você tem uma relação de herança você tem

a Superclássico como sendo a classe pai e obviamente a super classe.

Eventualmente pode ser uma subclasse de outra super classe mais acima na hierarquia mas uma relação

entre duas classes como uma relação de herança.

Você tem a Superclássico como será a classe Python.

é muito comum você falar a classe baixa classe filha na classe que herda os comportamentos da classe

pata e fazem alusão à herança que a gente recebe dos nossos pais pais e filhos mas também é usado esse

termo super classe para a classe mais genérica e subclasse polaco para a classe mais específico ou seja

uma subclasse eventualmente pode ser uma super classe de outra subclasse mais específico já que você

pode ter uma hierarquia de herança maior e você tem aqui determinada classe que tem uma ou outra que

tem um ao outro aqui e pode ter um hierarquia de muitas classes digamos assim. <br>

Então em relação a essas duas essa que a sopa essa que a subir em relação a essas duas super classes

é que a subclasse em relação a essas duas super classes que a subclasse estão dependendo de onde você

estiver na hierarquia uma determinada classe pode ser super subclasse ou pode ser uma classe pai de

quatro filhos.

Nem toda hierarquia tem herança certa ausência tem uma hierarquia que não obrigatoriamente tem uma herança

é comum em alguns hierarquias você conseguir mapear uma determinada hierarquia pra herança mas nem sempre

isso é verdade.

Por exemplo pegando aqui um hierarquia que não tem herança certa ou sem herança.

Colocando aqui sem herança a hierarquia militar você tem um soldado e você tem um cabo que acaba sendo

superior ao soldado na hierarquia um sargento um tenente um capitão você tem um hierarquia mas não hierarquia

de e ou seja um capitão ele é um tenente não o tenente é um capitão não o sargento é um tenente não

o cabo e o sargento não.

Você não tem uma relação de hierarquia mas não há relação de herança.

Então esse foi o pilar da orientação a objeto herança.

Na próxima aulas vamos falar sobre polimorfismo certo polimorfismo.

Ele é um tema simples de ser aplicado não é difícil certo mas ele talvez seja o mais difícil de explicar

esse primeiro momento mas não é fácil não é difícil.

Na verdade você aplicar o polimorfismo dependendo do tipo de polimorfismo precisa ter o conceito de

herança na cabeça que eu já expliquei nessa aula na próxima aula vai ver o terceiro pilar de orientação

a objeto que é o polimorfismo e outros para lá espera que esteja sendo claro essas explicações sobre

os pilares da orientação a objeto como já falei anteriormente.

Há o conhecimento associado a esse paradigma.

Ele vai enfim com o tempo e ele vai vir com a prática momento que você começa a praticar o medo que

você começa a ver que você fez.

Você modelou o seu sistema de uma forma errada que não está sendo fácil manter o sistema.

Nesses momentos é que você vai de fato amadurecer.

Sobre esse tema de fato você vai amadurecer sobre o uso de boas práticas na hora de codificar.

Então obviamente entender esses princípios conhecer as nomenclaturas saber exatamente os pilares e os

conceitos é um passo extremamente importante. <br>

Mas aí existem outros passos que eu passo de pegar esses conceitos e aprender a colocar na prática eu

diria que é um conhecimento que nunca vai ter fim né.

Você vai estar sempre melhorando você vai estar sempre escrevendo o código com maior simplicidade organização

melhor com o melhor encapsulamento usando a herança quando realmente faz sentido usar herança e deixando

de usar herança quando não faz sentido não tem como você explicar porque cada cenário é um cenário não

tem como você dizer Olha você aplica sem herança no cenário a B e C.

Não funciona assim e muito na prática. <br>

Então se você está tendo contato com os princípios a orientação a objeto nesse primeiro momento o mais

importante é que os conceitos estejam claros e como você vai aplicar isso na prática a gente vai ver

ainda em alguns exemplos nesse capítulo e principalmente onde vai trabalhar mais esses conceitos em

projetos maiores que exatamente quem vai fazer mais o final do curso.

Então fico por aqui.

Na segunda aula dos princípios dos pilares da orientação a objeto a herança na próxima aula veremos

o terceiro pilar que é polimorfismo.

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