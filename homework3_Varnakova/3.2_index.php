<?php
$i=0;
do {
    if ($i==0) {
        echo "<p>$i - это ноль</p>";
    }
    else if ($i%2==0){
        echo "<p>$i - четное число</p>";
    }
    else {
        echo "<p>$i - нечетное число</p>";
    }
    $i++;
}
while ($i<=10);
