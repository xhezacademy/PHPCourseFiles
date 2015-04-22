<?php
/**
 * Working with the Filesystem
 */
$file = 'names.txt';
$text = "Shani,\nRrystem,\n";

// File Write
$fileHandle = fopen($file, 'w+'); # Open File Handle
fwrite($fileHandle, $text); # Perform Write
fclose($fileHandle); # Close Handle

// File Append
$fh = fopen('names.txt', 'a');
fwrite($fh, "Xhylbehar");
fclose($fh);

// File Read
$fh = fopen($file, 'r');
$emrat = fread($fh, filesize($file));
fclose($fh);

$array = explode(',', $emrat);
foreach ($array as $value) {
    echo 'Tungat o ' . $value . '.<br>';
}

print '<br>';

// Scan Directory for files
$files = glob('*.php');
foreach ($files as $file) {
    echo realpath(basename($file)) . '<br>';
}
