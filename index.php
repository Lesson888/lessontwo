<?php

$message = false;

echo $test;

if (isset($_REQUEST['name']) and isset ($_REQUEST['phone'])) {

    $name = $_REQUEST ['name'];
    $phone = $_REQUEST ['phone'];

    if(empty($name)|| empty($phone) {
        echo 'Заполните поля';
        else }

    $row = 'Здравствуйте, ' . $name .
        '. Ваш номер. ' . $phone . PHP_EOL;

    // PHP_EOL = 'ln';

    file_put_contents('./contacts.txt', $row, FILE_APPEND);


    $message = 'Спасибо! Мы с вами свяжемся.';
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet"href"<div class="/CSS/bootstrap.min.css"></div>
</head>
<body>

<div class="container"></div>

<?php if ($message) : ?>
    <?= $message ?>
    <?php else: ?>
<form action="index.php" method="post">
    <p>Представьтесь</p>
    <input type="text" name="name">
    <p>Укажите ваш номер</p>
   <input type="text" name="phone">
    <button type="submit">отправить</button>
</form>
<?php endif; ?>

<?php if($message) : ?>
<?=$message ?>
<?php else: ?>

<?php endif: ?>

</body>
</html>