<?php
/**
 * File Download
 */
$file = './names.txt';
$file = basename($file);

if (!is_file($file)) return;

if (file_exists($file) && is_readable($file)) {
    header('Content-Description: File Transfer');
    // header('Content-Type: application/octet-stream');
    header("Content-type: text/plain");
    header('Content-Disposition: attachment; filename="'.$file.'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: no-cache');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
