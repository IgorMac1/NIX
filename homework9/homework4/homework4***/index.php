<?php
//1 Загружать файлы на сервер, попробуйте разрешить загрузку файлов только определенного формата
//  a pdf
//  b excel
//  c word
//   для изображений реализуй
//  d png
//  e jpg
$valid_types = array('pdf', 'exel', 'word', 'png', 'jpeg');
if (isset($_FILES['userfile'])) {
    if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
        $filename = basename($_FILES['userfile']['name']);
        $ext = substr($_FILES['userfile']['name'], 1 + strrpos($_FILES['userfile']['name'], '.'));
        $size = get_image_size($_FILES['userfile']['tmp_name']);
        if (in_array($ext, $valid_types)) {
            $uploaddir = '/var/www/html/public';
            $uploadfile = $filename;
            move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
            echo '<img src="$uploadfile" alt="$filename" title="$filename" />';
        } elseif (!in_array($ext, $valid_types)) {
            echo 'Error: Invalid file type.';
        }
    } else {
        echo 'Error: empty file.';
    }
} else {
    echo "
<form enctype=multipart / form - data' method = 'post' >
        Send this file: <input name = 'userfile' type = 'file' >
<input type = 'submit' value = 'Send File' >
</form > ";
}
