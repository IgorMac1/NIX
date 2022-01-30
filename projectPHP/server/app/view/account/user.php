
<form action="" method="post"><input name="logOut" type="submit" value="Log Out"></form>
<div class="user">
    <form action="/addNotice" method="post">
    <select class="form-select" aria-label="Default select example" name="selectedFile">
        <option selected> Выберите тип даных</option>
        <option value="db" name="db">DB</option>
        <option value="txt" name="txt">TXT</option>
        <option value="csv" name="csv">CSV</option>
    </select>
        <textarea name="text" placeholder="Text"></textarea>
        <p><input type="submit" value="Write" class="user-button"></p>
    </form>
    <form action="/listNotice" method="post">
        <select class="form-select" aria-label="Default select example" name="selectedFile">
            <option selected> Выберите тип даных</option>
            <option value="db" name="db">DB</option>
            <option value="txt" name="txt">TXT</option>
            <option value="csv" name="csv">CSV</option>
        </select>
        <p><input type="submit" value="Read" class="user-button"></p>
    </form>
</div>




