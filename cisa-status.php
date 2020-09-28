<?php

date_default_timezone_set('America/Sao_Paulo');

$path = $argv[1];
$extension = $argv[2];
$seconds = $argv[3];
$now = time();

$directory = "$path*.$extension";

try 
{
    foreach (glob($directory) as $file)
    {   
        if(filectime($file) < ($now - $seconds))
        {
            echo 1;
            exit;
        }
    }

    echo 0;
}
catch(Exception $e)
{
    echo 2;
}