<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    <title><?php echo $title; ?></title>
</head>
<body>
<?php
if (isset($_SESSION['name'])){
    echo 'Hello ' . ucfirst($_SESSION['name']);
}
echo $content;
?>
</body>
</html>
