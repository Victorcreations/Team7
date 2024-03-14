<?php

global $file;

$file = file_get_contents($_SERVER['DOCUMENT_ROOT']."/../rasp/internals.json");
function get_key($key){
    global $file;

    $contents = json_decode($file,true);

    if($contents)
    {
        return $contents[$key];
    }
    else{
        return null;
    }
}