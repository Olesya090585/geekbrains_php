<?php
$cityArray=["Московская область"=>["Москва","Подольск","Зеленоград"],"Ленинградская область"=>["Санкт-Петербург",
    "Павловск","Крондштадт"], "Тверская"=>["Конаково","Тверь","Торжок"]];
//print_r($cityArray);
//echo '<pre>'.print_r($cityArray, true).'</pre>';
foreach ($cityArray as $key=>$value){
    echo "<p>$key :</p>";
    $string=implode(', ', $value);
        echo "$string";

}
