<?php 

$termosDePesquisas = [
"Transportadora",
"Transportadora em São Paulo",
"Transportadora perto de mim",
"Transportadora Gold Logistica",
"Carga fracionada Gold",
"Sobre a Gold",
"Transportadora Agil",
"Transportadora Sedex",
"Não estou nem ai",
"A galinha pintadinha",
"Lacoste tenis"
];

$resultTermos = [];

$termos = readline("Digite o que está procurando: \n");

foreach($termosDePesquisas as $pesquisa) {

    if(strpos($pesquisa, $termos) !== false) {
        echo "Termos encontrados: $termos \n";
        $resultTermos[] = strtolower($termos);
    }
}

if(!empty($resultTermos)) {
    foreach ($resultTermos as $termo) {
        echo $termo . "\n";
    }
}



?>