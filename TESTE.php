<?php
// Inicializa os vetores para armazenar as idades e contadores
$idadesMenores = [];
$idadesAdultos = [];
$idadesIdosos = [];
$contMenores = 0;
$contAdultos = 0;
$contIdosos = 0;
$somaMenores = 0;
$somaAdultos = 0;
$somaIdosos = 0;
// Lê as 60 idades e classifica em seus respectivos vetores
for ($i = 1; $i <= 60; $i++) {
    echo "Digite a idade $i: ";
    $idade = (int)fgets(STDIN);

    if ($idade <= 18) {
        $idadesMenores[++$contMenores] = $idade;
        $somaMenores += $idade;
    } elseif ($idade <= 60) {
        $idadesAdultos[++$contAdultos] = $idade;
        $somaAdultos += $idade;
    } else {
        $idadesIdosos[++$contIdosos] = $idade;
        $somaIdosos += $idade;
    }
}// Imprime as idades de cada faixa
echo "Menores: ";
for ($i = 1; $i <= $contMenores; $i++) {
    echo $idadesMenores[$i] . ", ";
}
echo "\n";

// ... (repetir para Adultos e Idosos)

// Imprime a quantidade de pessoas por faixa
echo "Quantidade de Menores: " . $contMenores . "\n";
// ... (repetir para Adultos e Idosos)

// Calcula e imprime as médias
if ($contMenores > 0) {
    echo "Média de idade dos Menores: " . ($somaMenores / $contMenores) . "\n";
}
// ... (repetir para Adultos e Idosos)
// Calcula a média geral
$total = $somaMenores + $somaAdultos + $somaIdosos;
echo "Média geral: " . ($total / 60) . "\n";