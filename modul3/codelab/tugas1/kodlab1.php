<?php

function piramid(int $n): void {
    for ($i = 1; $i <= $n; $i++) {
        // Print leading spaces
        for ($j = 0; $j < $n - $i; $j++) {
            echo " ";
        }

        // Print asterisks for the current row
        for ($k = 1; $k < 2 * $i; $k++) {
            echo "*";
        }
        echo "\n"; // Newline after each row
    }
}

function piramid_terbalik(int $n): void {
    for ($i = $n; $i >= 1; $i--) { // Reverse the outer loop
        // Print leading spaces
        for ($j = 0; $j < $n - $i; $j++) {
            echo " ";
        }

        // Print asterisks for the current row
        for ($k = 1; $k < 2 * $i; $k++) {
            echo "*";
        }
        echo "\n";
    }
}


piramid(5);
echo "\n";
piramid_terbalik(5);

?>