<?php
    function eh_primo($_n){
    $contador = 0;
    $_metade = $_n / 2;
    for($_i = 2; $_i <= $_metade; $_i++)
    if ($_n % $_i == 0){
        $contador = 1;
        break;
    }
    if($contador == 1)
        return false;
    else
        return true;
    }
    
    $_q = 100;
    $vetor = array();
    echo "Primos de 1 a $_q: </br>";
    for($i = 1; $i <= $_q; $i++)
    if (eh_primo($i))
        array_push($vetor, $i);
    echo "[";
    foreach ($vetor as $primo)
    echo "$primo, ";
    echo "]";

?>