<div class="titulo"> <center> <u>   Pilares #04 </u></center></div>

<div>
    <p1> Orientação a Objetos_Pilares #04 </p1>
    <h2>
    <p>Transcrição: </p> <br>
    <div>
    Agora vou falar do quarto pilar da orientação a objeto que é a abstração não preparei nenhum desenho

previamente para falar sobre a abstração então coloca aqui uma abstração.

Eu já comentei rapidamente sobre o conceito de abstração.

Na verdade o que você tem é você tem o mundo real.

Então você tem aqui o real ou seja aquilo que é a referência para que você consiga fazer o mapeamento

disso para software no momento que você tem o mundo real você vai precisar mapear essa complexidade

do mundo real para um software. <br>

Quando você faz esse mapeamento pra um determinado software isso a gente chama de abstração então você

tem que uma abstração e eventualmente se você tiver um outro software que precisa pegar aquele mesmo

conceito no mundo real e gerar uma abstração do lado certo.

Essa abstração ou seja o nível de complexidade dessa abstração vai depender do nível de problema que

você esteja tentando resolver dentro de um software.

Obviamente ao mundo real você nunca irá chegar perto do mundo real seja o mundo real ele tem complexidades

que não fazem sentido.

Por exemplo pra um sistema vamos supor que você tenha um sistema de estoque.

Suponha que você tem um sistema de estoque mais simples que as dimensões do produto não fazem menor

diferença pra você. <br>

A única coisa que você quer controlar é o nome do produto e a localização do produto do produto dentro

de um almoxarifado por exemplo dentro de um local de armazenamento.

Você quer ter a quantidade de produtos que tem mais as dimensões do produto pra você não faz diferença

seja o seu negócio.

Aquilo ali é irrelevante certo.

Já uma outra empresa por exemplo a Amazon que tem o maior centro de distribuição do mundo nem sei se

é verdade só sobre um exemplo aqui que é todo automatizado robotizado e os produtos são armazenados

de uma forma que visa a otimização máxima do espaço ao lado do galpão que tem que ter um determinado

produto não é armazenado pela pessoa não é organizado de e sim por categoria 5 tamanho tem as dimensões

da caixa daquele produto é essencial para que consiga ser aplicado um padrão de otimização e aí sim

você tem o seu o seu almoxarifado lá o seu estoque organizado da forma mais otimizada possível e é possível

que lesse nesse cenário nessa abstração no mundo real o produto precisa ter as dimensões da caixa e

já é outra empresa não.

Ou seja o mundo real vai ter além do do tamanho da cache vai ter o tipo de material da caixa.

Se a Caixa vai ter alguma coisa escrito ou não será que isso é relevante para o sistema de estoque.

Provavelmente não.

A Caixa amassa ou não.

Talvez não seja importante ou talvez seja tê la uma flag frágil ou não.

Então esse princípio da abstração na orientação objeto ela tem como objetivo olhar o mundo olhar o que

está acontecendo no mundo olhar as relações entre os objetos tudo no mundo e objeto pessoas objetos

e processos são objetos coisas que muitas vezes não está no mundo real e que é usado no software só

para efeito de controle e de organização de código. <br>

Nem tudo o que está no mundo real vai para o software e nem tudo que está no software existe no mundo

real existem coisas que são específicas do software coisas que são específicas no mundo real que não

precisam ser mapeadas ou não precisam ser bem extraídas pra dentro da sua solução ou seja dentro do

seu software.

Então a abstração é exatamente esse princípio que diz que o mundo real é uma coisa o seu software o

outro você precisa mapear e ter a sensibilidade daquilo que você precisa abstrair para dentro do seu

software.

Isso muito provavelmente vai demandar de você uma habilidade para conversar com o cliente pra entender

como o cliente quer receber o software quais são as necessidades.

Que tipos de comportamento precisam ser mapeados.

Que tipo de atributos precisa precisam estar presentes dentro do objeto para que você realmente tem

as informações relevantes e necessárias para atender a necessidade do software então é exatamente isso

