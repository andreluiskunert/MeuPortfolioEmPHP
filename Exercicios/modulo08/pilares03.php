<div class="titulo"> <center> <u>   Pilares #03 </u></center></div>

<div>
    <p1> Orientação a Objetos_Pilares #03 </p1>
    <h2>
    <p>Transcrição: </p> <br>
    <div>
    Pessoal agora vou falar para vocês.

O princípio da orientação a objeto o chamado polimorfismo.

Essa é uma palavra que é dividida em duas partes a palavra de origem grega brincando.

Não sei exatamente a origem do grego.

Não fui pesquisar sobre isso não mas a palavra é dividida em duas partes.

Primeiro a Poli porque quer dizer múltiplas e morre isomorfismo aqui no caso e múltiplas formas.

Essa seria se a gente divide a palavra o que significa polimorfismo ou seja múltiplas formas.

O que é que significa isso na prática dentro do conceito de programação que tem na verdade duas formas

de polimorfismo polimorfismo estático e polimorfismo dinâmico. <br>

Me lembro que teve uma prova que eu fiz há muito tempo atrás acho que aos 15 anos atrás e a prova cobrava

polimorfismo estático eu não sabia que tinha um polimorfismo estático e só conhecia o termo polimorfismo.

Proponho morfismo de que é exatamente o que nós vamos focar mais nessa aula mas o polimorfismo estático

e a sobrecarga de métodos o que é sobrecarga sobrecarga quando você cria duas funções por exemplo dois

métodos com o mesmo nome você vai lá e cria aqui por exemplo function Photoshop function.

E aí você cria

há o mesmo nome só que essa aqui vai receber nenhum parâmetro e essa aqui vai receber um parâmetro b

por exemplo certo ou seja você tem duas funções que elas recebem tem o mesmo nome e que recebem uma

quantidade de parâmetros diferentes.

Isso em PHP não existe.

Então isso aqui só vou cortar coisa que não existe em PHP.

Você não consegue ter uma sobrecarga de metro ou seja dois metros usando exatamente o mesmo nome dentro

do mesmo contexto você consegue ter dois metros com o mesmo nome desde que eles estejam em arquivos

separados desde que eles estejam em contexto separados e um objeto pessoa que tem o metro do andar.

Você tem um outro objeto chamado animal que tem um metro não dá o cachorro que tem um metro no andar

então você tem o mesmo método mas dentro de contextos diferentes ou seja dentro de classes diferentes

e se você consegue mais o PHP não aceita sobrecarga de método.

Então como é que você faz para chamar um método usando parâmetros diferentes se você usa a técnica do

parâmetro padrão que a gente faz.

Você cria os parâmetros e os últimos parâmetros você coloca o valor da foto.

E aí você pode chamar aquele método de formas diferentes passa num parâmetro 2 De acordo com aquilo
 
que você colocou lá no método certo. <br>

Então o fato é que a sobrecarga de método não é suportada em PHP nem mesmo para construtores.

Você tem um consultor você tem apenas um único construtor que você pode informar.

Por exemplo usar o parâmetro padrão para ter várias formas diferentes de chamar o mesmo construtor a

gente já viu sobre isso.

Então pra você ter o polimorfismo dinâmico que é o foco aqui primeiro a gente tem que ter uma herança.

Então vou pedir licença pra vocês rapidamente certo pra falar um pouquinho de linguagens que têm tipos

definidos.

O que eu não quero dizer com isso.

Como você tem no caso PHP você define uma variável se não associar um tipo àquela variável certo.

Então esse conceito de polimorfismo vai acabar o polimorfismo dinâmico já que o Estado não está presente

em PHP que não tem sobrecarga o dinâmico ele vai estar presente em alguns contextos tá certo eu vou

mostrar pra vocês mas ele é mais associado a linguagens que são fortemente dissipadas ou seja o Java

é a linguagem fortemente para quando você define uma determinada variável ou se associa àquela variável

