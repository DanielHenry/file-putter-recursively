<?php

function addFileRecursively($filePath = '', $currentPath = ''){
    $d = dir($currentPath);
    echo $d->path."\n";
    $success = TRUE;
    while ($entry = $d->read()) {
        if ($entry=='.' || $entry=='..'){
            continue;
        }
        if (is_dir($currentPath.'/'.$entry)){
            $fileType = 'dir';
            //$success = addFileRecursively($filePath,$currentPath.'/'.$entry);
        } else {
            $fileType = 'not dir';
        }
        echo $entry.' '.$fileType."\n";
    }
    if ($success){
        if (copy($filePath,$currentPath)){
            $success = TRUE;
        } else {
            $success = FALSE;
        }
    }
    return $success;
}

echo $argv[1]."\n";
echo $argv[2]."\n";
$filePath = $argv[1];
$currentPath = $argv[2];
$success = addFileRecursively($filePath,$currentPath);

?>