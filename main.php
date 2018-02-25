<?php

function addFileRecursively($filePath = '', $currentPath = ''){
    $d = dir($currentPath);
    echo $d->path."\n";
    while ($entry = $d->read()) {
        if ($entry=='.' || $entry=='..'){
            continue;
        }
        if (is_dir($currentPath.'/'.$entry)){
            $fileType = 'dir';
            //addFileRecursively($filePath,$currentPath.'/'.$entry);
        } else {
            $fileType = 'not dir';
        }
        echo $entry.' '.$fileType."\n";
    }        
}

echo $argv[1]."\n";
echo $argv[2]."\n";
$filePath = $argv[1];
$currentPath = $argv[2];
addFileRecursively($filePath,$currentPath);

?>