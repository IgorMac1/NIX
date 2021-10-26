<form action="index.php" method="get">
    <select name="figure">
        <option value=''>Выберите фигуру</option>
        <option value='circle'>Круг</option>
        <option value='rectangle'>Прямоугольник</option>
        <option value='triangle'>Треугольник</option>
    </select>
    <input type="text" name="r" placeholder="Введите радиус(только для круга)">
    <input type="text" name="a" placeholder="Введите длинну основания">
    <input type="text" name="h" placeholder="Введите высоту треугольника,или ширину прямоугольника">
    <input type="submit" name="go">
</form>