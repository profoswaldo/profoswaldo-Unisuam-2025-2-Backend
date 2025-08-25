<?php
    $num = 2;

    switch ($num) {
        case 1:
            echo "Um";
            break;
        case 2:
            echo "Dois";
            // sem break → continua no próximo case
        case 3:
            echo " Três";
            break;
    }
?>