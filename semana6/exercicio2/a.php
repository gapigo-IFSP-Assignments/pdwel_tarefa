<?php
    function fatorial($_n){
        if ($_n <= 0)
        $_n = 1;
        $_i = $_n;
        $_r = 1;
        while($_i != 1)
        $_r *= $_i--;
        return $_r;
    }
    
    $vetor = array();
    $_q = 10;
    echo "vetor com os fatoriais dos primeiros $_q números: ";
    for($i = 1; $i <= $_q; $i++)
        $vetor[$i] = fatorial($i);
    print_r($vetor);
    foreach ($vetor as $posicao => $valor)
        echo "<br>Fat($posicao) = $valor";
?>