<?php
//1) Написать программу, которая выводит простые числа, т.е. делящиеся без
//остатка только на себя и на 1.

$n = rand(1, 100);
$no_prime = 0;
$prime = 0;
for ($i = 2; $i <= $n; $i++) {

    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $no_prime = $i;
            break;
        }
    }
    if ($i != $no_prime) {
        $prime = $i;
        echo $prime . ' - простое число' . '<br>';
    }
}
echo "<hr>";

//2) Сгенерируйте 100 раз новое число и выведите на экран количество четных чисел из этих 100.

$j = 0;
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $j++;
    }
}
echo "Четных чилел " . $j;
echo "<hr>";

//3) Сгенерируйте 100 раз число от 1 до 5 и выведите на экран сколько раз сгенерировались эти числа (1, 2, 3, 4 и 5).

$count_1 = 0;
$count_2 = 0;
$count_3 = 0;
$count_4 = 0;
$count_5 = 0;
for ($i = 0; $i <= 100; $i++) {
    $j = rand(1, 5);
    if ($j == 1) {
        $count_1++;
    } elseif ($j == 2) {
        $count_2++;
    } elseif ($j == 3) {
        $count_3++;
    } elseif ($j == 4) {
        $count_4++;
    } else {
        $count_5++;
    }

}
echo "Цифра 1 сгенерировалась : " . $count_1 . "</br>" . "Цифра 2 сгенерировалась : " . $count_2 .
    "</br>" . "Цифра 3 сгенерировалась : " . $count_3 . "</br>" . "Цифра 4 сгенерировалась : " . $count_4 .
    "</br>" . "Цифра 5 сгенерировалась : " . $count_5 . "</br>";
echo "<hr>";

//4) Используя условия и циклы сделать таблицу в 5 колонок и 3 строки (5x3), отметить разными цветами часть ячеек.

