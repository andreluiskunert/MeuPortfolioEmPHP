<div class="titulo"> <center> <u> Comparação Entre Arrays  </u></center></div>

<?php
 $arr1 = [ 'nome' => 'Maria', 'idade' => 20 ];
 $arr2 = [ 'nome'=> 'Maria', 'idade' => 20 ];
 var_dump( $arr1 == $arr2 ); 
 echo'<br>';
 var_dump( $arr1 === $arr2 ); 

 echo '<br>'; 
 var_dump( $arr1 ,'<br>', $arr1 );
 echo '<br>';
 $arr3 = ['idade' => 20, 'nome'=> 'Maria'];
 var_dump( $arr1 ,'<br>', $arr3 );
 echo '<br>';
 var_dump( $arr1 == $arr3 );
 var_dump( $arr1 === $arr3 );   
 var_dump( $arr1 != $arr3 );
 var_dump( $arr1 !== $arr3 );
 echo'<br>';
 $arr4 = ['idade' => '20', 'nome' => 'Maria'];
 var_dump( $arr1 ,'<br>', $arr4 );
 var_dump( $arr1 ==  $arr4 );
 var_dump( $arr1 === $arr4 );

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
 $arr1 = [ 'nome' => 'Maria', 'idade' => 20 ];
 $arr2 = [ 'nome'=> 'Maria', 'idade' => 20 ];
 var_dump( $arr1 == $arr2 ); 
 echo'<br>';
 var_dump( $arr1 === $arr2 ); 

 echo '<br>'; 
 var_dump( $arr1 ,'<br>', $arr1 );
 echo '<br>';
 $arr3 = ['idade' => 20, 'nome'=> 'Maria'];
 var_dump( $arr1 ,'<br>', $arr3 );
 echo '<br>';
 var_dump( $arr1 == $arr3 );
 var_dump( $arr1 === $arr3 );   
 var_dump( $arr1 != $arr3 );
 var_dump( $arr1 !== $arr3 );
 echo'<br>';
 $arr4 = ['idade' => '20', 'nome' => 'Maria'];
 var_dump( $arr1 ,'<br>', $arr4 );
 var_dump( $arr1 ==  $arr4 );
 var_dump( $arr1 === $arr4 );

 
 </div>
<marquee> "Estudando PHP7 pela Cod3r..."</marquee>