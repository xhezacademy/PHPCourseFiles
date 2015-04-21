<?php
/**
 * Try/Catch Exception
 */
function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    } else return 1/$x;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

// Continue execution
echo 'Hello World';
