<form action="index.php" method="get">
    <select name="country">
        <option value=''>Выберете cтрану</option>
        <option value='turkey'>Турция</option>
        <option value='egypt'>Египет</option>
        <option value='italy'>Италия</option>
    </select>
    <input type="number" name="days" placeholder="Количество дней">

        <p>У вас есть скидка?</p>
        <input type="checkbox" name="yes">


    <input type='submit' [name='go'] value='Отправить'>
    <input type='reset' [name='res'] value='Очистить' >

