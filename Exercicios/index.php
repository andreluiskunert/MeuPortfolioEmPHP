<?php 
 session_start();
  if($_SESSION['usuario']){
     header('Location: login.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CursoPHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recurso/css/estilo.css">
    <link rel="stylesheet" href="recurso/css/exercicios.css">
</head>

<body>
   
    <header class="cabecalho">
      <h1> Meu Primeiro Curso de PHP </h1>
      <h2>Indice dos exercícios</h2> 
      <marquee > "Estudando PHP7 pela Cod3r..."</marquee>
    
    </header> 
    <nav class="navegacao">
      
  </nav>
    <main class="principal">
      <div class="conteudo"> 
        <nav class="modulos">
           <div class="modulo verde">
             <h3>Módulos 01 <br> Introdução PHP:</h3>
               <ul>
                  <li><a href="exercicio.php?dir=modulo01&file=ola"> PHP , HTML & CSS</a> </li> 
                  <li><a href="exercicio.php?dir=modulo01&file=html"> Intregação HTML </a> </li> 
                  <li><a href="exercicio.php?dir=modulo01&file=css"> Intregação CSS </a> </li> 
                  <li><a href="exercicio.php?dir=modulo01&file=comentarios"> Comentarios em PHP </a> </li> 
                  <li><a href="exercicio.php?dir=modulo01&file=desafio"> Primeiro Desafio  </a> </li> 

                </ul>
           </div>
           <div class="modulo vermelho">
             <h3>Módulos 02  <br> Revisão:HTML & CSS :</h3>
             <ul>
                  <li><a href="exercicio.php?dir=modulo02&file=tipos"> Tipo Inteiro</a> </li> 
                  <li><a href="exercicio.php?dir=modulo02&file=float"> Tipo Float</a> </li> 
                  <li><a href="exercicio.php?dir=modulo02&file=aritmeticas">Operações Aritmeticas  </a> </li> 
                  <li><a href="exercicio.php?dir=modulo02&file=desafioPrecedencia">Desafio Precedência  </a> </li> 
                  <li><a href="exercicio.php?dir=modulo02&file=string">Tipo de String </a> </li> 
                  <li><a href="exercicio.php?dir=modulo02&file=desafio_string">Desafio String </a> </li> 
                  <li><a href="exercicio.php?dir=modulo02&file=booleano"> Tipo Booleano </a> </li> 
                  <li><a href="exercicio.php?dir=modulo02&file=conversoes"> Conversôes  </a> </li> 
              </ul>
           </div>
           <div class="modulo azul">
             <h3>Módulos 03 <br> Intregando PHP com HTML & CSS:</h3>
             <ul>
                  <li><a href="exercicio.php?dir=modulo03&file=basico"> Variaveis </a> </li> 
                  <li><a href="exercicio.php?dir=modulo03&file=desafioEquacao"> Desafio Equação /resposta  </a> </li> 
                  <li><a href="exercicio.php?dir=modulo03&file=Atribuicao"> Tipos de Atribuições  </a> </li> 
                  <li><a href="exercicio.php?dir=modulo03&file=interpolacao"> Interpolação  </a> </li> 
                  <li><a href="exercicio.php?dir=modulo03&file=variaveisVariavel">  VariaveisVariavel </a> </li> 
                  <li><a href="exercicio.php?dir=modulo03&file=desafio_variavel_variaveis"> Desafio Variaveis_Variavel / Resposta </a> </li> 
                  <li><a href="exercicio.php?dir=modulo03&file=valor_referencia"> Valor vs  Referência </a> </li> 
                  <li><a href="exercicio.php?dir=modulo03&file=constantes">  Constantes</a> </li> 
             </ul>
           </div>
           <div class="modulo roxo">
             <h3>Módulos 04 <br>Tipos Basico e Variaveis: <br> </h3>
               <ul>
                  <li><a href="exercicio.php?dir=modulo04&file=if_else"> If Else </a> </li> 
                  <li><a href="exercicio.php?dir=modulo04&file=operadores_relacionais">  Operadores Relacionais</a> </li> 
                  <li><a href="exercicio.php?dir=modulo04&file=desafio_pi">  Desafio PI </a> </li> 
                  <li><a href="exercicio.php?dir=modulo04&file=operadores_logicos">  Operadores Lógicos </a> </li> 
                  <li><a href="exercicio.php?dir=modulo04&file=desafio_operadores_logicos"> Desafio  Operadores Lógicos </a> </li> 
                  <li><a href="exercicio.php?dir=modulo04&file=operador_ternarios">  Operador Ternário </a> </li> 
                  <li><a href="exercicio.php?dir=modulo04&file=switch">  Switch</a> </li> 
                  <li><a href="exercicio.php?dir=modulo04&file=desafio_switch"> Desafio Switch </a> </li> 
               </ul>
           </div>
           <div class="modulo laranja">
             <h3>Módulos 05 <br> Array:</h3>
                <ul>
                  <li><a href="exercicio.php?dir=modulo05&file=introducao"> Introdução ao Módulo</a></li>
                  <li><a href="exercicio.php?dir=modulo05&file=basico"> Básico sobre Array </a></li>
                  <li><a href="exercicio.php?dir=modulo05&file=mapa_valor"> Array como mapas: </a></li>
                  <li><a href="exercicio.php?dir=modulo05&file=desafio_indice_array"> Desafio Indice Array </a></li>
                  <li><a href="exercicio.php?dir=modulo05&file=desafio_meses_array"> Desafio Meses Array </a></li>
                  <li><a href="exercicio.php?dir=modulo05&file=operacoes_array">   Operações com Array </a></li>
                  <li><a href="exercicio.php?dir=modulo05&file=desafioSorteiro"> Desafio Sorteio </a></li>
                  <li><a href="exercicio.php?dir=modulo05&file=mult"> Multidimensionais </a></li>
                  <li><a href="exercicio.php?dir=modulo05&file=arraysConstantes">   Arrays Constantes  </a></li>
                  <li><a href="exercicio.php?dir=modulo05&file=usando_$_GET">Usando o $_GET  </a></li>
                  <li><a href="exercicio.php?dir=modulo05&file=usando_$_POST">Usando o $_POST  </a></li>
                  <li><a href="exercicio.php?dir=modulo05&file=comparacaoEntreArrays"> Comparação Entre Arrays</a></li>
</ul>
           </div>
           <div class="modulo verde-escuro ">
             <h3>Módulos 06 <br> Estruturas de Controle:</h3>
                <ul> 
                  <li><a href="exercicio.php?dir=modulo06&file=introducao"> Introdução ao Módulo</a></li>
                  <li><a href="exercicio.php?dir=modulo06&file=lacoFor"> Laço For</a></li>
                  <li><a href="exercicio.php?dir=modulo06&file=desafioFor"> Desafio Laço For </a></li>
                  <li><a href="exercicio.php?dir=modulo06&file=foreach">    FOREACH </a></li>
                  <li><a href="exercicio.php?dir=modulo06&file=breaKContinue">    Break/Continue  </a></li>
                  <li><a href="exercicio.php?dir=modulo06&file=desafioImpressao">  Desafio Impresão Break/Continue  </a></li>
                  <li><a href="exercicio.php?dir=modulo06&file=while_dowhile">    While / Do While  </a></li>
                  <li><a href="exercicio.php?dir=modulo06&file=desafioTabela1">  Desafio Tabela 1ªparte  </a></li>
                  <li><a href="exercicio.php?dir=modulo06&file=desafioTabela2">  Desafio Tabela 2ªparte </a></li>
                </ul>
           </div>
           <div class="modulo vermelho-escuro ">
             <h3>Módulos 07 <br> Funções:</h3>
                <ul> 
                  <li><a href="exercicio.php?dir=modulo07&file=introducao"> Introdução ao Módulo</a></li>
                  <li><a href="exercicio.php?dir=modulo07&file=funcaoEscopo">  Funções e Escopos </a></li>
                  <li><a href="exercicio.php?dir=modulo07&file=args_retorno">  Args & Retorno </a></li>
                  <li><a href="exercicio.php?dir=modulo07&file=desafioPalindromo">  Desafio Palindromo e Resposta </a></li>
                  <li><a href="exercicio.php?dir=modulo07&file=argVar">  Argumentos Variáveis </a></li>
                  <li><a href="exercicio.php?dir=modulo07&file=argPadrao">  Argumento Padrão </a></li>
                  <li><a href="exercicio.php?dir=modulo07&file=DeclarandoTipo">   Declarando Tipo</a></li>
                  <li><a href="exercicio.php?dir=modulo07&file=funcoesAnonima">  Funções Anônima</a></li>
                  <li><a href="exercicio.php?dir=modulo07&file=ClosureECallable">  Closure e Callable</a></li>
                  <li><a href="exercicio.php?dir=modulo07&file=recursividade">   Recursividade  </a></li>
                  <li><a href="exercicio.php?dir=modulo07&file=desafioRespostaRecursividade">  Desafio e Resposta Recursividade </a></li>
                  <li><a href="exercicio.php?dir=modulo07&file=RetornandoUmaFuncao">  Retronando Uma Função</a></li>
                  <li><a href="exercicio.php?dir=modulo07&file=MapFilter_teoria">  Map e Filter - Teoria </a></li>
                  <li><a href="exercicio.php?dir=modulo07&file=MapFilter_exercicio">  Map e Filter - Exercicio </a></li>
                 </ul>
           </div>
           <div class="modulo azul-escuro ">
             <h3>Módulos 08 <br>
            Orientação a Objetos :  </h3> 
                <ul> 
                  <li><a href="exercicio.php?dir=modulo08&file=introducao"> Introdução ao Módulo</a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=ClasseVsObjeto"> Classe Vs Objeto</a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=menbros"> Membros </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=classes"> Classes </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=desafioDataClasse">  Desafio Data Classes</a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=ConstrutoreDestrutor">  Construtor e Destrutor </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=paradigma">   Paradigmas </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=pilares01">   Pilares #01 </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=pilares02">   Pilares #02 </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=pilares04">   Pilares #04  </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=heranca">     Herança  </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=visibilidade">     Visibilidade  </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=EstaticoVsDinamico">    Estáticos Vs Dinâmicos </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=interface"> Interface </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=classeAbstrata"> Classe Abstrata_teoria </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=classeAbstrataPratica"> Classe Abstrata_Pratica </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=desafioSeteErros">Desafio dos Sete Erros </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=ModificadorFinal"> Modificador Final  </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=traits01">  Traits #01 </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=traits02">  Traits #02 </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=MetodosMagicos">  Metódos Magicos </a></li>
                  <li><a href="exercicio.php?dir=modulo08&file=polimorfismo">  Polimorfismo </a></li> 
                  <li><a href="exercicio.php?dir=modulo08&file=ConclusaoModulo">  Conclusão do Módulo </a></li>
           </ul>
           </div>
           <div class="modulo roxo-escuro  ">
             <h3>Módulos 09 <br>
              Includes :  </h3> 
                <ul> 
                  <li><a href="exercicio.php?dir=modulo09&file=introducao"> Introdução ao Módulo</a></li>
                  <li><a href="exercicio.php?dir=modulo09&file=funcaoIcludes"> Função Includes</a></li>
                  <li><a href="exercicio.php?dir=modulo09&file=includeVsRequire"> Include Vs Require </a></li>
                  <li><a href="exercicio.php?dir=modulo09&file=IncludeComRetorno"> Include Com Retorno </a></li>
                  <li><a href="exercicio.php?dir=modulo09&file=include_once"> Include Once </a></li>
                  <li><a href="exercicio.php?dir=modulo09&file=DesafioIncludes"> Desafio Includes  </a></li>
                  <li><a href="exercicio.php?dir=modulo09&file=ConclusaoModulo">  Conclusão do Módulo </a></li>

                </ul>
           </div>
           <div class="modulo laranja-escuro ">
             <h3>Módulos 10 <br>
              Namespace :  </h3> 
                <ul> 
                  <li><a href="exercicio.php?dir=modulo10&file=introducao"> Introdução ao Módulo</a></li>
                  <li><a href="exercicio.php?dir=modulo10&file=exemploBasico"> Exemplo Basico </a></li>
                  <li><a href="exercicio.php?dir=modulo10&file=SubNamespace"> Sub Namespace</a></li>
                  <li><a href="exercicio.php?dir=modulo10&file=use_As"> USE/AS</a></li>
                 </ul>
           </div>
           <div class="modulo verde">
             <h3>Módulos 11 <br>
             Tratamento de Erro :  </h3> 
                <ul> 
                  <li><a href="exercicio.php?dir=modulo11&file=introducao"> Introdução ao Módulo</a></li>
                  <li><a href="exercicio.php?dir=modulo11&file=TryCatch">  Try / Catch </a></li>
                  <li><a href="exercicio.php?dir=modulo11&file=ErrosPersonalizados">  Erros Personalizados </a></li>
                  <li><a href="exercicio.php?dir=modulo11&file=desafioIndiv">  Desafio.. </a></li>
                  <li><a href="exercicio.php?dir=modulo11&file=ErrorHandler"> Error Handler  </a></li>
                  <li><a href="exercicio.php?dir=modulo11&file=conclusao"> Conclusão  </a></li>




                  
                  
                 </ul>
           </div>
           <div class="modulo vermelho">
             <h3>Módulos 12 <br>
              Sessão $ Cookie  :  </h3> 
                <ul> 
                <li><a href="exercicio.php?dir=modulo12&file=introducao"> Introdução ao Modulo</a></li>

                  <li><a href="exercicio.php?dir=modulo12&file=basico"> Sessão</a></li>
                  <li><a href="exercicio.php?dir=modulo12&file=gerenciamentodeSessao"> Gerenciamento de  Sessão</a></li>

                 

                  




                  
                  
                 </ul>
           </div>
           <marquee> "Estudando PHP7 pela Cod3r..."</marquee>
        <div><span> <center> <u>Curso PHP 7 Completo - Curso do Desenvolvedor Web</u></center>  </span> <br>
         Desenvolvimento Web é hoje um dos assuntos mais relevantes do momento porque o mercado respira Web.
             E se você deseja ser um profissional preparado para o mercado e não quer aprender apenas fórmulas, mas o porquês, 
             esse curso de PHP é a escolha certa pra você</div>
        <div> No curso PHP 7 Completo, você vai começar entendo o básico da linguagem como sintaxe e os tipos, conhecer as estruturas lógicas e de repetição,
             como criar funções e trabalhar no contexto orientado à objetos. Com a base definida vamos apresentar conceitos mais avançados como cookies, sessões, 
             integração com banco de dados. Para finalizar, 
            teremos um projeto real de controle de ponto, para exercitar os conhecimentos adquiridos em uma aplicação aplicável ao mundo real, com layout moderno e profissional.  </div>
      <div>
     <u>O que você aprenderá:</u>   <br>

Criar uma base sólida em PHP, desde os princípios mais básicos <br>
Conhecer a sintaxe do PHP, os tipos e variáveis da linguagem <br>
Enteder as estruturas de lógica e repetições <br>
Criar funções, classes e objetos em PHP <br>
Integrar o PHP com HTML, CSS e Javascript <br>
Integrar a aplicação com banco de dados usando PDO e MySQLi <br>
Criar projetos PHP de aplicações reais e com layouts atrativos <br>

Há algum requisito ou pré-requisito para o curso? <br>
Acesso à internet e computador <br>

<u>Para quem é este curso:</u>  <br>

Pessoas que desejam se tornar desenvolvedores PHP <br>
Pessoas que desejam aprender a usar MySQL <br>
Pessoas que querem entrar no mercado de trabalho como desenvolvedor de aplicações Web <br>
Pessoas que querem empreender e precisam desenvolver soluções para Web  <br>
O necessário para se tornar um desenvolvedor web completo  <br>
<div> 
Instrutor: <br>
  <a href="https://www.udemy.com/user/leonardomouraleitao/">Leonardo Moura Leitao</a>  <br>
Arquiteto de Software <br>
Leonardo Leitão é graduado em Engenharia Elétrica pela Universidade Federal do Ceará e Mestre em Informática Aplicada pela Universidade de Fortaleza, na qual trabalhou com Integração de Redes de Sensores sem Fio e Computação em Nuvem.
Instrutor premiado internacionalmente e tem umas das melhores avaliações entre os instrutores da Udemy. <br>
Há quinze anos atua na área como desenvolvedor de softwares e trabalhou na DATAPREV como arquiteto, 
desenvolvendo sistemas para o INSS. Professor de desenvolvimento de software há mais de doze anos, criou a Cod3r Ensino que já treinou mais de 350.000 alunos. <br>
</div>
<div>
Cod3r Cursos Online <br>
Escola de Cursos Online de Tecnologia <br>
A COD3R é uma Escola de cursos online de programação criada por profissionais experientes do mercado que se dedicam a programação,<br> arquitetura e design de software, infraestrutura e todo o ciclo de vida do desenvolvimento de um software. <br> Acreditamos que a melhor forma de aprender é praticando, e o nosso objetivo como Escola de ensino é entregar conteúdo de valor que te fará aprender, executar e pensar da melhor forma possível e com as melhores práticas disponíveis do mercado.
<br>
<marquee> "Estudando PHP7 pela Cod3r..."</marquee>
</div>
      </div>
        
          </div> 
      
        
      

    </main>
    <footer class="rodape"> 
         <h2>ALKTEC</h2> <br>
         <h3> Responsavel <a href="https://persornalweb.netlify.app/">André Luis Kunert_</a>Técnico em Informatica e Analista de TI e Sistema_Novembro <?= date('Y'); ?>  </h3>

        </footer>

</body>

</html>
<link rel="stylesheet" href="http://files.cod3r.com.br/curso-web/tree.css">
   
