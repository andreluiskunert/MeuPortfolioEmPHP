<?php
session_start();
print_r($_SESSION);
echo '<br>';
?>
<p>
    <b> Nome:</b> <?= $_SESSION['nome'] ?> <br>
    <b>Email:</b> <?= $_SESSION['email'] ?>
</p>
$_SESSION['email'] = 'pesquisador036@gmail.com';
<p>
    <a href='basico.php'> voltar</a>