<?php

date_default_timezone_set('America/Sao_Paulo');

$path = $argv[1];
$extension = $argv[2];
$seconds = $argv[3];
$now = time();
$fileMore = array();

$directory = "$path*.$extension";

try 
{
    foreach (glob($directory) as $file)
    {   
        if(filectime($file) < ($now - $seconds))
        {
            $date = date("F d Y H:i:s \n", filectime($file));

            $fileMore[] = "$file | $date";
        }
    }

    if($fileMore)
    {
        echo json_encode($fileMore);
    }
    else
    {
        echo 'Nenhum arquivo encontrado.';
    }
}
catch(Exception $e)
{
    echo $e->getMessage();
}