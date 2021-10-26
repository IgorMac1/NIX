<?php

function dd($arg)
{
    echo "<pre>";
    print_r($arg);
    echo "</pre>";
    echo "<br>";
}

// 1 Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand). Далее, вычислить произведение
// тех элементов, которые больше нуля и у которых четные индексы. После вывести на экран элементы, которые больше нуля
// и у которых нечетный индекс.

function multiplyNumbArr()
{
    $arr = [];
    for ($i = 0; $i <= 5; $i++) {
        $arr[] = rand(1, 100);
    }
    $even = [];
    $notEven = [];
    for ($i = 0; isset($arr[$i]); $i++) {
        if ($arr[$i] > 0 && $i % 2 == 0) {
            $even[] = $arr[$i];
        } elseif ($arr[$i] > 0 && $i % 2 !== 0) {
            $notEven[] = $arr[$i];
        }
    }
    $resultEven = 1;
    $resultNotEven = 1;
    foreach ($even as $key => $value) {
        $resultEven *= $value;
    }
    foreach ($notEven as $key => $value) {
        $resultNotEven *= $value;
    }
    echo "Произведение элементов с четными индексами = " . $resultEven . " Произведение элементов с не четными индексами
     =  " . $resultNotEven;
}


// 2 Даны два числа. Найти их сумму и произведение. Даны два числа. Найдите сумму их квадратов.

function calcSum($a, $b)
{
    return $a + $b;
}

function multiplyNum($a, $b)
{
    return $a * $b;
}

function calcSquares($a, $b)
{
    return ($a ** 2) + ($b ** 2);
}

// 3 Даны три числа. Найдите их среднее арифметическое.
function calcAverage($a, $b, $c)
{
    return ($a + $b + $c) / 3;
}

// 4 Дано число. Увеличьте его на 30%, на 120%.
function getPercent30($a)
{
    return $a + ($a * 0.3);
}

function getPercent120($a)
{
    return $a + ($a * 1.2);
}

// 5 Пользователь выбирает из выпадающего списка страну (Турция, Египет или Италия), вводит количество дней для отдыха и
// указывает, есть ли у него скидка (чекбокс). Вывести стоимость отдыха, которая вычисляется как произведение
//   количества дней на 400. Далее это число увеличивается на 10%, если выбран Египет, и на 12%, если выбрана Италия.
// И далее это число уменьшается на 5%, если указана скидка.

function getPriceTour()
{
    include "formTour.php";
    if ($_GET['country'] == 'egypt') {
        $sum = ($_GET['days'] * 400) + (($_GET['days'] * 400) * 0.1);
    } elseif ($_GET['country'] == 'italy') {
        $sum = ($_GET['days'] * 400) + (($_GET['days'] * 400) * 0.12);
    } elseif ($_GET['country'] == 'turkey') {
        $sum = ($_GET['days'] * 400);
    }
    if ($_GET["yes"] == "on") {
        $sum -= $sum * 0.05;
    }
    return "Стоимость вашего тура составит : $sum ";
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// 6 Пользователь вводит свой имя, пароль, email. Если вся информация указана, то показать эти данные после фразы
// 'Регистрация прошла успешно', иначе сообщить какое из полей оказалось не заполненным.

function login()
{
    include_once "formLogin.php";
    echo "<br>";
    if ($_REQUEST['name'] == "" && $_REQUEST['password'] == "" && $_REQUEST['email'] == "") {
        echo "Введите данные !";
    } elseif (isset($_REQUEST['password']) && isset($_REQUEST['email']) && $_REQUEST['name'] == "") {
        echo "Вы не ввели имя !";
    } elseif (isset($_REQUEST['name']) && isset($_REQUEST['email']) && $_REQUEST['password'] == "") {
        echo "Вы не ввели пароль !";
    } elseif (isset($_REQUEST['name']) && isset($_REQUEST['password']) && $_REQUEST['email'] == "") {
        echo "Вы не ввели email !";
    } elseif (isset($_REQUEST['name']) && isset($_REQUEST['password']) && isset($_REQUEST['email'])) {
        echo "Имя : " . $_REQUEST['name'] . "<br>" . "Пароль : " . $_REQUEST['password'] . "<br>" . "Email : " . $_REQUEST['email'];
    } else "Что-то пошло не так :)";
}

// 7 Выведите на экран n раз фразу "Silence is golden". Число n вводит пользователь на форме. Если n некорректно,
// вывести фразу "Bad n".

function getString()
{
    include "formN.php";
    if (isset($_GET['num']) && $_GET['num'] !== "") {
        for ($i = 1; $i <= $_GET['num']; $i++) {
            echo "Silence is golden" . "<br>";
        }
    } elseif ($_GET['num'] == "" && !isset($n)) {
        echo "Bad n";
    }
}

// 8 Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.
function getArrOneAndZerro($n)
{
    $a = 0;
    $b = 1;
    $arr = [];
    for ($i = 0; $i < $n; $i++) {
        if ($i % 2 == 0) {
            $arr[] = $a;
        } elseif ($i % 2 !== 0) {
            $arr[] = $b;
        }
    }
    return $arr;
}

// 9 Определите, есть ли в массиве повторяющиеся элементы.
function getRepeatIndex($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] == $arr[$j]) {

                echo "Повторяющиеся элементы есть <br>";
            }
        }
    }
}

