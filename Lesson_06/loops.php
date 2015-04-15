<?php
// PHP Loops
$names = ['Ersan', 'Nderim', 'Fatlind', 'Guri', 'Ardian'];

// For Loop
echo "-- For Loop --<br>\n";
for ($i=0; $i < count($names); $i++) {
    if ($i == 3) {
        echo "Hi five {$names[$i]} me For Loop<br>\n";
    }
}

// While Loop
echo "-- While Loop --<br>\n";
$i = 0;
while ($i < count($names)) {
    echo "Hi five {$names[$i]} me While Loop<br>\n";

    $i++;
}

// Do-While Loop
echo "-- Do-While Loop --<br>\n";
$i = 0;
do {
    echo "Hi five {$names[$i]} me DoWhile Loop<br>\n";
    $i++;
} while ($i > count($names));
