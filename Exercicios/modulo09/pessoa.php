<?php
  class Pessoa {
    public $nome;
    public $idade;
    function __construct($novoNome, $idade){
          $this -> nome = $novoNome;
          $this -> idade = $idade;
          echo 'Pesssoa Criada! <br>';
    }
    function __destruct(){
        echo 'Good Bye my brother or Good Nigth <br>';
    }
    public function apresentar() {
       return "{$this->nome}. {$this->idade} anos <br>";
    }
}




?>