// 10 Найти минимальное и максимальное среди 3 чисел

function getMin($num1, $num2, $num3)
{
    $arr = [$num1, $num2, $num3];
    $min = $arr[0];
    for ($i = 0; $i <= 2; $i++) {
        if ($arr[$i] <= $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}

//11 Найти площадь

function getSquare()
{
    include "formSquare.php";
    $pi = 3.14;
    if ($_GET["figure"] == "circle") {
        $s = $pi * ($_GET["r"] ** 2);
    } elseif ($_GET["figure"] == "rectangle") {
        $s = $_GET["a"] * $_GET["h"];
    } elseif ($_GET["figure"] == $_GET["triangle"]) {
        $s = 0.5 * $_GET["a"] * $_GET["h"];
    }
    return $s;
}

// 12 Теорема Пифагора

function calcPifagorNum($a, $b)
{
    return sqrt($a ** 2 + $b ** 2);
}

// 13 Найти периметр

function calcPerimetr($a, $b, $c, $d)
{
    return $a + $b + $c + $d;
}

// 14 Найти дискриминант

function calcDiscriminant($a, $b, $c)
{
    return ($b ** 2) - (4 * $a * $c);
}

//15 Создать только четные числа до 100

function getEven()
{
    $arr = [];
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            $arr[] = $i;
        }
    }
    return $arr;
}

// 16 Создать не четные числа до 100

function getNotEven()
{
    $arr = [];
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 !== 0) {
            $arr[] = $i;
        }
    }
    return $arr;
}

// 17 Создать функцию по нахождению числа в степени
function findDegree($numb, $degree)
{
    return $numb ** $degree;
}

// 18 написать функцию сортировки. Функция принимает массив случайных чисел и сортирует их по порядку.
// По дефолту функция сортирует в порядке возрастания.
// Но если передать второй параметр то функция будет сортировать по убыванию.
//sort(arr)
//sort(arr, 'asc')
//sort(arr, 'desc')
function sortedArr($arrNum, $sort = 'asc')
{
    if ($sort == 'asc') {
        $arrCount = 0;
        while (isset($arrNum[$arrCount])) {
            $arrCount++;
        }
        for ($i = 0; $i < $arrCount; $i++) {
            for ($j = 0; $j < $arrCount - 1; $j++) {
                if ($arrNum[$j] > $arrNum[$j + 1]) {
                    $temp = $arrNum[$j + 1];
                    $arrNum[$j + 1] = $arrNum[$j];
                    $arrNum[$j] = $temp;
                }
            }
        }
    } elseif ($sort == 'desc') {
        $arrCount = 0;
        while (isset($arrNum[$arrCount])) {
            $arrCount++;
        }
        for ($i = 0; $i < $arrCount; $i++) {
            for ($j = 0; $j < $arrCount - 1; $j++) {
                if ($arrNum[$j] < $arrNum[$j + 1]) {
                    $temp = $arrNum[$j + 1];
                    $arrNum[$j + 1] = $arrNum[$j];
                    $arrNum[$j] = $temp;
                }
            }
        }
    }
    return $arrNum;
}

// 19 написать функцию поиска в массиве. функция будет принимать два параметра. Первый массив, второй поисковое число.
// search(arr, find)

function searchInArr($arr, $find)
{
    foreach ($arr as $key => $value) {
        if ($value == $find) {
            echo 'Число ' . $find . ' найдено';
        }

    }
}



