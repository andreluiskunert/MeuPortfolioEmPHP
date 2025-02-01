<div class="titulo"> <center> <u> Usando o $_POST </u></center></div>
<h2> Listas de Cadastro:</h2>
<form action="#" method="post">
     <h3>nome:</h3>
    <input type="text" name="nome"> 
    <h3> Sobrenome:</h3>
    <input type="text" name="sobrenome"> 
    <h2> Estado:</h2>
    <select name="Estado" >
       
        <option value="PR">Paraná</option>
        <option value="SC"> Santa Catarina</option>
        <option value="RS"> Rio Grande</option>
    </select>
    <h2> Estado Civil:</h2>
     <select name="estadoCivil" >
        <option value="Casado(a)"> Casado(a)</option>
        <option value="Viuvo(a)"> Viuvo(a)</option>
        <option value="Solteiro(a)"> Solteiro(a)</option>
     </select>    

    <button> enviar </button>

</form>
<hr>
<?php
 //echo $_POST;
 print_r($_POST);
 print_r($_GET);
 echo '<br>';
 print_r($_POST);   
 echo '<br>'. count($_POST);
?>
<style>
    hr {
        margin-bottom: 0px;
    }
    p {
        background-color: aqua;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        
    }
    p1{
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
    }
    [center] {
       display: flex;
       justify-content: center;
    }
    form > *{
        font-size: 1.2rem;
    }
    h2{
        font-weight: 200;
        font-family:'Courier New', Courier, monospace;
        font-size: 1.3rem;
    }
    h3{
        font-weight: 150;
        font-family:'Courier New', Courier, monospace;
        font-size: 1.3rem;
    }
</style>
<br>
<marquee> Daqui veremos os códigos em PHP...  </marquee>
<br>
<div><p>  Por trás do PHP</p></div> <br>
 <div>
 
 //echo $_POST; 
 print_r($_POST);
 print_r($_GET);
 echo '<br>';
 print_r($_POST);   
 echo '<br>'. count($_POST);
 </div>
<marquee> "Estudando PHP7 pela Cod3r..."</marquee>