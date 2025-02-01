<div class="titulo"><center> <u> Tipo Booleano </u></center> </div>
<?php
echo true;
var_dump(true);
echo '<br>';
echo false;
var_dump(false);
echo '<br>';
var_dump('false');
echo '<br>' . is_bool(false);
// Fazer as regras de conversões:
echo '<p> REgras: </p>';
echo'<br>' . var_dump((bool)0); // Zero é o único para Falso
echo'<br>'. var_dump((bool)20);
echo '<br>'.var_dump((bool)-1);
echo '<br>'.var_dump((bool)0.0);
echo '<br>'.var_dump((bool)0.0000000);
echo '<br>'.var_dump((bool)""); // false
echo "<br>".var_dump((bool)"0");// false
echo "<br>".var_dump((bool)" "); // resto é true
echo "<br>".var_dump((bool)"00");
echo "<br>".var_dump((bool)"false");
echo "<br>".var_dump(!"false");
echo "<br>".var_dump(!!"false");
?>
<div> Por Trás do PHP</div>
<div>
echo true;
var_dump(true);
echo '<br>';
echo false;
var_dump(false);
echo '<br>';
var_dump('false');
echo '<br>' . is_bool(false);
// Fazer as regras de conversões:
echo '<p> REgras: </p>';
echo'<br>' . var_dump((bool)0); // Zero é o único para Falso
echo'<br>'. var_dump((bool)20);
echo '<br>'.var_dump((bool)-1);
echo '<br>'.var_dump((bool)0.0);
echo '<br>'.var_dump((bool)0.0000000);
echo '<br>'.var_dump((bool)""); // false
echo "<br>".var_dump((bool)"0");// false
echo "<br>".var_dump((bool)" "); // resto é true
echo "<br>".var_dump((bool)"00");
echo "<br>".var_dump((bool)"false");
echo "<br>".var_dump(!"false");
echo "<br>".var_dump(!!"false");
</div>
<marquee> "Estudando PHP7 pela Cod3r..."</marquee>