que se trata.

A abstração não obrigatoriamente existe.

Na verdade não existe uma palavra reservada dentro da linguagem para dizer como você aplicar abstração

na verdade abstração é você olhar o mundo real conseguir extrair as informações relevantes importantes

por seu software e mapear isso dentro das suas classes dentro dos seus objetos usando a linguagem PHP

mas não necessariamente na verdade nem tem uma palavra reservada ou algo que seja refletido encolhe

o que é refletido em código é exatamente aquilo que você mapeou aquilo que é relevante trazer para dentro

da sua solução certo são só para dar um fechamento.

Outro pilar importante da orientação objeto que é a abstração tem que ter sensibilidade para entender

que por mais que seja o mesmo conceito no mundo real é o mesmo conceito de produto só que o produto

para determinada empresa vai ter determinadas características para a outra empresa uma tem características

completamente diferentes porque o negócio das duas empresas mudou e é muito importante você ter essa

capacidade não apenas de conseguir abstrair o mundo real mas também de comunicar bem com seu cliente

para extrair as informações necessárias. <br>

Já vai aqui uma dica interessante que não necessariamente tem a ver com a abstração que é um conceito

de comunicação o bico anel comunicação universal tem.

Eu já falei várias vezes que o nome das coisas é importante você ter um bom nome para uma variável importante

você ter um bom nome para uma função importante você ter um bom nome para uma constante é importante

você ter um bom nome para uma classe importante.

é bom também nomes para as instâncias como você criar uma instância de uma classe.

O nome da instância que é uma variável também é muito importante que você escolha.

Mas é importante que esses nomes sejam nomes que sejam familiar ao negócio que você está desenvolvendo.

Ou seja o problema que você está tentando resolver com um sócio então esses nomes muito provavelmente

são obtidos a partir dos especialistas quem são os especialistas em determinados negócios.

Você vai fazer um sistema para o hospital.

Provavelmente você vai precisar conversar com os médicos.

Se você vai fazer um sistema para a universidade você vai precisar conversar com os professores com

os alunos com as pessoas do administrativo para entender quais são os fluxos os negócios e esses nomes

que as pessoas dizem são muito importantes se esses nomes que você pega a partir do momento que você

conversa com os especialistas esses nomes estão no core e estão refletidos na organização do seu software.

é muito mais fácil que a comunicação entre todo o mundo seja mesmo seja por isso o nome de comunicação

ubíqua ou comunicação universal ou seja o desenvolvedor fala mesmo amigo da pessoa que gera a especificação

que falam a mesma língua de quem trabalha lá na empresa ou seja de quem é especialista no negócio.

Todo mundo usa as mesmas nomenclaturas.

Isso facilita bastante.

Ou seja como parte de abstrai o mundo real para o software é muito importante que você escolha alguns

nomes e esses nomes nada melhor do que pegar esses nomes e usar os mesmos nomes do especialista.

Eu já participei de projetos que os codificadores colocaram um nome no código.

E aí tinha aquele mapeamento acolá a gente diz isso no código quer dizer aquele conceito do mundo real

dado o processo lá da empresa.

A gente usa essa nomenclatura mas isso quer dizer essa outra nomenclatura que o cliente fala sempre

que o cliente diz isso é correspondente a essa outra classe que tem um nome diferente.

Então você tem esse tipo de mapeamento. <br>

O que o cliente chama uma coisa que você colocou no código.

A outra gera uma dificuldade de comunicação então isso digamos assim como um princípio importante também

para abstrair o mundo real do software temos nomes digamos assim universais e todo o mundo seguir a

mesma nomenclatura o cliente qual a mesma coisa o qualificado ou fala a mesma coisa o especificado ou

fala a mesma coisa é muito importante também para a qualidade do seu software e para a qualidade dessa

abstração do mundo real.

Então fico por aqui.

Na próxima hora a gente vai voltar para nossas práticas para a gente qualificar e ver alguns dos princípios

de orientação objeto dentro do PHP na prática ele espera lá.

   

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