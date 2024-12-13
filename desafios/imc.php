<?php 

$altura = 1.86;
$peso = 65;

$imc = $peso / $altura ** 2;


if($imc <= 18.5){
    echo "Voce esta muito abaixo do seu peso $imc ";
}
else if($imc > 18.5 && $imc <= 24.9){
    echo "Voce esta com imc normal $imc";
}
else if($imc > 24.9){
    echo "voce esta acima do peso meu amigo $imc" ;
}





