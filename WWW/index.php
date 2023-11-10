<?php
// 1. Создайте константу NUM_E со значением 2.71828 (число е).
define('NUM_E', 2.71828);

// 2. Выведите на экран значение константы в виде строки «Число e равно …».
echo "Число e равно " . NUM_E . "<br>";

// 3. Присвойте переменной $num_e1 значение константы.
$num_e1 = NUM_E;

// Выведите на экран имя переменной $num_e1, ее значение и тип.
echo '$num_e1 = ' . $num_e1 . '    ' . gettype($num_e1) . "<br>";

// 4. Последовательно измените тип переменной $num_e1.
$num_e1 = (string)$num_e1;
echo '$num_e1 = ' . $num_e1 . '    ' . gettype($num_e1) . "<br>";

$num_e1 = (int)$num_e1;
echo '$num_e1 = ' . $num_e1 . '    ' . gettype($num_e1) . "<br>";

$num_e1 = (bool)$num_e1;
echo '$num_e1 = ' . $num_e1 . '    ' . gettype($num_e1) . "<br>";
?>
