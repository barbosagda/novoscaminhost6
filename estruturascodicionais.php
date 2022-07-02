<?php

$idade = 43;

// if ($idade >= 18) {
//     echo "Maior de idade";
//     echo "<br>Você tem que trabalhar...";
// }else {
//     echo "Menor de idade"; 
// }

//aninhamento
// if($idade <= 10) {
//     echo "Infantil";  
// }else if ($idade < 18) {
//     echo "Adolecente";
// }else {
//     echo "Adulto";
// }


switch($idade) {
    case 10:
        echo "Adolecente";
        break;
    case 18:
        echo "Maior de idade";
        break;
    default:
        echo "Adulto";    
}

echo "<br>Fim do programa...";
