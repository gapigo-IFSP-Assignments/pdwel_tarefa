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
    
    for($i = 1; $i <= 10; $i++)
        echo "$i! = " . fatorial($i) . "</br>";
?>