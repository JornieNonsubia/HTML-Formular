<?php
$files = glob('*.svg');
foreach ($files as $file) {
    echo substr($file,0,-4).PHP_EOL;
    if (str_starts_with($file,'uEA')) {
        //rename($file,substr($file,6));
    }
}
