<?php

//Задание1
echo "Задание 1";

function checkEmpty($a)
{
    echo "</br> a равна {$a} пустая? - ";
    echo empty($a) ? "Верно" : "Неверно";
}

checkEmpty(1);
checkEmpty(3);
checkEmpty(-3);
checkEmpty(0);
checkEmpty(null);
checkEmpty(true);
checkEmpty('');
checkEmpty('0');


//Задание2
echo "</br></br>Задание 2</br>";

$variable2 = 123;
$variable2 = "$variable2";
$variable2[1] = 0;

echo $variable2;


//Задание3
echo "</br></br>Задание 3";

function countDifference($a, $b)
{
    echo "</br> a равна {$a} b равна {$b} ";
    echo ($a <= 1 && $b >= 3) ? 'сумма равна ' . ($a + $b) : 'разность равна ' . ($a - $b);
}

countDifference(1, 3);
countDifference(0, 6);
countDifference(3, 5);


//Задание4
echo "</br></br>Задание 4</br>";

$variable4 = 'abcde';

echo "Дана строка {$variable4} </br>";
echo $variable4[0] === "a" ? "Да" : "Нет";


//Задание5
echo "</br></br>Задание 5</br>";

$variable5 = '123456';
$sum1 = 0;
$sum2 = 0;

for ($i = 0; $i < strlen($variable5) && strlen($variable5) == 6; $i++) {
    $i < 3 ? $sum1 += +$variable5[$i] : $sum2 += +$variable5[$i];
}

echo "Сумма первых трех цифр равняется сумме вторых трех цифр? </br>";
echo $sum1 == $sum2 ? "Да" : "Нет";


//Задание6
echo "</br></br>Задание 6</br>";

$degree = 180;

if ($degree >= 0 && $degree <= 360) {
    echo "Введено {$degree} градус(ов) </br> Прошло часов:";
    echo 12 / 360 * $degree;
}


//Задание7
echo "</br></br>Задание 7</br>";
$variable7Start = 20;
$variable7End = 45;
$sumNumbers7 = 0;

echo "Числа из диапазона {$variable7Start} - {$variable7End} делящиеся на 5</br>";

for ($i = $variable7Start; $i <= $variable7End; $i++) {
    if (!fmod($i, 5)) {
        echo "$i ";
        $sumNumbers7 += $i;
    }

}

echo "</br>Сумма этих чисел: {$sumNumbers7}";


//Задание8
echo "</br></br>Задание 8</br>";

$variable8 = 12345;
$variable8 = "$variable8";
echo "Дано число {$variable8}.";

for ($i = 0; $i < strlen($variable8); $i++) {
    if (fmod($i, 2)) {
        $variable8[$i] = '0';
    }
}

echo "</br>После изменения получаем {$variable8}";


//Задание9
echo "</br></br>Задание 9</br>";

//через while
$num = 1000;
$counter = 0;

echo "Дано число {$num}.";

while ($num > 50) {
    $num /= 2;
    $counter++;
}
echo "</br>После цикла while останется число {$num}, потребуется {$counter} циклов";

//через for
$num = 1000;

for ($counter = 0; $num > 50; $counter++) {
    $num /= 2;
}

echo "</br>После цикла for останется число {$num}, потребуется {$counter} циклов";


//Задание10
echo "</br></br>Задание 10</br></br>";

function drawShape($height, $width, $symbol = '*')
{

    for ($i = 0; $i < $height; $i++) {
        for ($l = 0; $l < $width; $l++) {
            echo $symbol;
        }
        echo '</br>';
    }
}

drawShape(4, 7);