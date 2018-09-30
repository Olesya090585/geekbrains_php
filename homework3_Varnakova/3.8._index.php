<?php
$cityArray=["Московская область"=>["Москва","Подольск","Зеленоград"],"Ленинградская область"=>["Санкт-Петербург",
    "Павловск","Крондштадт"], "Тверская"=>["Конаково","Тверь","Торжок"]];
//print_r($cityArray);
//echo '<pre>'.print_r($cityArray, true).'</pre>';
foreach ($cityArray as $key=>$value){
        echo "<p>$key :</p>";
        foreach ($value as $value2){
            if (stripos($value2,"к")==0){
                echo $value2;
            }
        }
}
