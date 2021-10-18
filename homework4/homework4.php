<?php
session_start();
?>
<!--//Задание 1-->
<!--//создать форму оставить отзыв-->
<!--//поле имя-->
<!--//поле комментарий-->

<form action="index.php" method="post">
    <p>Ваш отзыв</p>
    <input type="text" name="" placeholder="Введите ваше имя">
    <br>
    <textarea name="coment" cols="30" rows="5" placeholder="Введите ваш комментарий"></textarea>
    <br>
    <br>
    <input type='submit' [name='go'] value='Отправить'>
    <input type='reset' [name='res'] value='Очистить'>
</form>
<br>
<hr>
<br>
<br>

<!--//Задание 2-->
<!--создать форму добавить товар в корзину-->
<!--id товара-->
<!--количество-->
<form action="index.php" method="post">

    <input type="number" name="id" placeholder="Введите id товара">
    <br>
    <input type="number" name="num" placeholder="Введите количество товара">
    <br>
    <br>
    <input type='submit' [name='go'] value='Отправить'>
    <input type='reset' [name='res'] value='Очистить'>
    <br>
    <?= "ID вашего товара :" . $_POST['id'] . "<br>" . $_POST['num'] . " шт"?>
</form>
<br>
<hr>
<br>
<br>
<!--//Задание 3-->
<!--обратная связь перезвонить клиенту-->
<!--имя-->
<!--телефон-->
<form action="index.php" method="post">
    <p>Оставьте ваши данные и мы с вами свяжемся</p>
    <input type="text" name="name" placeholder="Введите ваше имя">
    <br>
    <input type="tel" name="tel" placeholder="Введите ваш телефон">
    <br>
    <br>
    <input type='submit' [name='go'] value='Отправить'>
    <input type='reset' [name='res'] value='Очистить'>
    <?php
    $tel = $_POST["tel"];
    $name = $_POST["name"];
    if ((isset($_REQUEST['name']) && $_REQUEST['name'] !== '') && (isset($_REQUEST['tel']) && $_REQUEST['tel'] !== ''))
    {
        echo 'Уже звоним вам '  .  $_REQUEST['name'] . ' по номеру :' .  $_REQUEST['tel'];
    }
    else
        {
            echo 'Пожалуйта,введите данные';
        }
    ?>
</form>
<br>
<hr>
<br>
<br>
<!--//Задание 4-->
<!--создать форму оформить заказ-->
<!--имя-->
<!--телефон-->
<!--тип доставки-->
<!--адрес доставки-->
<!--сессия получить список id товаров и передать в форму-->

<form action="index.php" method="post" >
    <p>Заполните,чтобы оформить заказ</p>
        <select name="product" >
            <option value='' >Выберете товар</option>
            <option value='Iphone'>Iphone</option>
            <option value='Samsung'>Samsung</option>
            <option value='Xiaomi'>Xiaomi</option>
            <option value='Huawei'>Huawei</option>
        </select>
    <br>
        <br>
    <input type="text" name="name2" placeholder="Введите ваше имя">
    <br>
    <br>
    <input type="tel" name="tel" placeholder="Введите ваш телефон">
    <br>
    <br>
    <select name="delivery" >
        <option value='' >Выберете тип доставки</option>
        <option value=1>Новая Почта</option>
        <option value=2>Delivery</option>
        <option value=3>Укрпочта</option>
        <option value=4>Meest Express</option>
    </select>
    <br>
        <br>
        <textarea name="location" cols="50" rows="5" placeholder="Введите адрес доставки"></textarea>
        <br>
    <br>
        <input type='submit' [name='go'] value='Отправить'>
        <input type='reset' [name='res'] value='Очистить'>
    <br>
    <br>
    <?php
    if (isset($_POST['product']) && isset($_POST['name2']) && isset($_POST['tel']) && isset($_POST['delivery']) && isset($_POST['location']))
    {
        echo 'Ваш заказ : ' . $_POST['product'] . "  " . $_POST['name2'] . "  " . $_POST['tel'] . "  " . $_POST['delivery'] . "  " . $_POST['location'];
    }
    echo "<br>";
    $_SESSION['id'] = $_POST;
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
    ?>