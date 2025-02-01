<?php
require_once('pessoa.php');

class Usuario extends Pessoa{
    // usando também JS
     public $login;
      function __construct($nome, $idade, $login){
         $this->nome=$nome;
         $this->idade=$idade;
         $this->login=$login;
         echo 'Cadastro concluido com sucesso! <br>';

      }
      function __destruct(){
        echo 'Good Bye my brother or Good Nigth <br>';
        parent::__destruct();
    }
    public function apresentar(){
        
        echo "@{$this->login}:";
        parent::apresentar();
        
    }

}

?>