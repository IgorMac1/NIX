<?php
require 'function.php';
// 1 Найти минимальное и максимальное среди 3 чисел
/**
 * @param integer $num1
 * @param integer $num2
 * @param integer $num3
 * @return integer
 */
$getMin = function ($num1, $num2, $num3): integer {
    $arr = [$num1, $num2, $num3];
    $min = $arr[0];
    for ($i = 0; $i <= 2; $i++) {
        if ($arr[$i] <= $min) {
            $min = $arr[$i];
        }
    }
    return $min;
};
//----------------------------------------------------------------------------------------------------------------------
/**
 * @param integer $num1
 * @param integer $num2
 * @param integer $num3
 * @return integer
 */
$getMin2 = fn($num1, $num2, $num3): integer => $getMin($num1, $num2, $num3);

//----------------------------------------------------------------------------------------------------------------------
$getMax = function ($num1, $num2, $num3) {
    $arr = [$num1, $num2, $num3];
    $max = $arr[0];
    for ($i = 0; $i <= 2; $i++) {
        if ($arr[$i] >= $max) {
            $max = $arr[$i];
        }
    }
    return $max;
};
//----------------------------------------------------------------------------------------------------------------------
$getMax2 = fn($num1, $num2, $num3) => $getMax($num1, $num2, $num3);

// 2 Найти площадь

$square = function ($a, $b) {
    return $a * $b;
};
//----------------------------------------------------------------------------------------------------------------------
$square2 = fn($a, $b) => $a * $b;

// 3 Теорема Пифагора

$calcPifagorNum = function ($a, $b) {
    return sqrt($a ** 2 + $b ** 2);
};
//----------------------------------------------------------------------------------------------------------------------
$calcPifagorNum2 = fn($a, $b) => sqrt($a ** 2 + $b ** 2);

// 4 Найти периметр

$calcPerimetr = function ($a, $b, $c, $d) {
    return $a + $b + $c + $d;
};
//----------------------------------------------------------------------------------------------------------------------
$calcPerimetr2 = fn($a, $b, $c, $d) => $a + $b + $c + $d;

// 5 Найти дискриминант

$calcDiscriminant = function ($a, $b, $c) {
    return ($b ** 2) - (4 * $a * $c);
};
//----------------------------------------------------------------------------------------------------------------------
$calcDiscriminant2 = fn($a, $b, $c) => ($b ** 2) - (4 * $a * $c);

// 6 Создать только четные числа до 100


$getEven = function () {
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo $i . '<br>';
        }
    }

};
//----------------------------------------------------------------------------------------------------------------------
$getEven2 = fn() => $getEven();

// 7 Создать нечетные числа до 100
/**
 * @return bool
 */
$getNotEven = function (): bool {
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 !== 0) {
            echo $i . '<br>';
        }
    }
    return true;
};
//----------------------------------------------------------------------------------------------------------------------
$getNotEven2 = fn() => $getNotEven();

// 8 Определите, есть ли в массиве повторяющиеся элементы.
/**
 * @param array $arr
 * @return bool
 */
$getRepeatIndex = function ($arr): bool {
    $counter = count($arr);
    for ($i = 0; $i < $counter; $i++) {
        for ($j = $i + 1; $j < $counter; $j++) {
            if ($arr[$i] == $arr[$j]) {
                echo "Повторяющиеся элементы есть '<br>'";
                break;

            }
        }
    }
    return true;
};
//----------------------------------------------------------------------------------------------------------------------
/**
 * @param $arr
 * @return bool
 */
$getRepeatIndex = fn($arr): array => $getRepeatIndex($arr);

// 9 Сортировка из прошлого задания
/**
 * @param array $arrNum
 * @param string $sort
 * @return array
 */
$sortedArr = function ($arrNum, $sort = 'asc'): array {
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
};
//----------------------------------------------------------------------------------------------------------------------
/**
 * @param array $arrNum
 * @param string $sort
 * @return array
 */
$sortedArr2 = fn($arrNum, $sort = 'asc'): array => $sortedArr($arrNum, $sort = 'asc');
