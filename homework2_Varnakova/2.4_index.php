<?php
function mathOperation($arg1,$arg2,$operation){
    switch ($operation) {
        case "сумма":
            echo($arg1 + $arg2);
        break;
        case "разность":
            echo($arg1 - $arg2);
        break;
        case "произведение":
            echo($arg1 * $arg2);
        break;
        case "деление":
            echo($arg1/$arg2);
        break;
    }
}
mathOperation(20,10,"разность");