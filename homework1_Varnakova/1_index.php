<?php
$a=5;
$b='05';
var_dump($a==$b);//true, потому что оператор == не сравнивает типы данных
var_dump((int)'012345');//12345, потому что функция int приводит строку в число, поэтому получаем  12345
var_dump ((float)123.0===(int)123.0);/*false, так как float -это числа с плавающей точкой, int - целое число,
 оператор === строгое сравнение, сравнивает не только значения, но и тип данных*/
var_dump ((int)0===(int)'hello, world!');/* true, так как int приводит строку в число, которая становится
равна 0, 0===0*/


