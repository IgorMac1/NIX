<?php
require 'form.html';
if (isset($_GET['guess']) && $_GET['guess'] !== '') {
    $playerNum = $_GET['guess'];
    $randNum = rand(5, 8);
} else {
    echo 'Введите число';
}
if ($playerNum < 5 && $playerNum !== null) {
    echo 'Число маленькое';
} elseif ($playerNum > 8 && $playerNum !== null) {
    echo 'Число большое';
} elseif ($playerNum == $randNum && $playerNum !== null) {
    echo 'Вы угадали !!!! <p>Вы угадали!!!  <a href="index.php">Играть еще!!!</a></p>';
} elseif ($playerNum != $randNum) {
    echo "<p>Вы не угадали!!!  <a href='index.php'>Попробовать еще!!!</a></p>";
}
