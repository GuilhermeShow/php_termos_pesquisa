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

$termoNegativado = [];
$termoAtivo = [];

$palavra_pesquisar = readline("Digite termo de pesquisa \n");

$contemNoArray = [];

foreach ($termosDePesquisas as $palavra) {
    if(strpos($palavra, $palavra_pesquisar) !== false) {
        $contemNoArray[] = strtolower($palavra);
    }
}

if(!empty($contemNoArray)) {
    echo "\n Termo de pesquisa: $palavra_pesquisar \n\n";
    foreach ($contemNoArray as $termo) {
        echo $termo . "\n";
        $termoNegativado[] = $termo;
    }
    if(readline("Deseja negativar termo de pesquisa? (S/N)") !== "S") {
        $termoNegativado[] = [];
    } 
}

echo "Termos negativos \n";
var_dump($termoNegativado);
echo "termosDePesquisas \n";
var_dump($termoAtivo);


?>