tipo uma vez que você associa aquela variável tipo você só pode criar só por atribuir valores daquele

tipo.

Eu falei pra vocês que uma classe define o tipo.

Então se você vai definir uma variável inteira você vai colocar provavelmente algum motivo a recebe.

3 Você aqui seria um código em Java o código PHP seria apagar o tipo da variável que você não pode ter.

A gente sabe que uma variável em PHP começa pelo dólar.

Isso é um código da HP ou seja a variável a ela pode receber por exemplo a letra A.

O tipo não está presente na definição de uma variável variável na linguagem fortemente padrão na verdade

na linguagem tipo dinâmico ou linguagem fracamente padrão. <br>

Porque você não amarra o tipo a determinada variável e quando você tem linguagens que têm os tipos amarrados

digamos assim vou achar pra você quando você tem uma herança você tem um carro tendo sido que tem uma

Ferrari.

Normalmente quando você vai criar um objeto olhando o que você tem é a seguinte situação para enfocar

nesse momento aqui você tem o tipo de uma variável certa que não é PHP deixando claro mas só para explicar

o conceito de polimorfismo depois você fala um pouquinho de como isso pode ser aplicado em PHP.

Então você tem um tipo Civic.

Quando você define que uma determinada variável C é do tipo cívico que normalmente vai acontecer você

vai distanciar um objeto do mesmo tipo como eu coloquei aqui ou o Civic que aponta para esse Civic do

lado.

Ou seja cívico e cívico você tem exatamente o mesmo objeto de um lado do tipo e a instância do outro

lado batendo o tipo com instância certa.

Mas quando você faz esse tipo de coisa não poderia como eu falei pra vocês que não existe essa comunicação

nesse sentido certo esse tipo de comunicação aqui é proibido você não consegue distanciar uma variável

do tipo Civic e atribui uma Ferrari.

Por quê.

Porque uma Ferrari não é um Civic ou seja a relação de amigo não vai bater nesse sentido.

Então no caso o que é que você pode fazer é que você pode fazer é criar uma variável do tipo mais genérico

como é o caso em que o carro era o tipo mais genérico e associar um valor do tipo Civic.

Ou seja nesse caso como eu criei uma variável mais genérica eu consigo distanciar um objeto mais específico.

Em outras palavras se você não será um objeto mais específico você pode atribuir esse objeto do tipo

mais genérico se eu instancia aqui uma Ferrari eu consigo associar essa Ferrari ao tipo mais genérico.

Por quê. <br>

Porque toda a Ferrari é um carro todo o Civic é um carro então como eu consigo digamos assim tratar

o Civic de uma forma mais genérica do ponto de vista de um carro.

Como consigo tratar uma Ferrari na forma mais genérica usando uma variável do tipo carro eu consigo

fazer essa associação lembrando que tal polimorfismo uma múltipla forma de voltar aqui para tirar esse

monte de coisa que é certa a múltipla forma está no fato de que usa na mesma variável seja colocar aqui

em vermelho fica melhor a mesma variável C.

Nesse ponto aqui ele tem forma de Civic e na linha seguinte a mesma variável C tem forma de Ferrari

ou seja você consegue ter uma variável que é do tipo mais genérico do tipo carro uma hora tendo o Celta.

Você foi promovido no trabalho juntou dinheiro você trocou o Celta por um Corolla você virou diretor

da empresa presidente da empresa troca o Corolla por uma Land Rover ou seja você consegue em cima da

mesma variável e trocando os subtipos os tipos mais específicos mas você trabalhando com o nome da variável

e com o tipo da variável mais genérico legal eu entendi essa explicação só que no caso do PHP PHP não

tem tipo como é que você vai aplicar o polimorfismo em que contexto é aplicado polimorfismo a gente

viu que você consegue aplicativos as funções. <br>

Então por exemplo eu consigo criar em PHP uma função chamada estacionar e essa variável ser da função

