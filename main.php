<?php

echo $argv[1]."\n";
echo $argv[2]."\n";
$filePath = $argv[1];
$currentPath = $argv[2];

$d = dir($currentPath);
echo $d->path."\n";
while ($entry = $d->read()) {
    if ($entry=='.' || $entry=='..'){
        continue;
    }
    echo $entry."\n";
}

?>