echo "<table border='1'";
for ($a = 0; $a < 3; $a++) {
    echo "<tr>";
    for ($b = 0; $b < 5; $b++) {
        $col1 = rand(1, 255);
        $col2 = rand(1, 255);
        $col3 = rand(1, 255);
        echo "<td style=background-color:rgb($col1,$col2,$col3);>&nbps</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<hr>";

//В переменной month лежит какое-то число из интервала от 1 до 12. Определите в какую пору года попадает этот месяц
// (зима, лето, весна, осень).

$month = rand(1, 12);
if ($month == 12 || $month == 1 || $month == 2) {
    echo "Зима";
} elseif ($month == 3 || $month == 4 || $month == 5) {
    echo "Весна";
} elseif ($month == 6 || $month == 7 || $month == 8) {
    echo "Лето";
} else echo "Осень";
echo "<hr>";

//Дана строка, состоящая из символов, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'.
// Если это так - выведите 'да', в противном случае выведите 'нет'.

$st = 'asgg ';
if ($st[0] == 'a') {
    echo "да";
} else echo "нет";
echo "<hr>";

//Дана строка с цифрами, например, '12345'. Проверьте, что первым символом этой строки является цифра 1, 2 или 3.
// Если это так - выведите 'да', в противном случае выведите 'нет'.

$stNum = '555 ';
if ($stNum[0] == 1 || $stNum[0] == 2 || $stNum[0] == 3) {
    echo "да";
} else echo "нет";
echo "<hr>";

//Если переменная test равна true, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при test,
// равном true, false. Напишите два варианта скрипта - тернарка и if else.

$test = false;
if ($test == true) {
    echo " Верно";
} else echo "Неверно";
echo "<hr>";
echo $test ? " Верно" : "Неверно";
echo "<hr>";

//Дано Два массива рус и англ ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс']
//Если переменная lang = ru вывести массив на русском языке, а если en то вывести на английском языке.
// Сделат через if else и через тернарку.

$rus = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$eng = ['mon', 'tue', 'wen', 'thu', 'fri', 'sat', 'sun'];
$lang = "en";
if ($lang == "ru") {
    print_r($rus);
} elseif ($lang == "en") {
    print_r($eng);
} else echo "Вы что-то не то ввели )";
echo "<hr>";
echo $lang == "ru" ? print_r($rus) : print_r($eng);
echo "<hr>";


//В переменной cloсk лежит число от 0 до 59 – это минуты. Определите в какую четверть часа попадает это число
// (в первую, вторую, третью или четвертую). тернарка и if else.

$clock = rand(0, 59);
echo $clock . " min : ";
if ($clock >= 0 && $clock <= 15) {
    echo "Первая четверть часа";
} elseif ($clock > 15 && $clock <= 30) {
    echo "Вторая четверть часа";
} elseif ($clock > 30 && $clock <= 45) {
    echo "Третья четверть часа";
} else echo "Четвертая четверть часа";
echo "<hr>";

echo $clock <= 15 ? $clock . " min : " . "Первая четверть часа" :
    ($clock > 15 && $clock <= 30 ? $clock . " min : " . "Вторая четверть часа" :
        ($clock > 30 && $clock <= 45 ? $clock . " min : " . "Третья четверть часа" :
            ($clock > 45 && $clock <= 59 ? $clock . " min : " . "Четвертая четверть часа" : 'что- то пошло не так')));

echo "<hr>";

//1. Дан массив
//['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya']
//Развернуть этот массив в обратном направлении
$arr = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'];
$i = 0;
$count = 0;
$arrRevers = [];
while (isset($arr[$i])) {
    $count = $i;
    $i++;
}
while ($count >= 0) {
    $arrRevers[] = $arr[$count];
    $count--;
}
echo "While : ";
echo "<pre>";
print_r($arrRevers);
echo "</pre>";
echo "<hr>";
//---------------------------------------------------------------------------------------------------------------------
$arr = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'];
$i = 0;
$count = 0;
$arrRevers = [];
do {
    $count = $i;
    $i++;
} while (isset($arr[$i]));
do {
    $arrRevers[] = $arr[$count];
    $count--;
} while (
    $count >= 0
);
echo "Do while : ";
echo "<pre>";
print_r($arrRevers);
echo "</pre>";
echo "<hr>";
//---------------------------------------------------------------------------------------------------------------------
$arr = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'];
$i = 0;
$count = 0;
$arrRevers = [];
for ($i; isset($arr[$i]); $i++) {
    $count = $i;
}
for ($count; $count >= 0; $count--) {
    $arrRevers[] = $arr[$count];
}
echo "For : ";
echo "<pre>";
print_r($arrRevers);
echo "</pre>";
echo "<hr>";
//---------------------------------------------------------------------------------------------------------------------
$arr = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'];
$i = 0;
$count = 0;
$arrRevers = [];
foreach ($arr as $key => $value) {
    $i++;
}
foreach ($arr as $key => $value) {
    $arrRevers[] = $arr[$i - 1];
    $i--;
}
echo "Foreach : ";
echo "<pre>";
print_r($arrRevers);
echo "</pre>";
echo "<hr>";
//2. Дан массив
//[44, 12, 11, 7, 1, 99, 43, 5, 69]
//Развернуть этот массив в обратном направлении
$arr = [44, 12, 11, 7, 1, 99, 43, 5, 69];
$i = 0;
$count = 0;
$arrRevers = [];
while (isset($arr[$i])) {
    $count = $i;
    $i++;
}
while (isset($arr[$count])) {
    $arrRevers[] = $arr[$count];
    $count--;
}
echo "While : ";
echo "<pre>";
print_r($arrRevers);
echo "</pre>";
echo "<hr>";
//---------------------------------------------------------------------------------------------------------------------
$arr = [44, 12, 11, 7, 1, 99, 43, 5, 69];
$i = 0;
$count = 0;
$arrRevers = [];
do {
    $count = $i;
    $i++;
} while (isset($arr[$i]));
do {
    $arrRevers[] = $arr[$count];
    $count--;
} while (
    $count >= 0
);
echo "Do while : ";
echo "<pre>";
print_r($arrRevers);
echo "</pre>";
echo "<hr>";
//---------------------------------------------------------------------------------------------------------------------
$arr = [44, 12, 11, 7, 1, 99, 43, 5, 69];
$i = 0;
$count = 0;
$arrRevers = [];
for ($i; isset($arr[$i]); $i++) {
    $count = $i;
}
for ($count; $count >= 0; $count--) {
    $arrRevers[] = $arr[$count];
}
echo "For : ";
echo "<pre>";
print_r($arrRevers);
echo "</pre>";
echo "<hr>";
//---------------------------------------------------------------------------------------------------------------------
$arr = [44, 12, 11, 7, 1, 99, 43, 5, 69];
$i = 0;
$count = 0;
$arrRevers = [];
foreach ($arr as $key => $value) {
    $i++;
}
foreach ($arr as $key => $value) {
    $arrRevers[] = $arr[$i - 1];
    $i--;
}
echo "Foreach : ";
echo "<pre>";
print_r($arrRevers);
echo "</pre>";
echo "<hr>";
//Дана строка
//let str = 'Hi I am ALex'
//развенуть строку в обратном направлении.
$letStr = 'Hi I am ALex';
$arrRevers = '';
$i = -1;
while (isset($letStr[$i])) {
    $arrRevers .= $letStr[$i];
    $i--;
}
echo "While : ";
echo $arrRevers;
echo "<hr>";
//---------------------------------------------------------------------------------------------------------------------
$letStr = 'Hi I am ALex';
$arrRevers = '';
$i = -1;
do {
    $arrRevers .= $letStr[$i];
    $i--;
} while (
    isset($letStr[$i])
);
echo "Do while : ";
echo $arrRevers;
echo "<hr>";
//---------------------------------------------------------------------------------------------------------------------
$letStr = 'Hi I am ALex';
$arrRevers = '';
$i = 0;
$count = 0;
for ($i; isset($letStr[$i]); $i++) {
    $count = $i;
}
for ($count; $count >= 0; $count--) {
    $arrRevers .= $letStr[$count];
}
echo "For : ";
echo $arrRevers;
echo "<hr>";
//---------------------------------------------------------------------------------------------------------------------
$letStr = 'Hi I am ALex';
$letStrRevers = [];
$i = 0;
while (isset($letStr[$i])) {
    $letStrRevers[] = $letStr[$i];
    $i++;
}
$letStrReversStr = '';
foreach ($letStrRevers as $key => $value) {
    $i--;
    $letStrReversStr .= $letStrRevers[$i];
}
echo "Foreach : ";
echo $letStrReversStr;
echo "<hr>";
//4. Дана строка. готовую функцию toUpperCase() or tolowercase()
//let str = 'Hi I am ALex'
//сделать ее с с маленьких букв
$letStr = 'Hi I am ALex';
$letStrArr = [];
$i =0;
$str = '';
while (isset($letStr[$i])){
    $str.= mb_strtolower($letStr[$i]);
    $i++;
}
echo $str;
