recebe um tipo Civic.

Nesse caso eu só vou conseguir passar para essa função objetos distanciados do tipo C busquei ou sílica

ou então qualquer classe que é que decide.

Vamos supor que você crie lá um outro subclasse chamada Civic esporte ou seja um Civic esporte Civic

é um Civic esporte e um Civic que também é o carro certo se você tiver uma herança você poderia passar

mas no caso eu não conseguiria passar para esse método tinha uma Ferrari.

Por quê.

Porque eu sinto que na Ferrari ele ia bater em que os chips são diferentes ou seja essa relação na horizontal

não é possível o que significa que você não vai conseguir passar outro carro a não ser o Civic ou algo

que ande de Civic.

No caso de você define o tipo de variável mais genérico como é o carro.

Aí sim você vai conseguir passar um Civic.

Aí sim você vai conseguir passar uma Ferrari.

Por quê.

Por conta do polimorfismo.

Nesse caso você definiu o tipo mais genérico para o parâmetro dessa função.

Você até poderia não ter definido nada mas você quer amarrar que só vai ser passado pra essa função

tipo carro.

Então se você passa alguma outra coisa ele não vai permitir receber o outro objeto que não seja o carro

mas pode receber tanto o carro como qualquer outra.

Outro tipo que é de carro como é o caso de Civic de Ferrari.

Aqui você tem muito pela forma.

Por quê.

Porque a variável C uma hora vai ter a forma de Civic.

A variável ser um órgão a forma de Ferrari. <br>

A variável C.

Eventualmente você vai criar aqui um outro tipo aqui ou criar um tipo roxo aqui.

Por exemplo aqui vai ter um Celta.

Então colocar aqui um

Celta certo então nem tinha inicialmente um Celta mas como o Celta era de carro você vai conseguir também

passar pra cá o Celta ou seja o carro vai assumir múltiplas formas dependendo do tipo que você faz mas

obviamente nesse caso tem que haver uma relação de herança.

Então se fazer mais ou menos uma analogia que esses ampliam essas figurinhas mais malucas se você define

um tipo mais genérico o quadrado é o subtipo o subtipo sempre vai caber dentro do conceito.

O tipo mais genérico né só na alusão de que essa bolinha de fato coube dentro desse conceito do quadrado.

Do mesmo jeito que o Verdinho aqui o triângulo verde também coube dentro do conceito do quadrado conseguiu

encaixar o verde dentro de um quadrado.

Apesar de serem diferentes mas tudo era do outro jogo do tipo do outro.

Aqui no caso essa relação diagonal só pra dizer que não consigo.

Eu já falei várias vezes essa relação diagonal não existe.

Como essa relação diagonal não existe. <br>

Eu não posso atribuir nesse sentido eu não posso atribuir o circo a uma Ferrari ou um Ferrari a um Civic.

O pessoal espera que tenha ficado claro esse conceito quando a gente aplicar isso na prática.

Com certeza tudo isso vai ficar um pouco mais e mais fácil de ser entendido.

Mas a grande ideia né é o grande princípio por trás do polimorfismo.

Primeiro tem a herança que é o fato de que você precisa ter uma herança para ter o polimorfismo dinâmico

e aqui o fato de que você consegue o subtipo é associado a um tipo mais genérico.

Você pega um tipo mais específico e associa a um tipo mais genérico mais para você conseguir fazer isso.

Você precisa que antes tenha tido a herança ou seja uma relação.

Mas tudo isso a gente vai ver na prática em exercícios. <br>

Eu tenho certeza que os pilares a orientação a objeto vão ficar mais claros.

Depois de colocar tudo isso na prática até a próxima aula ainda pra gente falar uma discussão muito

rápida sobre abstração que é o quarto pilar de orientação a objeto a gente já falou um pouco sobre sobre

isso.

A abstração na qual a gente completa os quatro pilares orientação objeto disparou.


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