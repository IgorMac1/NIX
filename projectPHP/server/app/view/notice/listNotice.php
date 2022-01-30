<div class="listNotice-buttons">
    <a href="user">
        <button>Return</button>
    </a>
    <form action="/deleteNotice" method="post">
        <button type="submit" name="deleteNotice">Delete SQL notices</button>
    </form>
</div>
<div class="listNotice">
    <ol>
        <?php
        if (isset($notices)) {
            foreach ($notices as $notice) {
                echo '<li>' . $notice['notice'] . '</li>' . '<hr>';
            }
            echo 'Empty';
        }
        ?>
    </ol>
</div>

