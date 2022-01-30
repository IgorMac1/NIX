<?php
// phpcs:disable
/**
 * @param array $arg
 * @return array|bool
 */
function dd(array $arg): array
{
    echo '<pre>';
    print_r($arg);

    echo '</pre>';
    echo '<br>';
    return true;
}

// phpcs:enable

// 1 Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand). Далее, вычислить произведение
// тех элементов, которые больше нуля и у которых четные индексы. После вывести на экран элементы, которые больше нуля
// и у которых нечетный индекс.
/**
 * @param integer $x
 * @return integer
 */
function multiplyNumbArr($x): integer
{
    $arr = [];
    for ($i = 0; $i <= $x; $i++) {
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
    echo 'Произведение элементов с четными индексами = ' . $resultEven . ' Произведение элементов с не четными индексами
     =  ' . $resultNotEven;
    return $resultNotEven;
}


// 2 Даны два числа. Найти их сумму и произведение. Даны два числа. Найдите сумму их квадратов.
/**
 * @param integer $a
 * @param integer $b
 * @return integer
 */
function calcSum($a, $b): int
{
    $sum = $a + $b;
    return $sum;
}

calcSum(5, 8);
/**
 * @param integer $a
 * @param integer $b
 * @return integer
 */
function multiplyNum($a, $b): integer
{
    return $a * $b;
}

/**
 * @param integer $a
 * @param integer $b
 * @return integer
 */
function calcSquares($a, $b): integer
{
    return ($a ** 2) + ($b ** 2);
}

// 3 Даны три числа. Найдите их среднее арифметическое.
/**
 * @param integer $a
 * @param integer $b
 * @param integer $c
 * @return integer
 */
function calcAverage($a, $b, $c): integer
{
    return ($a + $b + $c) / 3;
}

// 4 Дано число. Увеличьте его на 30%, на 120%.
/**
 * @param integer $a
 * @return integer
 */
function getPercent30($a): integer
{
    return $a + ($a * 0.3);
}

/**
 * @param integer $a
 * @return integer
 */
function getPercent120($a): integer
{
    return $a + ($a * 1.2);
}

// 5 Пользователь выбирает из выпадающего списка страну (Турция, Египет или Италия), вводит количество дней для отдыха и
// указывает, есть ли у него скидка (чекбокс). Вывести стоимость отдыха, которая вычисляется как произведение
//   количества дней на 400. Далее это число увеличивается на 10%, если выбран Египет, и на 12%, если выбрана Италия.
// И далее это число уменьшается на 5%, если указана скидка.
/**
 * @return string
 */
function getPriceTour()
{
    include 'formTour.html';
    if ($_GET['country'] == 'egypt') {
        $sum = ($_GET['days'] * 400) + (($_GET['days'] * 400) * 0.1);
    } elseif ($_GET['country'] == 'italy') {
        $sum = ($_GET['days'] * 400) + (($_GET['days'] * 400) * 0.12);
    } elseif ($_GET['country'] == 'turkey') {
        $sum = ($_GET['days'] * 400);
    }
    if ($_GET['yes'] == 'on') {
        $sum -= $sum * 0.05;
    }
    return 'Стоимость вашего тура составит : $sum ';
}


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// 6 Пользователь вводит свой имя, пароль, email. Если вся информация указана, то показать эти данные после фразы
// 'Регистрация прошла успешно', иначе сообщить какое из полей оказалось не заполненным.
/**
 * @return string
 */
function login()
{
    include_once 'formLogin.html';
    echo '<br>';
    if ($_REQUEST['name'] == '' && $_REQUEST['password'] == '' && $_REQUEST['email'] == '') {
        echo 'Введите данные !';
    } elseif (isset($_REQUEST['password']) && isset($_REQUEST['email']) && $_REQUEST['name'] == '') {
        echo 'Вы не ввели имя !';
    } elseif (isset($_REQUEST['name']) && isset($_REQUEST['email']) && $_REQUEST['password'] == '') {
        echo 'Вы не ввели пароль !';
    } elseif (isset($_REQUEST['name']) && isset($_REQUEST['password']) && $_REQUEST['email'] == '') {
        echo 'Вы не ввели email !';
    } elseif (isset($_REQUEST['name']) && isset($_REQUEST['password']) && isset($_REQUEST['email'])) {
        return 'Имя : ' . $_REQUEST['name'] . '<br>' . 'Пароль : ' . $_REQUEST['password'] . '<br>' . 'Email : ' . $_REQUEST['email'];
    } else {
        'Что-то пошло не так :)';
    }
}

// 7 Выведите на экран n раз фразу 'Silence is golden'. Число n вводит пользователь на форме. Если n некорректно,
// вывести фразу 'Bad n'.
/**
 * @return string
 */
function getString()
{
    include 'formN.html';
    if (isset($_GET['num']) && $_GET['num'] !== '') {
        for ($i = 1; $i <= $_GET['num']; $i++) {
            return 'Silence is golden' . '<br>';
        }
    } elseif ($_GET['num'] == '' && !isset($n)) {
        return 'Bad n';
    }
}

// 8 Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.
/**
 * @param integer $n
 * @return integer
 */
function getArrOneAndZerro($n): int
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
/**
 * @param array $arr
 * @return array
 */
function getRepeatIndex(array $arr): array
{
    $counter = count($arr);
    for ($i = 0; $i < $counter; $i++) {
        for ($j = $i + 1; $j < $counter; $j++) {
            if ($arr[$i] == $arr[$j]) {
                $result = true;
            }
        }
    }
    return $result;
}

// 10 Найти минимальное и максимальное среди 3 чисел
/**
 * @param integer $num1
 * @param integer $num2
 * @param integer $num3
 * @return integer
 */
function getMin($num1, $num2, $num3): integer
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
/**
 * @return float
 */
function getSquare()
{
    include 'formSquare.html';
    $pi = 3.14;
    if ($_GET['figure'] == 'circle') {
        $s = $pi * ($_GET['r'] ** 2);
    } elseif ($_GET['figure'] == 'rectangle') {
        $s = $_GET['a'] * $_GET['h'];
    } elseif ($_GET['figure'] == $_GET['triangle']) {
        $s = 0.5 * $_GET['a'] * $_GET['h'];
    }
    return $s;
}

// 12 Теорема Пифагора
/**
 * @param integer $a
 * @param integer $b
 * @return integer
 */
function calcPifagorNum($a, $b): integer
{
    return sqrt($a ** 2 + $b ** 2);
}

// 13 Найти периметр
/**
 * @param integer $a
 * @param integer $b
 * @param integer $c
 * @param integer $d
 * @return integer
 */
function calcPerimetr($a, $b, $c, $d): integer
{
    return $a + $b + $c + $d;
}

// 14 Найти дискриминант
/**
 * @param integer $a
 * @param integer $b
 * @param integer $c
 * @return integer
 */
function calcDiscriminant($a, $b, $c): integer
{
    return ($b ** 2) - (4 * $a * $c);
}

//15 Создать только четные числа до 100
/**
 * @return array
 */
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
/**
 * @return array
 */
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
/**
 * @param integer $numb
 * @param integer $degree
 * @return integer
 */
function findDegree($numb, $degree): integer
{
    return $numb ** $degree;
}

// 18 написать функцию сортировки. Функция принимает массив случайных чисел и сортирует их по порядку.
// По дефолту функция сортирует в порядке возрастания.
// Но если передать второй параметр то функция будет сортировать по убыванию.
//sort(arr)
//sort(arr, 'asc')
//sort(arr, 'desc')
/**
 * @param array  $arrNum
 * @param string $sort
 * @return  array
 */
function sortedArr($arrNum, $sort = 'asc'): array
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
/**
 * @param array $arr
 * @param float $find
 * @return float
 */
function searchInArr($arr, $find): float
{
    foreach ($arr as $key => $value) {
        if ($value == $find) {
            $result = $find;
        }
    }
    return $result;
}
