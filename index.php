<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Простейший PHP-cкpиnт</title>
    <meta charset='utf-8'>
</head>
<body>
<?php
$a = file('list.txt');
if($_POST){
    $b = $_POST;
    array_diff($a, $b);
    file_put_contents('list.txt', array_diff($a, $b));
}

?>
    <form method="post">
        <label><input type="text"></label>
        <br>
        <input type="submit">
    </form>
</body>
</html>

