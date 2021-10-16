<?php
    function get_divisores($_n){
        if ($_n <= 1) return array(1);
        // $divisores = array(1, $_n);
        $divisores = array(1);
        $chave = 2;
        for($i = 2; $i <= ($_n/2); $i++)
            if ($_n % $i == 0){
                $divisores[$chave] = $i;
                $chave++;
            }
        return $divisores;
    }
    function eh_perfeito($_n){
    $array_divisores = get_divisores($_n);
    $soma = 0;
    foreach ($array_divisores as $divisor) 
        $soma += $divisor;
    
    if($soma == $_n)
        return true;
    else
        return false;
    }
    
    $_q = 10000;
    echo "Perfeitos de 1 a $_q: </br>";
    $array = get_divisores(100);
    // foreach ($array as $i => $value) {
    //     echo $array[$i] . ", ";
    // }
    for($i = 1; $i <= $_q; $i++)
    if (eh_perfeito($i))
        echo "$i, ";
?>